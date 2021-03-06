<?php

/**
 * The template for displaying the 404 template in the LerNumerique Theme.
 *
 * @package WordPress
 * @subpackage WP LerNumerique Theme
 * @since LerNumerique 1.0
 */

get_header(); ?>

<div id="container">
  <div>
    <h1>Erreur 404</h1>
    <div class="container">
      <img class="sorry" src="http://localhost:8888/wordpress/wp-content/uploads/2022/03/4408185.jpg" alt="404 le personnage  est désolé">
      <div>Oups, ceci est une erreur dite 404 ! En termes simples, la page ne peut être trouvée... <br> Je vous invite dès à présent à utiliser les outils de recherche et / ou de navigation pour parvenir au contenu souhaité.</div>
      <br>
      <!-- Barre de recherche-->
      <div id="search">
        <?php get_search_form(); ?>
        <br>
      </div>

      <h2>Top 10 des articles sur LerNumerique</h2>
      <ul>
        <?php query_posts("orderby=comment_count&showposts=10&ignore_sticky_posts=1");
        while (have_posts()) : the_post(); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'wp_lernumerique_theme'), get_the_title()) ?>">
              <?php the_title() ?>
            </a></li>
        <?php endwhile;
        wp_reset_query(); ?>
      </ul>
    </div>
  </div>
</div>

</div>

</body>
<?php get_footer(); ?>

</html>