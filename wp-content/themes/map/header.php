<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=5, minimum-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <?php wp_head(); ?>
  <?php
  $header_banner = get_field('header_banner', 'options');
  $flag = get_field('flag', 'options');
  $header_logo = get_field('header_logo', 'options');
  $contact_number = get_field('contact_number', 'options');
  $sustainability_link = get_field('sustainability_link', 'options');
  $contact_us = get_field('contact_us', 'options');
  
  ?>
<body <?php body_class(); ?>>
<?php if ($header_banner): ?>
  <div class="header-banner">
    <?= $header_banner ?>
    <?php if (!empty($flag) && is_array($flag)) { ?>
      <picture class="flag-wrapper cover-image">
        <img src="<?= $flag['url'] ?>" alt="<?= $flag['alt'] ?>">
      </picture>
    <?php } ?>
  </div>
<?php endif; ?>
<header>
  <div class="header-wrapper">
    
    <a href="#" class="cta-link map-h1">
      View Details
      <svg  viewBox="0 0 41 40" fill="none" aria-hidden="true">
        <path d="M24.7168 9.8833L34.8335 20L24.7168 30.1166" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M6.50049 20H34.5505" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    
    </a>
    <div class="sssss" style="color: black; text-align: center; "> Performance Food Group Cold Storage Distribution
      Center
    </div>
    <br>
    
    <div style="color: black; text-align: center; ">94,000 SF</div>
    <br>
    
    <div style="color: black; text-align: center; ">View Details</div>
    
    
    new header
  </div>
</header>