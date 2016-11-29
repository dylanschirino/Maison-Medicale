<?php
/*
Template Name: Prevention
*/
if(is_page()){
  query_posts([
    'post_type' => 'prevention'
  ]);
}
get_header();
;?>
<nav class="header__menu"><a class="header__burger" id="header__burger" href="#" title="Voir le menu"><span class="hidden">Menu</span></a>
  <h2 class="hidden">CSI - Navigation</h2>
  <div class="menu__content">
    <ul class="menu__list">
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down" href="<?php echo the_permalink('7');?>" title="En savoir plus sur la maison médicale">Notre maison</a>
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('7').'#forfait';?>" title="Comprendre le forfait">Forfait</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('7').'#philosophie';?>" title="Découvrez notre philosophie">Philosophie</a></li>
        </ul>
      </li>
      <li class="menu__element menu__element--down"><a class="menu__link" href="<?php echo the_permalink('59');?>" title="Découvrir comment nous fonctionnons">Fonctionnement</a>
      </li>
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down" href="<?php echo the_permalink('61');?>" title="En savoir plus sur le service de garde">Service de garde</a>
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#déplacer';?>" title="Je souhaite me déplacer">Me déplacer</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#pasdéplacer';?>" title="Je souhaite que le médecin vienne">Domicile</a></li>
        </ul>
      </li>
      <li class="menu__element"><a class="menu__link active" href="<?php echo the_permalink('65');?>" title="Découvrez les activités que nous proposons">Prévention</a></li>
      <li class="menu__element"><a class="menu__link" href="<?php echo the_permalink('63');?>" title="Contacter nous et visionner nos horaires">Contact</a></li>

      <li class="menu__element menu__element--search"><a class="menu__link menu__link--search" href="#" title="Voir la barre de recherche"><span class="hidden">Search</span></a>
        <div class="menu__search">
          <?php get_search_form(); ?>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
</header>
<div class="site-content">
<main>
  <section class="headContent headContent--house">
    <div class="headContent__container">
      <div class="headContent__texte">
        <h2 class="headContent__slogan headContent__slogan--house"><?php echo the_title();?></h2>
        <div class="headContent__text"><?php echo the_field('introduction');?></div>
      </div>
      <?php if( get_field('main_image')):
   $image = get_field('main_image');
   $size='thumb-header';
   ?>
      <figure class="headContent__figure">
        <?php echo wp_get_attachment_image($image['id'],$size);?>
      </figure>
    <?php endif;?>
    </div>
  </section>
  <section class="forfait" id="forfait">
    <h2 class="hidden">Cause et conséquences</h2>
    <div class="forfait__cardsContainer">
      <section class="forfait__obligation">
        <h3 class="obligation__title obligation__title--cause">Cause de la maladie</h3>
        <div class="obligation__text"><?php echo get_field('maladie_explain_cause');?></div>
        <?php if( have_rows('cause_de_la_maladie')):?>
        <ul class="obligation__list">
          <?php while (have_rows('cause_de_la_maladie')): the_row(); ?>
          <li class="obligation__element"><?php echo the_sub_field('cause_element');?></li>
        <?php endwhile;?>
        </ul>
      <?php endif;?>
      </section>
      <section class="forfait__obligation">
        <h3 class="obligation__title obligation__title--cons">Conséquence de la maladie</h3>
        <div class="obligation__text"><?php echo get_field('maladie_explain_cons');?></div>
        <?php if( have_rows('consequence_de_la_maladie')):?>
        <ul class="obligation__list">
          <?php while (have_rows('consequence_de_la_maladie')): the_row(); ?>
          <li class="obligation__element"><?php echo the_sub_field('cons_element');?></li>
        <?php endwhile;?>
        </ul>
      <?php endif;?>
      </section>
    </div>
  </section>
  <section class="traitement">
    <h2 class="traitement__title">Traitement disponible</h2>
    <div class="traitement__container">
    <svg class="traitement__svg" width="124" height="219" viewBox="0 0 124 219" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <path id="a" d="M0 219.763h123.735V0H0z"/>
      </defs>
      <g fill="none" fill-rule="evenodd">
        <path d="M117.398 209.417c0 5.1-4.137 9.238-9.242 9.238H15.58c-5.106 0-9.24-4.137-9.24-9.238V13.684c0-5.094 4.134-9.227 9.24-9.227h92.576c5.105 0 9.242 4.133 9.242 9.227v195.733z" fill="#FF9C15"/>
        <path d="M123.736 38.07c0 5.093-4.14 9.216-9.24 9.216H9.237C4.138 47.286 0 43.163 0 38.07V9.227C0 4.135 4.14 0 9.24 0h105.257c5.102 0 9.24 4.135 9.24 9.227V38.07z" fill="#E6E6E6"/>
        <path d="M35.525 37.566c0 1.715-1.392 3.107-3.11 3.107-1.72 0-3.112-1.392-3.112-3.107V9.712c0-1.725 1.393-3.117 3.113-3.117 1.717 0 3.11 1.392 3.11 3.117v27.854z" fill="#D3D3D3"/>
        <path d="M15.89 37.566c0 1.715-1.392 3.107-3.112 3.107-1.72 0-3.114-1.392-3.114-3.107V9.712c0-1.725 1.393-3.117 3.114-3.117 1.72 0 3.113 1.392 3.113 3.117v27.854z" fill="#D3D3D3"/>
        <path d="M55.16 37.566c0 1.715-1.39 3.107-3.11 3.107-1.718 0-3.11-1.392-3.11-3.107V9.712c0-1.725 1.392-3.117 3.11-3.117 1.72 0 3.11 1.392 3.11 3.117v27.854z" fill="#D3D3D3"/>
        <path d="M74.798 37.566c0 1.715-1.394 3.107-3.11 3.107-1.72 0-3.112-1.392-3.112-3.107V9.712c0-1.725 1.392-3.117 3.113-3.117 1.714 0 3.108 1.392 3.108 3.117v27.854z" fill="#D3D3D3"/>
        <path d="M94.435 37.566c0 1.715-1.393 3.107-3.113 3.107s-3.11-1.392-3.11-3.107V9.712c0-1.725 1.39-3.117 3.11-3.117s3.113 1.392 3.113 3.117v27.854z" fill="#D3D3D3"/>
        <path d="M114.072 37.566c0 1.715-1.393 3.107-3.112 3.107-1.72 0-3.113-1.392-3.113-3.107V9.712c0-1.725 1.393-3.117 3.113-3.117s3.112 1.392 3.112 3.117v27.854z" fill="#D3D3D3"/>
        <mask id="b" fill="#fff">
          <use xlink:href="#a"/>
        </mask>
        <path fill="#FFD369" mask="url(#b)" d="M16.153 104.29h91.432V77.12H16.153"/>
      </g>
    </svg>
    <div class="traitement__content">
      <?php echo the_field('traitement_disponible');?>
    </div>
  </div>
</section>
<?php get_footer();?>
