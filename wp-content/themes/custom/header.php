<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title>WP Custom</title>
</head>

<body>
  <div id="sliderMenu">
    <ul>
      <li>
        <a href="<?php echo site_url(''); ?>">Home</a>
      </li>
      <li>
        <a href="<?php echo site_url('/index.php/blog'); ?>">Blog</a>
      </li>
      <li>
        <a href="<?php echo site_url('/projects'); ?>">Projects</a>
      </li>
      <li>
        <a href="<?php echo site_url('/about'); ?>">About</a>
      </li>
      <li>
        <input type="text" placeholder="Search Here">
      </li>
    </ul>
  </div>

  <nav>
    <div id="logo">
      <a href="<?php echo site_url(''); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wp-logo.png" alt="wp logo">
      </a>
    </div>
    <div id="menu-icon">
      <i class="fas fa-bars"></i>
    </div>
    <ul>
      <li>
        <a class="active" href="<?php echo site_url(''); ?>">Home</a>
      </li>
      <li>
        <a href="<?php echo site_url('/blog'); ?>">Blog</a>
      </li>
      <li>
        <a href="<?php echo site_url('/projects'); ?>">Projects</a>
      </li>
      <li>
        <a href="<?php echo site_url('/about'); ?>">About</a>
      </li>
      <li>
        <div id="search-icon">
          <i class="fas fa-search"></i>
        </div>
      </li>
    </ul>
  </nav>

  <div id="searchbox">
    <input type="text" placeholder="Search Here">
  </div>
