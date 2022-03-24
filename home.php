<?php
//Page d'actualité

//fonction Wp permet d'afficher un en-tête
get_header();


// Afichage de la page actus

// Les paramètres de la requête WP_QUery
$args = array(
  // Sélection de pages (au lieu de posts)
  /*  'post_type' => 'page', */
  // Sélection d'une page par son slug
  'pagename' => 'actus',
);

// Exécution de la requête WP_Query
$query = new WP_Query($args);

// Affichage du résultat de la requête WP_Query sans la boucle
if ($query->have_posts()) :
  $query->the_post();
  $firstID = get_the_ID();
  $firstPostType = get_post_type();
?>
  <?php wp_link_pages(); ?>
  <article <?php post_class() ?>>
    <div class="container">
      <h1><?php the_title() ?></h1>
      <div><?php the_time(get_option('date_format')); ?></div>
      <?php if (has_post_thumbnail()) :
        the_post_thumbnail('medium');
      endif;
      ?><?php the_content(); ?>
    </div>
  </article>
  <h2>Affichage des articles plus ancien</h2>
  <?php
endif;

// Restauration des paramètres originaux de la requête de l'utilisateur
/* wp_reset_postdata();
 */
// Affichage de la liste des articles avec la boucle
if (have_posts()) :
  while (have_posts()) :
    the_post();
    if (!(get_the_ID() === $firstID && $firstPostType === get_post_type())) :
  ?>
      <!-- Affichage des articles -->
      <article <?php post_class() ?>>
        <div class="container">
          <h2><a href="<?php get_permalink(); ?>">
              <?php the_title(); ?></a></h2>
          <?php the_time(get_option('date_format')); ?>
        </div>
        <div class="blog-content">
          <?php the_content(); ?></div>
        </div>
      </article>
<?php
    endif;
  endwhile;
endif;

//fonction Wp permet d'afficher le footer
get_footer();
