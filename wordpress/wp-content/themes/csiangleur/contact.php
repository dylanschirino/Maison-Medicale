<?php
/*
Template Name: Contact
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
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#déplacer';?>" title="Je souhaite me déplacer">Me déplacer</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#pasdéplacer';?>" title="Je souhaite que le médecin vienne">Domicile</a></li>
        </ul>
      </li>
      <li class="menu__element"><a class="menu__link" href="<?php echo the_permalink('65');?>" title="Découvrez les activités que nous proposons">Prévention</a></li>
      <li class="menu__element"><a class="menu__link active" href="<?php echo the_permalink('63');?>" title="Contacter nous et visionner nos horaires">Contact</a></li>

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
  <section class="contactHead">
    <div class="contactHead__container">
      <h2 class="contactHead__title">Contact</h2>
      <div class="contactHead__text"><?php echo the_field('explication_contact');?></div>
      <ul class="cars__list cards__list--contact">
        <li class="cards__element cards__element--contact">
          <a class="cards__link cards__link--contact" href="https://www.google.be/maps/place/Rue+Vaudr%C3%A9e+48,+4031+Li%C3%A8ge/@50.6127477,5.5951963,17z/data=!3m1!4b1!4m5!3m4!1s0x47c0f746b29cb281:0x69612a0f1477f0cc!8m2!3d50.6127443!4d5.597385?hl=fr" title="Voir l'adresse sur google maps">
          <span class="cards__label cards__label--adress">Adresse : </span>
          <span class="cards__info"><?php the_field('adress', 'option'); ?></span>
          </a>
        </li>
        <li class="cards__element cards__element--contact">
          <a class="cards__link cards__link--contact" href="tel:0494344737" title="Téléphoner à la maison médicale">
            <span class="cards__label cards__label--tel">Téléphone : </span>
            <span class="cards__info cards__info--tel"><?php (the_field('telephone', 'option')); ?></span>
          </a>
        </li>
        <li class="cards__element cards__element--contact">
          <a class="cards__link cards__link--contact" href="fax:043434737" title="Nous envoyer un fax!">
            <span class="cards__label cards__label--fax">Fax : </span>
            <span class="cards__info"><?php the_field('fax', 'option');?></span>
          </a>
        </li>
        <li class="cards__element cards__element--contact">
          <a class="cards__link cards__link--contact" href="mailto:<?php the_field('email', 'option');?>" title="Nous envoyer un email">
          <span class="cards__label cards__label--email">Email : </span>
          <span class="cards__info"><?php the_field('email', 'option');?></span>
          </a>
        </li>
      </ul>
    </div>
    <div class="headContent__cards headContent__cards--form">
      <div class="headContent__cardsContact">
        <div class="form">
          <div class="form__container">
            <p class="form__legend">Posez nous vos questions</p>
            <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]');?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer();?>
