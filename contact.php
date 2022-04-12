<?php

/**
 * Template Name: Template Contact
 */
get_header();

?>
<h1><?php the_title() ?></h1>

<div class="contact-content">
  <div class="contact-flex">
    <section class="map">
      <h2>Où me trouver</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84484.16954510748!2d7.692039647318505!3d48.56905316137844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c8495e18b2c1%3A0x971a483118e7241f!2sStrasbourg!5e0!3m2!1sfr!2sfr!4v1647960031977!5m2!1sfr!2sfr" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <section class="form">
      <?php the_content(); ?>
    </section>
  </div>
  <?php
  get_footer();
