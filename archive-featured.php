<?php
get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/blur.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Featured Stories</h1>
      <div class="page-banner__intro">
        <p>Cover stories and Featured articles</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
  <?php
  while(have_posts()) {
    the_post(); ?>
  <div class="post-item">
    <div class="row">
      <div class="col-lg-4"><?php the_post_thumbnail(); ?></div>
      <div class="col-lg-8">
      <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p>Written By <?php the_author_posts_link(); ?></p><br>
      <p><?php echo wp_trim_words(get_the_content(), 100); ?></p><br><p><a class="readmore" href="<?php echo the_permalink(); ?>">Read More</a></p></div>
      <br>
    </div>
  </div>


 <?php }
 echo paginate_links();
 ?>
</div>




<?php get_footer();
?>