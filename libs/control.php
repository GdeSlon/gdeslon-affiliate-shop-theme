<?php
class Fruitframe_Control
{
	protected $_config;
	protected $_field;
	protected $_value;
	protected static $_instance = null;

	/**
	 * Get object instance
	 *
	 * @return object
	 */
	static public function getInstance()
	{
		if ( null === self::$_instance ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}


	public function renderAll($data, $values, $prefix)
	{
		$result = '';
		foreach($data as $field => $config)
			$result .= $this->render($field, $config, empty($values[$field]) ? NULL : $values[$field], $prefix);
		return $result;
	}

	public function render($field, $config = null, $value = null, $fieldPrefix = 'fruitframe')
	{
		$this->_fieldPrefix = $fieldPrefix;
		$this->_config = $config;
		$this->_field = $field;
		$this->_value = $value;
		$html = $this->_renderHeader();
		switch ($this->_config['type']) {
			case 'text':
				$html .= $this->_renderText();
				break;
			case 'image':
				$html .= $this->_renderImage();
				break;
			case 'textarea':
				$html .= $this->_renderTextarea();
				break;
			case 'wysiwyg':
				$html .= $this->_renderWysiwyg();
				break;
			case 'select':
				$html .= $this->_renderSelectbox();
				break;
			case 'checkbox':
				$html .= $this->_renderCheckbox();
				break;
			case 'view':
				$html .= $this->_renderView();
			default:
				break;
		}
		$html .= $this->_renderFooter();
		return $html;
	}


	protected function _renderHeader()
	{
		return '<div class="option"><h4>' . $this->_config['label'] . '</h4>';
	}

	protected function _renderFooter()
	{
		return '</div>';
	}

	protected function _renderText()
	{
		$value = null !== $this->_value ? $this->_value : $this->_config['default'];

		$html = '<div class="value">';
		$html .= '<input type="text" class="text" name="'.$this->_fieldPrefix.'[' . $this->_field . ']" id="fruitframes_option_' . $this->_field . '" value="' . $value . '" />';
		$html .= '</div>';
		if (array_key_exists('description', $this->_config))
			$html .= '<div class="description">'. $this->_config['description'] .'</div>';

		return $html;
	}

	protected function _renderView()
	{
		$value = null !== $this->_value ? $this->_value : $this->_config['default'];
		$html = '<div class="value">';
		$html .= $value;
		$html .= '</div>';
		if (array_key_exists('description', $this->_config))
			$html .= '<div class="description">'. $this->_config['description'] .'</div>';

		return $html;
	}


	protected function _renderImage()
	{
		$html = '<div class="value">';
		if ($this->_value) {
			$html .= '<img src="' . $this->_value . '" alt="" /> <a href="#" class="delete" rel="' . $this->_field . '">delete</a>';
		} else {
			$html .= '<input type="file" title="' . $this->_field . '" name="'.$this->_fieldPrefix.'[' . $this->_field . ']" id="fruitframes_option_' . $this->_field . '" />';
		}
		$html .= '</div>';
		$html .= '<div class="description">'. @$this->_config['description'] .'<br/><strong>Image dimensions: ' . $this->_config['width'] . 'x' . $this->_config['height'] . '</strong></div>';
		return $html;
	}


	protected function _renderTextarea()
	{
		$value = null !== $this->_value ? $this->_value : $this->_config['default'];

		$html = '<div class="value">';
		$html .= '<textarea name="'.$this->_fieldPrefix.'[' . $this->_field . ']" id="fruitframes_option_' . $this->_field . '" cols="40" rows="5">' . stripslashes($value) . '</textarea>';
		$html .= '</div>';
		$html .= '<div class="description">'. $this->_config['description'] .'</div>';

		return $html;
	}

	protected function _renderWysiwyg()
	{
		$value = null !== $this->_value ? $this->_value : $this->_config['default'];

		$html = '<div class="value">';
		ob_start();
		wp_editor($value, $this->_fieldPrefix.'[' . $this->_field . ']', array('media_buttons' => FALSE));
		$html .= ob_get_clean();
		$html .= '</div>';
		$html .= '<div class="description">'. $this->_config['description'] .'</div>';

		return $html;
	}

	protected function _renderCheckbox()
	{
		$value = null !== $this->_value ? $this->_value : $this->_config['default'];

		$html = '<div class="value">';
		$html .= '<select name="'.$this->_fieldPrefix.'[' . $this->_field . ']" id="fruitframes_option_' . $this->_field . '">';
		$html .= '<option value="0">No</option>';
		$html .= '<option value="1" ' . ($value ? 'selected="selected"' : '') . '>Yes</option>';
		$html .= '</select>';
		//$html .= '<input type="checkbox" name="'.$this->_fieldPrefix.'[' . $this->_field . ']" id="fruitframes_option_' . $this->_field . '" value="1" ' . ($value ? 'checked="checked"' : '') . ' />';
		$html .= '</div>';
		if (array_key_exists('description', $this->_config))
			$html .= '<div class="description">'. $this->_config['description'] .'</div>';
		return $html;
	}

	protected function _renderSelectbox()
	{
		if (is_array($this->_value))
		{
			$isMultiple = TRUE;
			$value = $this->_value;
		}
		else
		{
			$value = null !== $this->_value ? $this->_value : $this->_config['default'];
			$isMultiple = !empty($this->_config['multiple']);
		}

		$html = '<div class="value">';
		$html .= '<select name="'.$this->_fieldPrefix.'[' . $this->_field . ']'.($isMultiple ? '[]' : '').'" id="fruitframes_option_' . $this->_field . '"'.($isMultiple ? ' multiple="multiple" class="multiple-select"' : '').'>';
		foreach ($this->_config['options'] as $opt => $label) {
			$html .= '<option value="' . $opt . '" ' . (($isMultiple && is_array($value) && in_array($opt, $value)) ||  $opt == $value ? 'selected="selected"' : '') . '>' . $label . '</option>';
		}
		$html .= '</select>';
		$html .= '</div>';
		if (!empty($this->_config['description']))
			$html .= '<div class="description">'. $this->_config['description'] .'</div>';

		return $html;
	}
}