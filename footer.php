<!-- wp_footer est une fonction wp qui permet d'inserer le footer -->
<footer class="blog-footer">

  <!-- Darkmode  -->
  <div class="flying">
    <button id="mode-remover" class="btn hidden" title="Clear saved mode">
      &times;
    </button>
    <button id="mode-toggler" class="btn">
      Turn on Javascript 🌓
    </button>
  </div>
  <!-- End of Darkmode -->

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
</body>

</html>