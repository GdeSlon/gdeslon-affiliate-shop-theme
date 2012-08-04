<?php
class BegiWidget extends WP_Widget
{
	protected $_wpdb;

	public function __construct()
	{
		global $wpdb;
		$this->_wpdb = $wpdb;
		parent::WP_Widget('begi_gdeslon_widget', 'Featured Product Widget', array('description' => 'Вывод избранного товара'));
	}

	/**
	 * @see WP_Widget::widget
	 * @param $args
	 * @param $instance
	 * @return void
	 */
	public function widget($args, $instance)
	{
		list($obPost) = get_posts(array(
			'post_type'   => 'ps_catalog',
			'numberposts' => 1,
			'orderby'     => 'rand',
			'meta_query' => array(
				array(
					'key' => 'is_featured',
					'value' => 1,
					'compare' => '=',
					'type' => 'NUMERIC'
				)
			)
		));
		if (!$obPost)
			return;
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$depth = empty($instance['depth']) ? 0 : intval($instance['depth']);
		echo $before_widget;
		//содержание функции psCategories
		echo $before_title, ($title ? $title : 'Самое популярное'), $after_title;

		?>
	<div class="dp_products_widget">
		<div class="dp_widget_product">
			<div class="dp_widget_product_image">
				<a href="<?php echo get_permalink($obPost->ID) ?>" title="<?php echo $obPost->post_title?>"
				   style="display: block;">
					<?php get_image_from_catalog_item($obPost, 150)?>
				</a>
			</div>
			<div class="dpsc_grid_product_detail">
				<p class="title">
					<a href="<?php echo get_permalink($obPost->ID) ?>">
						<?php echo $obPost->post_title?>
					</a>
				</p>

				<a href="<?php echo GS_PLUGIN_URL?>go.php?url=<?php echo get_post_meta($obPost->ID, 'url', TRUE); ?>"
				target="_blank" class="dpsc_submit_button">
					Купить за <?php echo get_post_meta($obPost->ID, 'price', TRUE); ?> <?php echo (get_post_meta($obPost->ID, 'currency', TRUE) == 'RUR' ? 'руб.' : get_post_meta($obPost->ID, 'currency', TRUE)); ?></a>
			</div>
		</div>
	</div>
	<?php
		echo $after_widget;
	}

	/**
	 * @param $new_instance
	 * @see WP_Widget::update
	 * @param $old_instance
	 * @return array
	 */
	public function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['depth'] = intval($new_instance['depth']);
		return $instance;
	}

	/**
	 * @see WP_Widget::form
	 * @param $instance
	 * @return void
	 */
	public function form($instance)
	{
		if ($instance) {
			$title = esc_attr($instance['title']);
		} else {
			$title = 'Самое популярное';
		}
		?>
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">Заголовок</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
			   name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>"/>
	</p>
	<?php
	}
}

add_action('widgets_init', 'registerBegiWidget');
function registerBegiWidget()
{
	register_widget("BegiWidget");
}