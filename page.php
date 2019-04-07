<?php 
get_header();

while(have_posts()) {
    the_post();?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/blur.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
    </div>  
  </div>
  <br>
  <div class="container container--narrow page-section">
<?php the_content(); ?>
      </div>

<?php }

get_footer();
?>