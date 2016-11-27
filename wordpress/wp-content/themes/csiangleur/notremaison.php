<?php
/*
Template Name: Maison
*/
get_header();
;?>
<nav class="header__menu"><a class="header__burger" id="header__burger" href="#" title="Voir le menu"><span class="hidden">Menu</span></a>
  <h2 class="hidden">CSI - Navigation</h2>
  <div class="menu__content">
    <ul class="menu__list">
      <li class="menu__element menu__element--down active"><a class="menu__link menu__link--down" href="<?php echo the_permalink('7');?>" title="En savoir plus sur la maison médicale">Notre maison</a>
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('7').'#forfait';?>" title="Comprendre le forfait">Forfait</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('7').'#philosophie';?>" title="Découvrez notre philosophie">Philosophie</a></li>
        </ul>
      </li>
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down" href="<?php echo the_permalink('59');?>" title="Découvrir comment nous fonctionnons">Fonctionnement</a>
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('59').'#inscription';?>" title="Comment puis-je m'inscrire?">Inscription</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('59').'#désinscription';?>" title="Vous souhaitez nous quitter?">Désinscription</a></li>
        </ul>
      </li>
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down" href="<?php echo the_permalink('61');?>" title="En savoir plus sur le service de garde">Service de garde</a>
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#déplacer';?>" title="Je souhaite me déplacer">Me déplacer</a></li>
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

  <section class="headContent headContent--house">
    <div class="headContent__container">
      <div class="headContent__texte">
        <h2 class="headContent__slogan headContent__slogan--house"><?php echo the_field('titre');?></h2>
        <p class="headContent__text">Parce que une bonne relation médecin - patient est primordiale, nous vous proposons des médécins de qualité avec une philosophie de travail privilégiant le bien-être du patient.</p>
      </div>
      <?php if( get_field('photo_header')):
   $image = get_field('photo_header');
   $size='thumb-header';
   ?>
      <figure class="headContent__figure">
        <?php echo wp_get_attachment_image($image['id'],$size);?>
      </figure>
    <?php endif;?>
    </div>
  </section>



<?php get_footer();?>
