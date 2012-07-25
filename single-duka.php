<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h1><?php the_title(); ?></h1>       	
                
			
			<?php the_content(__('Read more'));?><div style="clear:both;"></div>				
			
			
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