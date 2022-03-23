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
  <?php wp_footer(); ?>
</footer>
<script src="/assets/js/darkmode.js"></script>
<script>
  var options = {
    light: "light.css",
    dark: "dark.css",
    startAt: "23:00",
    endAt: "06:00",
    checkSystemScheme: true,
    saveOnToggle: true
  };
  var DarkMode = new DarkMode(options);
</script>
</body>

</html>