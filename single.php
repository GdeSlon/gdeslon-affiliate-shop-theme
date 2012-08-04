<?php get_header(); ?>
<div id="content">
	<div id="contentleft">
	<div class="postarea">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<div class="postauthor">
			<p>Автор: <?php the_author_posts_link(); ?> в <?php the_time('l, F j, Y'); ?> &middot; <a
					href="<?php the_permalink(); ?>#comments"><?php comments_number('Leave a Comment', '1 Comment', '% Comments'); ?></a>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?>
			</p>
		</div>
		<?php the_content('Подробнее...'); ?>
		<div style="clear:both;"></div>
		<!--
			<?php trackback_rdf(); ?>
			-->
		<div class="singlepostmeta">
			<p>В категориях: <?php the_category(', ') ?> &middot; Отмечено тэгами: <?php the_tags('') ?></p>
		</div>
		<div class="singlepostmeta">
			<?php
			wp_link_pages(array(
				'before'           => '<p>Страницы записи:',
				'nextpagelink'     => '&laquo; Предыдущая страница',
				'previouspagelink' => 'Следующая страница &raquo;'
			));
			?>
		</div>
		</div>
		<div class="postcomments">
			<?php comments_template('', true); ?>
		</div>
		<?php endwhile; else: ?>
		<p>Содержимое не найдено</p><?php endif; ?>
	</div>
	<?php include(TEMPLATEPATH . "/sidebar.php");?>
</div>
<!-- The main column ends  -->
<?php get_footer(); ?>