<!-- wp_footer est une fonction wp qui permet d'inserer le footer -->
<footer class="blog-footer">
  <?php
  wp_nav_menu(array(
    'theme_location' => 'footer',
    'menu' => 'footer-menu',
    'container_class' => 'custom-menu-class-footer',
  ));
  ?>
  <div class="get-up">
      <a href="#">Retour en haut</a>
  </div>

  <?php
  echo "<p>© " . date("Y") . " Designed with ❤️ by Thomas - Pop School</p>";
  ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>