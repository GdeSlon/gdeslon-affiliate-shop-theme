<?php get_header(); ?>
<div id="content">
	<div id="contentleft">
		<div class="dpsc_grid_display">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div <?php post_class('dpsc_grid_product'); ?>>
				<div class="dpsc_grid_product_image">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" style="display: block;">
						<?php get_image_from_catalog_item($post, 120)?>
					</a>
				</div>
				<div class="dpsc_grid_product_detail">
					<p class="title">
						<a href="<?php the_permalink() ?>">
							<?php the_title() ?>
						</a>
					</p>
<!--					<p class="detail">--><?php //echo html_entity_decode(nl2br(get_the_content())); ?><!--</p>-->
					<p class="price"><?php echo get_post_meta($post->ID, 'price', TRUE); ?> <?php echo (get_post_meta($post->ID, 'currency', TRUE) == 'RUR' ? 'руб.' : get_post_meta($post->ID, 'currency', TRUE)); ?></p>
				</div>
			</div>
			<?php endwhile; else: ?>
			<p>Товаров нет</p>
			<?php endif; ?>
			<div class="clear" style="height: 30px;"></div>
			<div class="dpsc_grid_pagination"><?php posts_nav_link(' &#8212; ', __('&laquo; Предыдущая страница'), __('Следующая страница &raquo;')); ?></div>
			<div class="clear"></div>
		</div>
	</div>
	<?php include(TEMPLATEPATH."/sidebar.php");?>
</div>
<!-- The main column ends  -->
<?php get_footer(); ?>