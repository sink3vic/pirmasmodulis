<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
      <?php wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class' => 'blog-nav',
        'menu_id' => 'primary-menu' ) ); ?>
        <!-- <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav> -->
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                <?php echo get_bloginfo( 'name' ); ?>
            </a>
        </h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>