<?php 
get_header();

while(have_posts()) {
    the_post(); ?>
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/blur.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
    </div>  
  </div>
    <div class="container container--narrow page-section">
    <?php $backCategory = get_category_link(get_cat_ID( single_cat_title('',false) ) ); ?>

    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo $backCategory; ?>"><i class="fa fa-home" aria-hidden="true"></i> Back Issues</a> <span class="metabox__main">Posted By <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></span></p>
</div>
    
      <div class="generic-content">
      <?php the_content(); ?>
      </div>
        
    </div>

<?php }


 get_footer();
?>