<?php

/*
Template Name: Gallery Page
*/

?>
<?php get_header();?>

<section class="page-wrap">
	<div class="container">
  	    <section class="row">
			<div class="col-lg-3">
        			
				<?php if (is_active_sidebar('page-sidebar')):?>

                <?php dynamic_sidebar('page-sidebar');?>

                <?php endif;?>        
    
            </div>
  		    <div class="col-lg-9 ">
                
                <?php
                $args = array(
                    'numberposts' => -1, //Using -1 loads all posts
                    'orderby' => 'menu_order', //This ensures images are in the order set in the page media manager
                    'order' => 'ASC',
                    'post_mime_type' => 'image', // make sure it doesn't pull other resources, like videos
                    'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
                    'post-status' => null,
                    'post-type' => 'attachement'
                );

                $images = get_children($args);
                
                if ($images) { ?>
                    <div id="slider">
                        <?php foreach ($images as $image) { ?>
                        <img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />
                        <?php    } ?>
                    </div>
                    <?php } ?>
                
                <h1><?php the_title();?></h1>
				
  			    <?php get_template_part('includes/section', 'content');?>
					
			</div>
  	    </section>
	</div>
</section>

<?php get_footer(); ?>