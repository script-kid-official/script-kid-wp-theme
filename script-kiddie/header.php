<!DOCTYPE html <?php language_attributes(); ?>>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />

    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

<header>


  <!-- Navbar -->
  <?php
  echo get_template_part("components/navbar/navbar")
  ?>
  <!-- !Navbar -->

  
  <!-- Banner -->
  <?php
  echo get_template_part("components/banner/banner")
  ?>
  <!-- !Banner -->

</header>
<main>
