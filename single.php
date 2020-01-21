<?php get_header();?>

<section class="page-wrap">
<div class="container">

<div class="d-flex justify-content-center">

  <?php if (has_post_thumbnail()):?>
  
    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 mt-4 img-thumbnail">
  
  <?php endif;?>
</div>


  <h1><?php the_title();?></h1>

  <?php get_template_part('includes/section', 'blogcontent');?>

  <?php wp_link_pages();?>

</div>
</section>

<?php get_footer(); ?>