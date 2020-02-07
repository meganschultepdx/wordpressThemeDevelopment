<!-- Wordpress function that knows to grab the header -->
<?php get_header();?>

<section class="pageWrap">
	<div class="container">
		<div class="d-flex justify-content-center">
  
    		<?php if (has_post_thumbnail()):?>
    
      			<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 mt-4">
    
    		<?php endif;?>
  		</div>
  	<div class="d-flex justify-content-center">
		<h1><?php the_title();?></h1>
	</div>
    
	<?php get_template_part('includes/section', 'content');?>

	</div>
</section>

<?php get_footer(); ?>

