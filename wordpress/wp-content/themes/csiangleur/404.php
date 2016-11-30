<?php
/*
Template Name: 404
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
        <ul class="menu__sublist menu__sublist2">
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
  <section class="notfound">
    <svg class="notfound__svg" width="95" height="95" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <path id="a" d="M94.878 95V.117H0v94.88z"/>
        <path id="c" d="M94.878.118V95H0V.117h94.878H0V95h94.88V.118z"/>
      </defs>
      <g fill="none" fill-rule="evenodd">
        <g transform="translate(0 -.117)">
          <mask id="b" fill="#fff">
            <use xlink:href="#a"/>
          </mask>
          <path d="M24.35 94.34c-.88.88-2.3.88-3.174 0L.656 73.82c-.875-.873-.875-2.296.003-3.174L70.53.776c.876-.877 2.296-.877 3.17-.005l20.52 20.522c.875.878.875 2.296 0 3.174L24.348 94.34z" fill="#FFD369" mask="url(#b)"/>
        </g>
        <path d="M46 65.18c-.762.76-2.087.664-2.96-.21L29.91 51.847c-.875-.878-.968-2.206-.208-2.965l19.18-19.178c.76-.76 2.087-.668 2.962.21l13.128 13.125c.875.873.97 2.205.21 2.96L46 65.18z" fill="#FF9C15"/>
        <path d="M70.118 20.108c-.692.694-1.808.694-2.495 0-.688-.688-.688-1.8.003-2.496.684-.683 1.8-.683 2.49.005.688.69.688 1.803.002 2.49" fill="#FF9C15"/>
        <path d="M77.265 27.258c-.69.688-1.808.688-2.495 0-.69-.69-.69-1.807.003-2.496.684-.688 1.8-.688 2.49 0 .69.69.69 1.807.002 2.496" fill="#FF9C15"/>
        <path d="M68.706 28.662c-.69.694-1.804.694-2.495.004-.685-.684-.687-1.806.004-2.49.684-.69 1.804-.69 2.49 0 .69.69.69 1.802.002 2.486" fill="#FF9C15"/>
        <path d="M24.762 74.77c.69-.69 1.808-.69 2.493 0 .693.688.693 1.806 0 2.495-.685.69-1.8.69-2.493 0-.685-.69-.687-1.807 0-2.496" fill="#FF9C15"/>
        <path d="M17.617 67.625c.687-.694 1.804-.694 2.49 0 .692.69.692 1.807 0 2.496-.686.685-1.803.685-2.49-.004-.687-.684-.687-1.802 0-2.49" fill="#FF9C15"/>
        <path d="M26.176 66.21c.687-.688 1.803-.688 2.49 0 .69.69.69 1.808.005 2.492-.69.694-1.807.694-2.495.005-.687-.69-.687-1.807 0-2.496" fill="#FF9C15"/>
        <path d="M.66 24.35c-.878-.88-.878-2.297-.004-3.17L21.18.654c.872-.872 2.292-.872 3.17.006L94.22 70.535c.876.877.876 2.295 0 3.173l-20.518 20.52c-.875.874-2.296.874-3.172-.004L.66 24.35z" fill="#FFD369"/>
        <path d="M29.702 45.998c-.76-.755-.667-2.088.208-2.96l13.13-13.126c.873-.878 2.198-.97 2.96-.21L65.18 48.88c.762.76.667 2.087-.208 2.965L51.844 64.972c-.875.872-2.202.97-2.96.21L29.7 45.998z" fill="#FF9C15"/>
        <path d="M74.773 70.12c-.688-.688-.688-1.806-.003-2.495.69-.694 1.806-.694 2.495 0 .688.69.688 1.807-.002 2.496-.687.685-1.802.685-2.49 0" fill="#FF9C15"/>
        <path d="M67.626 77.266c-.69-.69-.69-1.808 0-2.497.685-.69 1.8-.69 2.492.005.686.683.686 1.8 0 2.49-.692.69-1.807.69-2.492 0" fill="#FF9C15"/>
        <path d="M66.218 68.707c-.692-.69-.693-1.807-.005-2.496.69-.69 1.805-.69 2.495 0 .688.69.685 1.808-.003 2.497-.688.688-1.803.683-2.487 0" fill="#FF9C15"/>
        <path d="M20.107 24.762c.69.69.69 1.806.004 2.496-.69.688-1.806.688-2.493 0-.688-.69-.688-1.807 0-2.496.687-.684 1.803-.684 2.49 0" fill="#FF9C15"/>
        <path d="M27.256 17.612c.692.695.692 1.808 0 2.496-.686.694-1.802.694-2.494 0-.684-.688-.684-1.8 0-2.49.692-.69 1.808-.69 2.494-.006" fill="#FF9C15"/>
        <path d="M28.667 26.18c.687.685.69 1.802 0 2.492-.687.684-1.804.684-2.49 0-.692-.69-.69-1.807 0-2.496.686-.69 1.802-.69 2.49.005" fill="#FF9C15"/>
      </g>
    </svg>
    <h2 class="notfound__title">PAGE NON TROUVÉE</h2>
      <a class="notfound__home" href="<?php echo the_permalink('5');?>"> Retourner à l'accueil</a>
  </section>

<?php get_footer();?>
