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
        <ul class="menu__sublist menu__sublist2">
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#deplacer';?>" title="Je souhaite me déplacer">Me déplacer</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#pasdeplacer';?>" title="Je souhaite que le médecin vienne">Domicile</a></li>
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
        <mask id="ba" fill="#fff">
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
<div class="express express__advice">
  <div class="express__text"><?php echo the_field('express');?></div>
    <svg class="express__svg" width="35" height="217" viewBox="0 0 35 217" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <path id="a" d="M22.52.862H.568v45.33H22.52V.86z"/>
      <path id="c" d="M0 217.138h70.54V1H0z"/>
    </defs>
    <g transform="translate(-36 -1)" fill="none" fill-rule="evenodd">
      <g transform="translate(42 .138)">
        <mask id="b" fill="#fff">
          <use xlink:href="#a"/>
        </mask>
        <path d="M20.004.862H3.082C1.693.862.568 1.99.568 3.382v.1C.567 4.878 1.693 6 3.083 6h3.47v37.672c0 1.392 1.13 2.52 2.52 2.52h4.944c1.39 0 2.517-1.128 2.517-2.52V6h3.47c1.39 0 2.517-1.123 2.517-2.517v-.1c0-1.393-1.125-2.52-2.516-2.52" fill="#15303D" mask="url(#b)"/>
      </g>
      <path d="M66.266 37.268H40.822c-2.362 0-4.277 1.916-4.277 4.275 0 2.36 1.915 4.275 4.277 4.275h1.78c-.038.252-.075.504-.075.76v88.58c0 2.778 2.255 5.034 5.036 5.034h11.962c2.78 0 5.036-2.256 5.036-5.035V46.58c0-.258-.04-.51-.075-.762h1.78c2.36 0 4.276-1.915 4.276-4.275 0-2.36-1.914-4.275-4.274-4.275" fill="#EEE"/>
      <path d="M64.48 135.56c0 2.556-2.253 4.632-5.035 4.632H47.64c-2.78 0-5.035-2.076-5.035-4.632V88.247c0-2.556 2.254-4.633 5.036-4.633h11.805c2.782 0 5.036 2.077 5.036 4.633v47.313z" fill="#FF5938"/>
      <mask id="d" fill="#fff">
        <use xlink:href="#c"/>
      </mask>
      <path fill="#15303D" mask="url(#d)" d="M43.03 69.12h11.017v-3.046H43.03"/>
      <path fill="#15303D" mask="url(#d)" d="M43.03 77.513h11.017V74.47H43.03"/>
      <path fill="#15303D" mask="url(#d)" d="M43.03 85.91h11.017v-3.046H43.03"/>
      <path fill="#15303D" mask="url(#d)" d="M43.03 94.304h11.017v-3.047H43.03"/>
      <path fill="#15303D" mask="url(#d)" d="M43.03 102.696h11.017V99.65H43.03"/>
      <path fill="#15303D" mask="url(#d)" d="M43.03 111.092h11.017v-3.048H43.03"/>
      <path fill="#15303D" mask="url(#d)" d="M43.03 119.488h11.017v-3.048H43.03"/>
      <path d="M60.055 142.807c0 1.445-1.17 2.615-2.614 2.615h-7.793c-1.445 0-2.614-1.17-2.614-2.615 0-1.445 1.17-2.614 2.614-2.614h7.794c1.445 0 2.615 1.17 2.615 2.614" fill="#C3C3C3" mask="url(#d)"/>
      <path d="M57.012 156.753c0 1.39-1.127 2.518-2.52 2.518h-1.898c-1.39 0-2.52-1.128-2.52-2.517V142.71c0-1.393 1.13-2.518 2.52-2.518h1.9c1.39 0 2.518 1.125 2.518 2.518v14.043z" fill="#C3C3C3" mask="url(#d)"/>
      <path d="M53.544 198.934c-.35 0-.63-.286-.63-.63V159.27c0-.346.28-.63.63-.63.347 0 .63.284.63.63v39.035c0 .343-.283.63-.63.63" fill="#15303D" mask="url(#d)"/>
      <path d="M53.22 201.637l-4.307 7.513c-.905 1.59-.973 3.608 0 5.306 1.467 2.556 4.727 3.44 7.284 1.974 2.554-1.464 3.438-4.724 1.973-7.28l-4.306-7.513c-.143-.246-.5-.246-.644 0" fill="#FF5938" mask="url(#d)"/>
    </g>
  </svg>
