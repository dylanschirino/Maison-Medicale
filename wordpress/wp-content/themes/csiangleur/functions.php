<?php
add_theme_support( 'post-thumbnails');
add_image_size( 'thumb-header', 480,320, true );
add_image_size( 'thumb-cards', 300, 200, true);
add_image_size( 'thumb-conseil', 428, 285, true );

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


function get_the_link($string, $replace = '%s')
{
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}


function gn_tinymce_filtre($arr){
    $arr['block_formats'] = 'Paragraph=p;Address=address;Citation=blockquote;Titre Paragraphe=h3;Sous-titre=h4;Gras=strong;';
    return $arr;
  }
add_filter('tiny_mce_before_init', 'gn_tinymce_filtre');
