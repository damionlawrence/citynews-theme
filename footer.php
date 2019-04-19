<section id="subscribe-now" class="home-newsletter">
    <div class="container">
      <div class="row border-class">
        <div class="col-xs-12">
          <h1>Get Every Issue. Every Month.</h1>
          <p>School News • Community News • Legally Speaking • Health & Wellness • Dining Out • It's Their Business • Real Estate News <br>• Chamber News • Teen Time • Religion</p>
          <div class="input-group single">
            <input type="email" class="form-control" placeholder="Enter your email">
            <span class="input-group-btn">
<button class="btn btn-theme" type="submit">Subscribe</button>
</span>
          </div>
        </div>
      </div>
    </div>
  </section>
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/assets/logo.png'); ?>" alt="logo"></a>
        <div class="row">
            <div class="col-md-12 divleft">
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-google-plus" aria-hidden="true"></i>
              <i class="fa fa-instagram" aria-hidden="true"></i>
              <i class="fa fa-rss" aria-hidden="true"></i>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-4">
        <?php wp_nav_menu(array(
          'theme_location' => 'footerMenuLocationOne'
        )); 
        ?>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4">
        <?php wp_nav_menu(array(
          'theme_location' => 'footerMenuLocationTwo'
        )); 
        ?>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4">
          <ul>
            <li>Privacy Policy</li>
            <li>TERMS OF SERVICE</li>
          </ul>
        </div>

      </div>
      <div class="row">
        <div class="col-md-9">
          <p>©2017 City News Publishing. All Rights Reserved.</p>
        </div>
        <div class="col-md-3">
          <a href="http://www.damionlawrence.com" target="_blank">
            <p>Theme By Damion Lawrence</p>
          </a>
        </div>
      </div>
    </div>
  </footer>











<?php wp_footer(); ?>
</body>
</html>