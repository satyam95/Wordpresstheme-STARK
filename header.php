<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <title><?php bloginfo('name') ?> | <?php bloginfo('description'); ?></title>
  </head>
  <body class="home">
    <div class="wrapper"> 
      <header>
        <div class="container p-0 px-md-4">
          <div class="d-flex align-items-center no-gutters flex-wrap">
            <div
              class="col-12 col-md-4 col-lg-6 order-1 order-md-0 d-flex align-items-center flex-wrap justify-content-between px-2 px-md-0"
            >
              <div class="logo">
                <?php if(has_custom_logo()): ?>
                   <?php the_custom_logo(); ?>
                <?php else:?>
                <a href="index.html">
                  <?php bloginfo('name') ?>
                </a>
                <?php endif; ?>
              </div>
              <button
                class="d-block d-md-none hamburger-icon"
                aria-label="Mobile Header Menu"
                role="menubar"
              >
                <div><span></span><span></span></div>
                <p class="nav-label mb-0">MENU</p>
              </button>
            </div>
            <div
              class="col-12 col-md-8 col-lg-6 d-flex flex-md-column flex-wrap align-items-end"
            >
              <div class="right-top-list">
                <ul class="list-unstyled d-flex flex-wrap">
                  <li>
                    <?php if(get_theme_mod('heading_1', 'default') != '') : ?>
                     <a href="#"><span><img src="<?php echo get_theme_file_uri('images/icon1.png')?>" /></span><?php echo get_theme_mod('heading_1', 'Enter Text'); ?></a>
                    <?php endif; ?>
                  </li>
                  <li>
                    <?php if(get_theme_mod('heading_2', 'default') != '') : ?>
                     <a href="#"><span><img src="<?php echo get_theme_file_uri('images/icon2.png')?>" /></span><?php echo get_theme_mod('heading_2', 'Enter Text'); ?></a>
                    <?php endif; ?>
                  </li>
                  <li>
                    <?php if(get_theme_mod('heading_3', 'default') != '') : ?>
                      <a href="tel:<?php echo get_theme_mod('heading_3', 'Enter Text'); ?>"><span><img src="<?php echo get_theme_file_uri('images/icon3.png')?>" /></span><?php echo get_theme_mod('heading_3', 'Enter Text'); ?></a>
                    <?php endif; ?>
                  </li>
                </ul>
              </div>
              <div class="right-btn-group d-none d-md-block">
                <a href="product.html" class="btn btn-primary">Order Now</a
                ><a href="contact.html" class="btn btn-secondary">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <nav class="nav-menu">
        <div class="container">
          <?php 
          wp_nav_menu(array(
            'theme_location'  => 'primary',
            'menu_class'      => 'menu'
          )); 
          ?>
        </div>
        <div class="btn-mob">
          <a href="#" class="d-block d-md-none btn btn-primary">Order Now</a>
          <a href="contact.html" class="d-block d-md-none btn btn-secondary">Contact Us</a>
        </div>
      </nav>