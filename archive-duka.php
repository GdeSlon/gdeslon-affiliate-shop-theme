<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
    
		<div class="postarea">
			 <?php
                        $cat_id = get_query_var('cat');
			$category = get_category($cat_id);?>
			
            <h1><?php echo $category->name ?></h1>

			<?php echo (do_shortcode('[dpsc_grid_display category="'.$cat_id.'" total="-1" column="3" per_page="12" type="duka" order="DESC"]'));  ?>
            
			        
        </div>
	
	</div>
			
	<?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>