<?php
get_header(); ?>

<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/blur.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Back Issues</h1>
      <div class="page-banner__intro">
        <p>Health, Community, School and Business</p>
      </div>
    </div>  
  </div>

<div class="container container--narrow page-section">
<!-- <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">Our History</span></p>
</div> -->

  <?php
  while(have_posts()) {
    the_post(); ?>
<div class="post-item">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div>
    <p>Posted By <?php the_author_posts_link(); ?> on <?php the_time('F Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
  </div>
  <div class="posted-content">
      <?php the_excerpt(); ?>
      <p><a class="btn btn--blue" href="<?php echo the_permalink(); ?>">Read More</a></p>
  </div>
</div>


 <?php }
 echo paginate_links();
 ?>
</div>




<?php get_footer();
?>