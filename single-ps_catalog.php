<?php get_header(); ?>
<div id="content">
	<div id="contentleft">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="postarea">
			<h1><?php the_title()?></h1>
			<div class="dpsc_product_main_container">
				<div class="dpsc_image_container">
					<div class="dpsc_image_section">
						<div class="dpsc_main_image main_95">
							<?php get_image_from_catalog_item($post, 275)?>
						</div>
					</div>
				</div>
				<div class="dpsc_content_container">
					<p class="dpsc_price">Цена: <strong
							id="dpsc_new_product_price_95"><?php echo get_post_meta($post->ID, 'price', TRUE); ?></strong> <?php echo (get_post_meta($post->ID, 'currency', TRUE) == 'RUR' ? 'руб.' : get_post_meta($post->ID, 'currency', TRUE)); ?>
					</p>
					<?php if (get_post_meta($post->ID, 'vendor', TRUE)): ?>
					<p class="dpsc_price">Производитель:
						<strong><?php echo get_post_meta($post->ID, 'vendor', TRUE)?></strong></p>
					<?php endif?>
					<?php if (get_post_meta($post->ID, 'params_list', TRUE)): ?>
					<?php foreach (explode(',', get_post_meta($post->ID, 'params_list', TRUE)) as $paramKey): ?>
						<p class="dpsc_price"><?php echo $paramKey?>:
							<strong><?php echo get_post_meta($post->ID, $paramKey, TRUE)?></strong></p><tr>
						<?php endforeach ?>
					<?php endif?>
					<a href="<?php echo GS_PLUGIN_URL?>go.php?url=<?php echo get_post_meta($post->ID, 'url', TRUE); ?>"
					   target="_blank" class="dpsc_submit_button">
						Купить
					</a>
				</div>
			</div>
			<div class="clear"></div>
			<?php
			/**
			 * Выводим описание товара, убираем фильтр, который ломает отображение. Декодируем преобразованные html-тэги
			 */
			remove_filter('the_content', 'showPost', 999999);
			echo html_entity_decode(get_the_content());
			?>
			<div style="clear:both;"></div>
		</div>
		<?php endwhile; endif; ?>
		<div class="clear" style="height: 30px;"></div>
		<div class="dpsc_grid_display">
			<h3>Похожие товары</h3>
			<?php
			$termsList = wp_get_post_terms($post->ID, 'ps_category');
			$args = array(
				'numberposts' => GS_Config::init()->get('ps_row_limit'),
				'orderby' => 'rand',
				'post_type' => 'ps_catalog',
				'post__not_in' => array($post->ID)
			);
			$terms = array();
			foreach ($termsList as $obTerm) {
				$terms[$obTerm->term_id] = $obTerm->term_id;
			}
			if (count($terms)) {
				$args['tax_query'] = array(
					array(
						'taxonomy' => 'ps_category',
						'field' => 'id',
						'terms' => $terms,
						'operator' => 'IN'
					)
				);
			}
			?>
			<?php foreach (get_posts($args) as $relatedItem): ?>
			<div class="dpsc_grid_product">
				<div class="dpsc_grid_product_image">
					<a href="<?php echo get_permalink($relatedItem->ID)?>"
					   title="<?php echo $relatedItem->post_title; ?>" style="display: block;">
						<?php get_image_from_catalog_item($relatedItem->ID, 120)?>
					</a>
				</div>
				<div class="dpsc_grid_product_detail">
					<p class="title">
						<a href="<?php echo get_permalink($relatedItem->ID)?>">
							<?php echo $relatedItem->post_title; ?>
						</a>
					</p>
					<p class="price"><?php echo get_post_meta($relatedItem->ID, 'price', TRUE); ?> <?php echo (get_post_meta($relatedItem->ID, 'currency', TRUE) == 'RUR' ? 'руб.' : get_post_meta($relatedItem->ID, 'currency', TRUE)); ?></p>
				</div>
			</div>
			<?php endforeach?>
		</div>
	</div>
	<?php get_sidebar();?>
</div>
<!-- The main column ends  -->
<?php get_footer()?>
