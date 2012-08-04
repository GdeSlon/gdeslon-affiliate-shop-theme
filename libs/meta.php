<?php
class Fruitframe_AddMetaBox
{
	protected $_fields;
	protected $_id;
	protected $_postType;
	protected $_metaTitle;
	protected $_control;

	public function __construct()
	{
		$this->_control = Fruitframe_Control::getInstance();
	}

	public function create($id, $fields, $postType, $metaTitle)
	{
		$this->_id = $id;
		$this->_fields = $fields;
		$this->_postType = $postType;
		$this->_metaTitle = $metaTitle;
		add_action('add_meta_boxes', array($this, 'add'));
		add_action('save_post', array($this, 'save'));
	}

	public function add()
	{
		add_meta_box(
			$this->_id,
			$this->_metaTitle,
			array($this, 'render'),
			$this->_postType,
			'side'
		);
	}

	protected function _getValues($postId)
	{
		$data = get_post_custom($postId);
		$result = array();
		foreach($data as $key => $value)
		{
			if (is_array($value) && count($value) == 1)
				$result[$key] = $value[0];
			else
				$result[$key] = $value;
			if (@unserialize($result[$key]) !== FALSE)
				$result[$key] = unserialize($result[$key]);
		}
	//	var_dump($result);die;
		return $result;
	}

	public function render()
	{
		global $post;
		wp_nonce_field(plugin_basename( __FILE__ ), $this->_id.'_noncename');
		echo $this->_control->renderAll($this->_fields, $this->_getValues($post->ID), $this->_id);
	}

	public function save($post_id)
	{
		global $post;
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
			return;
		if (empty($_POST[$this->_id.'_noncename']) || !wp_verify_nonce($_POST[$this->_id.'_noncename'], plugin_basename(__FILE__)))
			return;
		if ($this->_postType == $_POST['post_type'] && !current_user_can('edit_post', $post_id))
			return;
		foreach($this->_fields as $field => $config)
		{
			$value = @$_POST[$this->_id][$field];
			if (get_post_meta($post_id, $field, true))
			{
				if (empty($value))
					delete_post_meta($post_id, $field);
				else
					update_post_meta($post_id, $field, $value);
			}
			elseif(!empty($value))
				add_post_meta($post_id, $field, $value, true);
		}
	}
}