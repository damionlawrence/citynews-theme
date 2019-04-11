<?php 
get_header();

while(have_posts()) {
    the_post(); ?>
    <div class="featured-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_image'); echo $pageBannerImage['sizes']['pageBanner'] ?>);"></div>  
  </div>
    <div class="container page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('/featured'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Featured Home</a> <span class="metabox__main">Written By <?php the_author_posts_link(); ?></span></p>
</div>
      <div class="container">
        <div class="h1-article"><h1><?php the_title(); ?></h1></div>
        <img src="<?php $contentImage = get_field('content_image'); echo $contentImage['url'] ?>" alt="Photo by Damion Lawrence" class="textwrap">
      <?php the_content(); ?>
      </div>   
    </div>
<section id="itb-news">
  <div class="container">
    <legend><a href="<?php echo site_url('/category/community'); ?>">Community News</a></legend>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <ul class="cards">
          <?php 
          $featuredPosts = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'featured',
            'orderby' => 'rand',
            'order' => 'ASC'

          ));
                while($featuredPosts->have_posts()) {
                  $featuredPosts->the_post(); ?>
                <li class="cards__item">
              <div class="card">
                <div class="card-image" style="background-image: url(<?php $featureImage = get_field('thumbnail_image'); echo $featureImage['url'] ?>);"></div>
                <div class="card__content">
                  <div class="card__title"><?php the_title(); ?></div>
                  <p class="cardtext"><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                  <a href="<?php echo the_permalink() ?>"><span class="readmore">Read More</span></a>
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