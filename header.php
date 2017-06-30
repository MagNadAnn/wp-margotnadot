<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
  <?php
    if (is_home()) {
      echo 'Margot Nadot - Multimédia';
    } else if (is_tag()) {
      single_tag_title();
    } else if (is_category()) {
      single_cat_title();
    } else {
      the_title();
    }
  ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
<meta name="Viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
  <div class="l-site-wrap" <?php body_class(); ?>>
    <nav class="l-sidebar">
      <header class="site-logo">
        <a aria-label="Retour à l'accueil" class="btn_back-home" href="<?php echo home_url(); ?>">
        <svg class="brush-background">
          <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#320-brush-bottom"></use>
        </svg>
        <svg class="logo-MN">
          <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#logo-MN"></use>
        </svg>
        </a>
      </header>