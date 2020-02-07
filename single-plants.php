<?php get_header();?>

<section class="page-wrap">
	<div class="container">
		<div class="d-flex justify-content-center">
            <h1><?php the_title();?></h1>
        </div>
        <?php if (has_post_thumbnail()):?>
            
            <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 mt-4 img-thumbnail">
            
            <?php endif;?>
        </div>
         <div class="row">
            <div class="col-lg-6 col-md-4 ml-4 mr-4">
                
                <?php get_template_part('includes/section', 'blogcontent');?>
                
                <?php wp_link_pages();?>
                </div>
                
                    <div class="col-lg-6 col-md-4">
                        <ul>
                            <li>Common Name: <?php echo get_post_meta($post->ID, 'Common Name:', true);?></li>

                            <?php if (get_post_meta($post->ID, 'Latin Name:', true)):?>

                            <li>Latin Name: <?php echo get_post_meta($post->ID, 'Latin Name:', true);?></li>
                            
                            <?php endif;?>

                            <li>Family: <?php echo get_post_meta($post->ID, 'Family:', true);?></li>
                            <li>Zones: <?php echo get_post_meta($post->ID, 'Zones:', true);?></li>
                        </ul>
                    </div>

	</div>
</section>

<?php get_footer(); ?>