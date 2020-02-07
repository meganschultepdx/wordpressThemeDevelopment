<?php get_header();?>

<section class="page-wrap">
	<div class="container">
		<div class="d-flex justify-content-center">
            <h1><?php the_title();?></h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php if (has_post_thumbnail()):?>
                    
                    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 mt-4 img-thumbnail">
                    
                    <?php endif;?>
                
                <?php get_template_part('includes/section', 'blogcontent');?>
                
                <?php wp_link_pages();?>
            </div>
                
            <div class="col-lg-6">
                <ul>
                    <li>
                        Common Name: <?php the_field('common_name:');?>
                    </li>
                    <li>
                        Latin Name: <?php the_field('latin_name:');?>
                    </li>
                    <li>
                        Family: <?php the_field('plant_family:');?>
                    </li>
                    <li>
                        Zones: <?php the_field('zones:');?>
                    </li>
                </ul>
            </div>
        </div>
	</div>
</section>

<?php get_footer(); ?>