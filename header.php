<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri( '/assets/logo.png' ); ?>" alt="City News"></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo site_url('/featured'); ?>">Cover Stories</a></li>
          <li><a href="<?php echo site_url('category/business'); ?>">Business</a></li>
          <li> <a href="<?php echo site_url('category/school'); ?>">School</a></li>
          <li><a href="<?php echo site_url('category/community'); ?>">Community</a></li>
          <li><a href="<?php echo site_url('category/health-wellness'); ?>">Health</a></li>

          <li class="dropdown">
            <a href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-plus" aria-hidden="true"></i></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
                <li><a href="<?php echo site_url('/advertise-with-us'); ?>">Adverise with Us</a></li>
                <li><a href="<?php echo site_url('/write-for-us'); ?>">Write for Us</a></li>
                <li><a href="<?php echo site_url('/blog'); ?>">Back Issues</a></li>
                <li><a href="<?php echo site_url('/contact-us'); ?>">Contact Us</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>




























