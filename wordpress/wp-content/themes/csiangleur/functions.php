<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb-header', 480,320, true );

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

function get_the_link($string, $replace = '%s')
{
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}

  function share_button($content) {
       global $post;

        $share_URL = get_permalink();
        $share_title = str_replace( ' ', '%20', get_the_title());
        $share_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        $share_excerpt = strip_tags(get_the_content());

        $twitterURL = 'https://twitter.com/intent/tweet?text='.$share_title.'&amp;url='.$share_URL.'&amp;via=showyourglitters';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?url='.$share_URL;
        $googleURL = 'https://plus.google.com/share?url='.$share_URL;
        $pinterestURL='https://pinterest.com/pin/create/button/?url='.$share_URL.'&media='.$share_thumbnail[0];
        $linkedinURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$share_URL.'/&title='.$share_title.'&summary=&source=';

        $content .= '<!-- Facebook Share Button -->
        <ul class="etiquette__list">
        <li class="etiquette__element etiquette__element--facebook">
        <a class="etiquette__link etiquette__link--facebook" href="'.$facebookURL.'" title="Partager sur facebook"><span class="hidden">Facebook</span></a>
        </li>
        <!-- Twitter Share Button -->
        <li class="etiquette__element etiquette__element--twitter">
        <a class="etiquette__link etiquette__link--twitter" href="'.$twitterURL.'" title="Partager sur twitter"><span class="hidden">Twitter</span></a>
        </li>
        </ul>';
    return $content;
}


function gn_tinymce_filtre($arr){
    $arr['block_formats'] = 'Paragraph=p;Address=address;Citation=blockquote;Titre Paragraphe=h3;Sous-titre=h4;Gras=strong;';
    return $arr;
  }
add_filter('tiny_mce_before_init', 'gn_tinymce_filtre');
