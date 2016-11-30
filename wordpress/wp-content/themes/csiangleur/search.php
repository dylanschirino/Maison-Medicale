<?php
/*
Template Name: Search
*/
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
          <li class="menu__subelement menu__sublist2"><a class="menu__sublink" href="<?php echo the_permalink('61').'#déplacer';?>" title="Je souhaite me déplacer">Me déplacer</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#pasdéplacer';?>" title="Je souhaite que le médecin vienne">Domicile</a></li>
        </ul>
      </li>
      <li class="menu__element"><a class="menu__link" href="<?php echo the_permalink('65');?>" title="Découvrez les activités que nous proposons">Prévention</a></li>
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
<section class="search">
  <svg xmlns="http://www.w3.org/2000/svg" class="search__svg" width="142" height="72" viewBox="0 0 141.08 70.85">
    <defs>
      <style>
        .cls-1{isolation:isolate;}.cls-2{fill:#43596a;}.cls-3{fill:#a2eade;}.cls-4{fill:#fff;opacity:0.5;mix-blend-mode:overlay;}
      </style>
    </defs>
    <g class="cls-1">
      <g id="Layer_2" data-name="Layer 2">
        <g id="Objects">
          <path class="cls-2" d="M77.56 31.95v.47h-9.09A2.53 2.53 0 0 0 65.94 35v.95a2.53 2.53 0 0 0 2.53 2.53h9.08v.47a2.53 2.53 0 0 0 2.53 2.53h58.46a2.53 2.53 0 0 0 2.53-2.53v-7a2.53 2.53 0 0 0-2.53-2.53H80.08a2.53 2.53 0 0 0-2.52 2.53z"/>
          <path class="cls-3" d="M9.52 25.31a27.59 27.59 0 0 0-1.94 10.12 28 28 0 1 0 1.94-10.12z"/>
          <path class="cls-2" d="M2.55 22.3A35.39 35.39 0 0 0 67.5 50.39 35.4 35.4 0 1 0 2.55 22.3zm60.72 13.13a27.84 27.84 0 0 1-55.68 0A28 28 0 0 1 35.43 7.59a27.87 27.87 0 0 1 27.84 27.84z"/>
          <path class="cls-4" d="M35.43 63.26a27.85 27.85 0 0 0 25.1-15.89l-51-22.07a27.59 27.59 0 0 0-1.95 10.13 27.87 27.87 0 0 0 27.85 27.83z"/>
        </g>
      </g>
    </g>
  </svg>
  <h2 class="search__title">Voici les pages où se trouve le mots que vous avez recherché : </h2>
  <ul>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li class="search__element">
    <a class="search__link" href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
  </li>
  <?php endwhile; endif;?>
</ul>

  <p class="search__subtitle"><span class="search__span">Pour votre recherche : </span><?php the_search_query(); ?></p>
</section>
<?php get_footer();?>
