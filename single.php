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
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home" aria-hidden="true"></i> Back Issues</a> <span class="metabox__main">Story By <?php the_author_posts_link(); ?> posted in <?php echo get_the_category_list(', '); ?></span></p>
</div>
    
      <div class="generic-content">
      <?php the_content(); ?>
      </div>  
    </div>

    <section id="itb-news">
    <div class="container container--narrow page-section">
    <hr>
      <legend>Related Stories</legend>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <ul class="cards">
          <?php 
          $relatedPosts = new WP_Query(array(
            'posts_per_page' => 4,
            'orderby' => 'rand',
            'order' => 'ASC'
          ));
                while($relatedPosts->have_posts()) {
                  $relatedPosts->the_post(); ?>
                <li class="cards__item">
              <div class="card">
                <div class="card-image card-image-broward"></div>
                <div class="card__content">
                  <div class="card__title"><?php the_title(); ?></div>
                  <p class="cardtext"><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                 <p><a href="<?php echo the_permalink(); ?>"><span class="readmore">Read More</span></a></p> 
                </div>
              </div>
            </li>

                <?php  } wp_reset_postdata();
                ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

<?php }


 get_footer();
?>