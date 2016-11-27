<?php
/*
Template Name: HomePage
*/
get_header();
;?>
<nav class="header__menu"><a class="header__burger" id="header__burger" href="#" title="Voir le menu"><span class="hidden">Menu</span></a>
  <h2 class="hidden">CSI - Navigation</h2>
  <div class="menu__content">
    <ul class="menu__list">
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down" href="notremaison.html" title="En savoir plus sur la maison médicale">Notre maison</a>
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="notremaison.html#forfait" title="Comprendre le forfait">Forfait</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="notremaison.html#philosophie" title="Découvrez notre philosophie">Philosophie</a></li>
        </ul>
      </li>
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down" href="fonctionnement.html" title="Découvrir comment nous fonctionnons">Fonctionnement</a>
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="fonctionnement.html#inscription" title="Comment puis-je m'inscrire?">Inscription</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="fonctionnement.html#désinscription" title="Vous souhaitez nous quitter?">Désinscription</a></li>
        </ul>
      </li>
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down" href="services.html" title="En savoir plus sur le service de garde">Service de garde</a>
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="services.html#déplacer" title="Je souhaite me déplacer">Me déplacer</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="services.html#pasdéplacer" title="Je souhaite que le médecin vienne">Domicile</a></li>
        </ul>
      </li>
      <li class="menu__element"><a class="menu__link" href="prevention.html" title="Découvrez les activités que nous proposons">Prévention</a></li>
      <li class="menu__element"><a class="menu__link" href="contact.html" title="Contacter nous et visionner nos horaires">Contact</a></li>
      <li class="menu__element menu__element--search"><a class="menu__link menu__link--search" href="#" title="Voir la barre de recherche"><span class="hidden">Search</span></a>
        <div class="menu__search">
          <form class="header__search" method="get" action="/">
            <input class="search__box" type="search" placeholder="Recherche" name="search">
            <input class="search__submit" type="submit" value="OK">
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
</header>
<div class="site-content">
<main>

  <section class="headContent">
    <h2 class="hidden">Information principale</h2>
    <p class="headContent__slogan"><?php echo bloginfo('description');?></p>
    <div class="headContent__cards">
      <div class="headContent__cardsContact">
        <p class="cards__title">Centre de santé d'angleur</p>
        <ul class="cards__list">
          <li class="cards__element"><a class="cards__link" href="https://www.google.be/maps/place/Rue+Vaudr%C3%A9e+48,+4031+Li%C3%A8ge/@50.6127477,5.5951963,17z/data=!3m1!4b1!4m5!3m4!1s0x47c0f746b29cb281:0x69612a0f1477f0cc!8m2!3d50.6127443!4d5.597385?hl=fr" title="Voir l'adresse sur google maps"><span class="cards__label cards__label--adress">Adresse : </span><span class="cards__info"><?php the_field('adress', 'option'); ?></span></a></li>
          <li class="cards__element"><a class="cards__link" href="tel:0494344737" title="Téléphoner à la maison médicale"><span class="cards__label cards__label--tel">Téléphone : </span><span class="cards__info"><?php (the_field('telephone', 'option')); ?></span></a></li>
          <li class="cards__element"><a class="cards__link" href="fax:043434737" title="Nous envoyer un fax!"><span class="cards__label cards__label--fax">Fax : </span><span class="cards__info"><?php the_field('fax', 'option');?></span></a></li>
          <li class="cards__element"><a class="cards__link" href="mailto:<?php the_field('email', 'option');?>" title="Nous envoyer un email"><span class="cards__label cards__label--email">Email : </span><span class="cards__info"><?php the_field('email', 'option');?></span></a></li>
        </ul>
      </div>
      <div class="cardsScheldule">
        <p class="cards__title cards__title--horaire">Horaires d'ouverture</p>
        <?php if( have_rows('horaire','option') ):?>
        <ul class="cards__list cards__list--last">
          <?php while( have_rows('horaire', 'option') ): the_row(); ?>
          <li class="table__element">
            <span class="table__day"><?php the_sub_field('jours');?></span>
            <span class="table__info"><?php the_sub_field('heure');?></span>
          </li>
        <?php endwhile;?>
        </ul>
      <?php endif;?>
      </div>
    </div>
  </section>




<?php get_footer();?>
