<?php
// à chaque fois qu'on va charger le thème, ce fichier functions.php va s'executer

/**
 * composer
 */

// chargement de l'autoloading de composer
$autoloadphp = get_template_directory() . '/vendor/autoload.php'; //s'il existe il load sinon il ne fait pas de message d'erreur
if (file_exists($autoloadphp));
//require get_template_directory() . '/vendor/autoload.php';

/**
 * sécurité
 */

// désactive l'édition de fichier dans l'admin
define('DISALLOW_FILE_EDIT', true);

/**
 * localisation
 */

// choix du fuseau horaire
date_default_timezone_set('Europe/Paris');
// choix du réglage régional
setlocale(LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-1');

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles()
{

  // chargement de Bootstrap
  /*   wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', []);
 */  // chargement d'un fichier CSS
  //wp_enqueue_style('my-theme-main', get_stylesheet_directory_uri() . '/css/main.css', []);
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('menu', get_template_directory_uri() . '/assets/css/menu.css');
  wp_enqueue_style('blog', get_template_directory_uri() . '/assets/css/blog.css');
  wp_enqueue_style('post', get_template_directory_uri() . '/assets/css/post.css');
  wp_enqueue_style('formateur', get_template_directory_uri() . '/assets/css/formateur.css');
  wp_enqueue_style('developpement', get_template_directory_uri() . '/assets/css/developpement.css');
  wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles'); //hook informatique qui permet de personnaliser



/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_script()
{
  // chargement d'un fichier JS
  //wp_enqueue_script('my-theme-main', get_stylesheet_directory_uri() . '/js/main.js', []);

  // chargement de Bootstrap
  wp_enqueue_script('my-theme-main', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', []);

  //Darkmode
  wp_enqueue_script('darkMode', get_template_directory_uri() . '/assets/js/darkmode.js',array(),false, true);
  wp_enqueue_script('darkModeMin', get_template_directory_uri() . '/assets/js/darkmode.min.js',array(),false, true);
  wp_enqueue_script('darkModeInit', get_template_directory_uri() . '/assets/js/darkModeInit.js',array(),false, true);
  $translation_array = array('templateUrl'=> get_template_directory_uri());
  wp_localize_script('darkModeInit','darkmodepath', $translation_array);
}
//Rajoute des choses à faire quand l'action est appelée (paramètre 1, paramètre 2)
add_action('wp_enqueue_scripts', 'my_theme_enqueue_script');


/**
 * fonctionnalités du thème
 */

// activation de la fonctionnalité des balises HTML5 via la configuration WP
add_theme_support('html5');
// activation de la fonctionnalité du titre du site via la configuration WP
add_theme_support('title-tag');
// activation de la fonctionnalité des vignettes via la configuration WP
add_theme_support('post-thumbnails');
// activation des liens feed
add_theme_support('automatic-feed-links');
add_theme_support("wp-block-styles");
add_theme_support("responsive-embeds");
add_theme_support("custom-logo");


/**
 * Menu
 */
// le premier paramètre est la localisation, le second est la description
function mytheme_register_nav_menu()
{
  register_nav_menus(array(
    'header' => __('En tête', 'wp_lernumerique_theme'),
    'footer'  => __('Bas de page', 'wp_lernumerique_theme'),
  ));
}
add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
