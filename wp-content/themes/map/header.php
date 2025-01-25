<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=5, minimum-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <?php wp_head(); ?>
<body <?php body_class(); ?>>

<header class="map-header">
  <div class="header-wrapper">
    <!--     logo-->
    <a href="<?= site_url() ?>" class="main-logo">
      <picture>
        <img src="<?= get_template_directory_uri() . '/images/main-logo.png' ?>" alt="main logo">
      </picture>
    </a>
    <!-- burger menu and cross-->
    <button aria-label="Open Menu Links" class="burger-menu hide-only-lg">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <!--     links  -->
    <nav class="navbar">
      <div class="navbar-wrapper">
        <ul class="primary-menu">
          <li class="menu-item">
            <a href="#" class="cta-button">Map View</a>
          </li>
          <li class="menu-item">
            <a href="#" class="cta-button">Grid View</a>
          </li>
          <li class="menu-item menu-item-has-children">
            <div  class="cta-button">Sort</div>
            <ul class="sub-menu">
              <li class="menu-item-in-sub-menu">
                <div class="header-sublink">
                  dodo
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>