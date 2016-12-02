<?php
add_theme_support( 'post-thumbnails');
add_image_size( 'thumb-header', 480,320, true );
add_image_size( 'thumb-cards', 300, 200, true);
add_image_size( 'thumb-conseil', 428, 285, true );
add_image_size( 'thumb-membre', 215, 215, true );

define('WPCF7_AUTOP', false);

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
		'page_title' 	=> 'option',
		'menu_title'	=> 'Pied de page',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

show_admin_bar(false);

//Remove Articles from dashboard
function remove_menus(){

  remove_menu_page( 'edit.php' );

}
add_action( 'admin_menu', 'remove_menus' );


// Register post type
register_post_type( 'prevention', [
            'label' => __('Fiche Prévention ','p'),
            'lapels' => [
                        'singular_name' => __('Fiche de prévention','p'),
                        'add_new' => __('Ajouter une fiche de prévention','p')
                  ],
            'description' => __('La liste de toute les fiches de prévention affiché sur le site.','p'),
            'public' => true,
            'menu_position' => 5,
            'rewrite'=>false,
            'menu_icon' => 'dashicons-media-text',
            'supports' => ['title','thumbnail'],
            'has_archive' => true
      ] );
register_post_type( 'personnel', [
            'label' => __('Staff médicale ','p'),
            'lapels' => [
                        'singular_name' => __('Personnel médicale','p'),
                        'add_new' => __('Ajouter un membre de l\'équipe','p')
                  ],
            'description' => __('La liste de tout le personnel médical','p'),
            'public' => true,
            'menu_position' => 6,
            'rewrite'=>false,
            'menu_icon' => 'dashicons-groups',
            'supports' => ['title','thumbnail'],
            'has_archive' => true
      ] );

// Get the link
function get_the_link($string, $replace = '%s')
{
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}

// TinyMCE
function gn_tinymce_filtre($arr){
    $arr['block_formats'] = 'Paragraph=p;Address=address;Citation=blockquote;Titre Paragraphe=h3;Sous-titre=h4;Gras=strong;';
    return $arr;
  }
add_filter('tiny_mce_before_init', 'gn_tinymce_filtre');

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/svg/logo.svg);
            background-size: cover;
            height:auto;
            padding:30px;
            width: 90px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
