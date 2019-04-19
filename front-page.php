<?php get_header(); ?>

<section id="current-issue">
    <div class="container">
      <div class="row">
        <?php
        $sliderPost = new WP_query(array(
          'posts_per_page' => 1,
          'post_type' => 'featured',
          'orderby' => 'rand'
        ));
        while($sliderPost->have_posts()) {
          $sliderPost->the_post(); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="<?php $slideImage = get_field('cover_slide'); echo $slideImage['url'] ?>" alt="Current Issue" class="magazine">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 mag-left">
          <h1><?php echo get_field('slider_headline'); ?></h1>
          <p><?php echo get_field('page_banner_description'); ?></p>
          <a href="<?php echo the_permalink(); ?>"><span class="readonline">Read Now</span></a>
          <a href="#subscribe-now"><span class="readnow">Subscribe</span></a>
        </div>
      
     <?php } wp_reset_postdata();
     ?>
      </div>
    </div>

  </section>
  <section id="bars">
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-2 bars-1 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-2 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-3 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-4 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-5 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-6 divleft"></div>
    </div>
  </section>
  <section id="top-story">
    <div class="container">
      <div class="row">      
          <?php 
        $coverStory = new WP_Query(array(
          'posts_per_page' => 1,
          'post_type' => 'featured',
          'orderby' => 'rand'
        ));
          while($coverStory->have_posts()){
            $coverStory->the_post(); ?>
            <div class="col-lg-6 col-xs-12">
              <legend>Story of the month</legend>
              <h1><?php the_title(); ?></h1>
              <h2>By Nicole Jenkins</h2>
              <p><?php echo wp_trim_words(get_the_content(), 150); ?></p>
              <br>
          <a href="<?php echo the_permalink(); ?>"><span class="readmore">Read More</span></a>
          </div>
          <div class="col-lg-6 col-xs-12">
          <img src="<?php $contentImage = get_field('content_image'); echo $contentImage['url'] ?>" alt="Photo by Damion Lawrence"/>
          </div>
         <?php } wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <section id="bars" class="container">
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-2 bars-1 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-2 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-3 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-4 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-5 divleft"></div>
      <div class="col-md-2 col-sm-2 col-xs-2 bars-6 divleft"></div>
    </div>
  </section>

  <section id="features">
    <div class="container">
    <legend><a href="<?php echo site_url('/category/school'); ?>">School News</a></legend>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <ul class="cards">
          <?php 
          $schoolPosts = new WP_Query(array(
            'posts_per_page' => 4,
            'category_name' => 'school',
            'orderby' => 'rand',
            'order' => 'ASC'

          ));
                while($schoolPosts->have_posts()) {
                  $schoolPosts->the_post(); ?>
                <li class="cards__item">
              <div class="card">
              <div class="card-image" style="background-image: url(<?php $featureImage = get_field('thumbnail_image'); echo $featureImage['url'] ?>);"></div>
                <div class="card__content">
                  <div class="card__title"><?php the_title(); ?></div>
                  <p class="cardtext"><?php echo wp_trim_words(get_the_content(), 50); ?></p>
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

  <section id="cn-news">
    <div class="container">
      <legend><a href="<?php echo site_url('/category/community'); ?>">Community News</a></legend>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <ul class="cards">
          <?php 
          $commnunityPosts = new WP_Query(array(
            'posts_per_page' => 4,
            'category_name' => 'community',
            'orderby' => 'rand',
            'order' => 'ASC'

          ));
                while($commnunityPosts->have_posts()) {
                  $commnunityPosts->the_post(); ?>
                <li class="cards__item">
              <div class="card">
              <div class="card-image" style="background-image: url(<?php $featureImage = get_field('thumbnail_image'); echo $featureImage['url'] ?>);"></div>
                <div class="card__content">
                  <div class="card__title"><?php the_title(); ?></div>
                  <p class="cardtext"><?php echo wp_trim_words(get_the_content(), 50); ?></p>
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
  <section id="itb-news">
    <div class="container">
      <legend><a href="<?php echo site_url('/category/business'); ?>">It's Thier Business</a></legend>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <ul class="cards">
          <?php 
          $businessPosts = new WP_Query(array(
            'posts_per_page' => 4,
            'category_name' => 'business',
            'orderby' => 'rand',
            'order' => 'ASC'
          ));

                while($businessPosts->have_posts()) {
                  $businessPosts->the_post(); ?>
                <li class="cards__item">
              <div class="card">
              <div class="card-image" style="background-image: url(<?php $featureImage = get_field('thumbnail_image'); echo $featureImage['url'] ?>);"></div>
                <div class="card__content">
                  <div class="card__title"><?php the_title(); ?></div>
                  <p class="cardtext"><?php echo wp_trim_words(get_the_content(), 50); ?></p>
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

  <section id="hw-news">
    <div class="container">
      <legend><a href="<?php echo site_url('/category/health-wellness'); ?>">Health & Wellness</a></legend>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <ul class="cards">
          <?php 
          $healthPosts = new WP_Query(array(
            'posts_per_page' => 4,
            'category_name' => 'health-wellness',
            'orderby' => 'rand',
            'order' => 'ASC'
          ));

                while($healthPosts->have_posts()) {
                  $healthPosts->the_post(); ?>
                <li class="cards__item">
              <div class="card">
              <div class="card-image" style="background-image: url(<?php $featureImage = get_field('thumbnail_image'); echo $featureImage['url'] ?>);"></div>
                <div class="card__content">
                  <div class="card__title"><?php the_title(); ?></div>
                  <p class="cardtext"><?php echo wp_trim_words(get_the_content(), 50); ?></p>
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














<?php get_footer();

?>