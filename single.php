<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h1><?php the_title(); ?></h1>
            	
                <div class="postauthor">
            
            		<p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('l, F j, Y'); ?> &middot; <a href="<?php the_permalink(); ?>#comments"><?php comments_number('Leave a Comment', '1 Comment', '% Comments'); ?></a>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?></p>
                    
                </div>
			
			<?php the_content(__('Read more'));?><div style="clear:both;"></div>
					
			<!--
			<?php trackback_rdf(); ?>
			-->
			
			<div class="singlepostmeta">
				<p>Filed under <?php the_category(', ') ?> &middot; Tagged with <?php the_tags('') ?></p>
			</div>
			
		</div>
			
        <div class="postcomments">
            
			<?php comments_template('',true); ?>
        
        </div>

		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p><?php endif; ?>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>