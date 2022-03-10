<?php
// Index.php est la page par défaut s'il ne trouve pas autre chose
get_header();
// Affichage de la liste des articles avec la boucle
if (have_posts()) :
  while (have_posts()) :
    the_post();
?>
    <article <?php post_class() ?>>
      <h1><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
    </article>
<?php
  endwhile;
endif;
get_footer();
