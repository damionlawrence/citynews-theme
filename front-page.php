<?php get_header(); ?>

<section id="current-issue">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="<?php echo get_theme_file_uri('/assets/prodent_mag01.png'); ?>" alt="Current Issue" class="magazine">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 mag-left">
          <h1>Prodent Group</h1>
          <p>12 pledges: as a leading oral health charity, we make our promises for the year ahead.</p>
          <a href="#"><span class="readonline">Read Now</span></a>
          <a href="#subscribe-now"><span class="readnow">Subscribe</span></a>
        </div>
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
  <section id="features">
    <div class="container">
      <legend>Featured</legend>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <ul class="cards">
            <li class="cards__item">
              <div class="card">
                <div class="card-image card-image-veteran"></div>
                <span class="feat-story">features</span>
                <div class="card__content">
                  <div class="card__title">Veterans Coalition</div>
                  <p class="cardtext">Those who risk their lives to fight for our country have an unspoken bond. During Veterans Day and all year round, the Veterans Coalition of Coral Springs provides support to local veterans and their families. They want to make sure
                    veterans feel a sense of belonging to their local community when they return home.</p>
                  <a href="veterans.html"><span class="readmore">Read More</span></a>
                </div>
              </div>
            </li>
            <li class="cards__item">
              <div class="card">
                <div class="card-image card-image-lopez"></div>
                <span class="cn-story">Community News</span>
                <div class="card__content">
                  <div class="card__title">Yvonne Lopez</div>
                  <p class="card__text">Since 2005, Yvonne Lopez has been at the forefront of promoting the City of Coconut Creek. As Community Relations Director, Yvonne Lopez is a champion for the community and is in charge of keeping residents and businesses informed about
                    projects, initiatives, and events happening in the City of Coconut Creek. </p>
                  <a href="yvonnelopez.html"><span class="readmore">Read More</span></a>
                </div>
              </div>
            </li>
            <li class="cards__item">
              <div class="card">
                <div class="card-image card-image-panthers"></div>
                <span class="sn-story">School News</span>
                <div class="card__content">
                  <div class="card__title">Florida Panthers Alumni</div>
                  <p class="card__text">The Florida Panthers partnered with Coral Springs Community Chest for the second annual Pucks for Bucks charity hockey game benefiting the Coral Springs Community Chest.Florida Panthers alumni Tomas Fleischmann, Tomas Vokoun, Peter Worrell,
                    Bill Lindsay, Shawn Thornton and more laced up their skates for the alumni squad.</p>
                  <a href="panthers.html"><span class="readmore">Read More</span></a>
                </div>
              </div>
            </li>
            <li class="cards__item">
              <div class="card">
                <div class="card-image card-image-wong"></div>
                <span class="hw-story">Health & Wellness</span>
                <div class="card__content">
                  <div class="card__title">Parasympathetic stimulation</div>
                  <p class="card__text">Mind and body are linked as part of an integral system that affect our general well being. The mind exert its influence on our body with a elaborate network of endocrine system consists of sympathetic and parasympathetic hormones. Sympathetic
                    is the fight and freight hormone we are family with. </p>
                  <a href="wong.html"><span class="readmore">Read More</span></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="top-story">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-8 col-xs-12 top-story-capsule">
          <?php 
        $coverStory = new WP_Query(array(
          'posts_per_page' => 1,
          'post_type' => 'featured',
          'orderby' => 'rand'
        ));
          while($coverStory->have_posts()){
            $coverStory->the_post(); ?>
              <legend>Story of the month</legend>
              <h1><?php the_title(); ?></h1>
              <h2>By Nicole Jenkins</h2>
              <p><?php echo wp_trim_words(get_the_content(), 150); ?></p>
              <br>
          <a href="<?php echo the_permalink(); ?>"><span class="readmore">Read More</span></a>
          </li>
         <?php } wp_reset_postdata();
        ?>
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
                <div class="card-image card-image-broward"></div>
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
                <div class="card-image card-image-broward"></div>
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
                <div class="card-image card-image-broward"></div>
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