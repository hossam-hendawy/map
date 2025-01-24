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
new header 
  </div>
</header>