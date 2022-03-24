<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <?php
  if (is_front_page()) :
  ?>
    <title>Accueil | <?php bloginfo('name'); ?></title>
  <?php
  else :
  ?>
    <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
  <?php
  endif;
  ?>
  <link rel="icon" type="image/png" href="//assets/images/favicon.png" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!-- wp_head permet d'inserer toutes les informations à mettre en en-tête -->
  <?php wp_head(); ?>
  <div id="DarkModeAll">
    <!--     <link rel="stylesheet" href="http://localhost:8888/wordpress/wp-content/themes/rnumerique-theme/assets/css/dark.css">
 -->
  </div>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="menu-position">
      <?php
      //Insertion du menu
      wp_nav_menu(array(
        'theme_location' => 'header',
        'container_class' => 'custom-menu-class'
      ));
      ?>
    </div>
    <!-- Insertion du logo -->
    <Section id="logoPicture">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>//assets/images/logo.png" alt="Logo Principal du site">
      </a>
    </Section>

  </header>