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




<?php get_footer();?>