</div>
<section class="pratique">
  <h2 class="pratique__title">Conseils pratiques</h2>
  <?php if(have_rows('conseil_pratique')):?>
    <?php while(have_rows('conseil_pratique')): the_row();?>
  <article class="pratique__conseil">
    <h3 class="conseil__title"><?php echo the_sub_field('titre_du_conseil');?></h3>
    <div class="conseil__container">
      <div class="conseil__content">
        <?php echo the_sub_field('conseil_texte');?>
      </div>
          <?php if( get_sub_field('image_conseils')):
            $image = get_sub_field('image_conseils'); $size='thumb-conseil';?>
          <?php echo wp_get_attachment_image($image['id'],$size);?>
        <?php endif;?>
    </div>
  </article>
<?php endwhile;?>
<?php endif;?>
</section>
<section class="lien">
  <h2 class="lien__title">Ressource utiles</h2>
  <svg class="lien__svg" width="131" height="93" viewBox="0 0 131 93" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <path id="aaaf" d="M.28 93H107.1V.465H.28z"/>
      <path id="c" d="M130.488 64.347V.187H0v64.16z"/>
    </defs>
    <g fill="none" fill-rule="evenodd">
      <g transform="translate(9 -.465)">
        <mask id="b" fill="#fff">
          <use xlink:href="#a"/>
        </mask>
        <path d="M107.1 29.316C107.1 13.38 94.187.464 78.254.464 67.85.464 58.766 5.99 53.688 14.248 48.616 5.99 39.526.464 29.124.464 13.19.464.28 13.38.28 29.316c0 8.67 3.844 16.432 9.9 21.713l40.876 40.88c.7.698 1.646 1.09 2.632 1.09.99 0 1.936-.392 2.636-1.09L97.2 51.03c6.06-5.282 9.9-13.043 9.9-21.714" fill="#34586B" mask="url(#b)"/>
      </g>
      <g transform="translate(0 7.535)">
        <mask id="d" fill="#fff">
          <use xlink:href="#c"/>
        </mask>
        <path d="M75.78 64.346c-.06 0-.117-.004-.175-.01-.903-.077-1.64-.753-1.797-1.645L65.172 13.37l-9.3 49.35c-.173.914-.956 1.59-1.888 1.624-.88.07-1.767-.575-2.007-1.477L41.72 24.667 35.207 47.94c-.242.863-1.03 1.46-1.927 1.46H2c-1.105 0-2-.893-2-2 0-1.102.895-2 2-2h29.763l8.07-28.838c.242-.862 1.03-1.46 1.925-1.46h.01c.903.005 1.69.615 1.92 1.482l9.876 36.777L63.28 1.813c.178-.94 1.004-1.625 1.965-1.625h.013c.964.005 1.79.7 1.956 1.65l9.235 52.74 6.66-18.515c.286-.793 1.038-1.324 1.88-1.324h43.497c1.104 0 2 .897 2 2 0 1.102-.896 2-2 2h-42.09L77.66 63.026c-.287.798-1.045 1.32-1.88 1.32" fill="#FF9C15" mask="url(#d)"/>
      </g>
    </g>
  </svg>
  <?php if(have_rows('ressource_utiles')):?>
  <ul class="lien__list">
      <?php while(have_rows('ressource_utiles')): the_row();?>
    <li class="lien__element">
      <a class="lien__link" href="<?php echo the_sub_field('lien_de_la_ressource');?>" title="Quitter le site vers ce lien"><?php echo the_sub_field('nom_de_la_ressource');?>
      </a>
    </li>
  <?php endwhile;?>
  </ul>
<?php endif;?>
</section>
<?php get_footer();?>
