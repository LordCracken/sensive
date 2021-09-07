<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sensive Blog - Home</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">

  <?php wp_head() ?>
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <span class="navbar-brand logo_h"><?php the_custom_logo() ?></span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <?php
            wp_nav_menu([
              'menu'            => 'header-menu',
              'container'       => 'ul',
              'container_class' => '',
              'menu_class'      => 'nav navbar-nav menu_nav justify-content-center',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => new bootstrap_4_walker_nav_menu(),
            ]);
            ?>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="<?php the_field('facebook') ?>"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="<?php the_field('twitter') ?>"><i class="fab fa-twitter"></i></a></li>
              <li><a href="<?php the_field('dribbble') ?>"><i class="fab fa-dribbble"></i></a></li>
              <li><a href="<?php the_field('behance') ?>"><i class="fab fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
  <main class="site-main">
    <!--================Hero Banner start =================-->
    <section class="mb-30px">
      <div class="container">
        <div class="hero-banner">
          <div class="hero-banner__content">
            <?php echo $args['content'] ?>
          </div>
        </div>
      </div>
    </section>
    <!--================Hero Banner end =================-->