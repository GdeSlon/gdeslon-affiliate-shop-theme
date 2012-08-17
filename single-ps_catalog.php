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
			<!--			--><?php //the_content()?>
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
					<!--					<p class="detail">-->
					<?php //echo html_entity_decode(nl2br(get_the_content())); ?><!--</p>-->
					<p class="price"><?php echo get_post_meta($relatedItem->ID, 'price', TRUE); ?> <?php echo (get_post_meta($relatedItem->ID, 'currency', TRUE) == 'RUR' ? 'руб.' : get_post_meta($relatedItem->ID, 'currency', TRUE)); ?></p>
				</div>
			</div>
			<?php endforeach?>
		</div>
	</div>
	<?php include(TEMPLATEPATH . "/sidebar.php"); ?>
</div>
<!-- The main column ends  -->
<?php get_footer(); ?>


<table class="product-table">
	<tr>
		<td style="vertical-align: top;" class="product-image">
			<?php if (!is_single()): ?>
			<a href="<?php echo get_permalink($relatedItem->ID) ?>" title="<?php echo $relatedItem->post_title; ?>"
			   style="display: block;">
			<?php endif?>
			<?php get_image_from_catalog_item($relatedItem)?>
			<?php if (!is_single()): ?>
			</a>
			<?php endif?>
			<p class="products-price"><?php echo get_post_meta($post->ID, 'price', TRUE); ?> <?php echo (get_post_meta($post->ID, 'currency', TRUE) == 'RUR' ? 'руб.' : get_post_meta($post->ID, 'currency', TRUE)); ?></p>
		</td>
		<td>&nbsp;</td>
		<td style="vertical-align: top;">
			<div class="products-description">
				<p><?php echo html_entity_decode(nl2br($content)); ?></p>
				<table>

				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td>

		</td>
		<td>
		</td>
		<td>

			<?php if (!is_single()): ?>
			<a href="<?php echo get_permalink($relatedItem->ID) ?>" title="<?php echo $relatedItem->post_title; ?>"
			   style="display: block;">
				<img src="<?php echo GS_PLUGIN_URL?>img/details.png" alt="Подробнее"/>
			</a>
			<?php endif?>
		</td>
	</tr>
</table>
<?php if (is_single()): ?>


<?php
	$products = $wpdb->get_results("SELECT * FROM ps_products WHERE status = 1 AND bestseller = 1 ORDER BY RAND() LIMIT " . GS_Config::init()->get('ps_row_limit'));
	?>
<?php if (!empty($products)) { ?>
	<h3>Бестселлеры</h3>
	<table class="products-list">
		<tr>
			<?php foreach ($products as $item) {
			$relatedItem = getPostByItem($item) ?>
			<td style="text-align: left;">
				<div class="products-image"><a href="<?php echo get_permalink($relatedItem->ID)?>"
											   title="<?php echo $relatedItem->post_title; ?>"><?php echo get_image_from_catalog_item($relatedItem, 100)?></a>
				</div>
				<p class="products-name"><?php echo $relatedItem->post_title; ?></p>

				<p class="products-price"><?php echo get_post_meta($relatedItem->ID, 'price', TRUE); ?> <?php echo (get_post_meta($relatedItem->ID, 'currency', TRUE) == 'RUR' ? 'руб.' : get_post_meta($relatedItem->ID, 'currency', TRUE)); ?></p>

				<p class="products-details"><a href="<?php echo get_permalink($relatedItem->ID) ?>"
											   title="<?php echo $relatedItem->post_title; ?>"><img
						src="<?php echo GS_PLUGIN_URL?>img/details.png" alt="Подробнее"/></a></p>
			</td>
			<?php } ?>
		</tr>
	</table>
	<?php } ?>
<?php endif; ?>
<?php endif ?>
