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
        <div class="headContent__text"><?php echo the_field('texte_daccroche');?></div>
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

  <section class="forfait" id="forfait">
    <div class="forfait__container">
      <h2 class="forfait__title">Le forfait, c'est quoi ?</h2>
      <div class="forfait__content">
        <svg class="forfait__svg" width="124px" height="177px" viewBox="0 0 124 177" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
            <polygon id="path-1" points="0 176.644 123.962 176.644 123.962 0 0 0"></polygon>
          </defs>
          <g id="Qui-sommes-nous" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-181.000000, -669.000000)" id="Forfait">
              <g transform="translate(136.000000, 630.000000)">
                <g id="Note-illu" transform="translate(45.000000, 39.000000)">
                  <path d="M120.3711,166.8502 C120.3711,167.7132 119.6761,168.4062 118.8171,168.4062 L1.5531,168.4062 C0.6961,168.4062 0.0001,167.7132 0.0001,166.8502 L0.0001,15.4172 C0.0001,14.5572 0.6961,13.8662 1.5531,13.8662 L118.8171,13.8662 C119.6761,13.8662 120.3711,14.5572 120.3711,15.4172 L120.3711,166.8502 L120.3711,166.8502 Z" id="Fill-1" fill="#59EBCF"></path>
                  <mask id="mask-2" fill="white">
                    <use xlink:href="#path-1"></use>
                  </mask>
                  <g id="Clip-4"></g>
                  <polygon id="Fill-3" fill="#FAFAFA" mask="url(#mask-2)" points="9.32 158.684 111.052 158.684 111.052 23.587 9.32 23.587"></polygon>
                  <path d="M60.1866,10.3644 C58.2556,10.3644 56.6906,8.8024 56.6906,6.8674 C56.6906,4.9404 58.2556,3.3744 60.1866,3.3744 C62.1166,3.3744 63.6796,4.9404 63.6796,6.8674 C63.6796,8.8024 62.1166,10.3644 60.1866,10.3644 M85.4116,8.2254 L67.1896,8.2254 C67.2486,7.8574 67.3016,7.4974 67.3016,7.1144 C67.3016,3.1884 64.1156,0.0004 60.1866,0.0004 C56.2556,0.0004 53.0686,3.1884 53.0686,7.1144 C53.0686,7.4974 53.1236,7.8574 53.1816,8.2254 L34.9596,8.2254 C34.2006,8.2254 33.5866,8.8374 33.5866,9.5944 L33.5866,15.4284 C33.5866,16.1864 34.2006,16.8014 34.9596,16.8014 L85.4116,16.8014 C86.1696,16.8014 86.7836,16.1864 86.7836,15.4284 L86.7836,9.5944 C86.7836,8.8374 86.1696,8.2254 85.4116,8.2254" id="Fill-5" fill="#34586B" mask="url(#mask-2)"></path>
                  <path d="M94.3428,37.6574 L89.3198,37.6574 L89.3198,32.6324 C89.3198,32.2374 88.9968,31.9164 88.6028,31.9164 L85.0148,31.9164 C84.6188,31.9164 84.2958,32.2374 84.2958,32.6324 L84.2958,37.6574 L79.2748,37.6574 C78.8778,37.6574 78.5578,37.9744 78.5578,38.3724 L78.5578,41.9584 C78.5578,42.3534 78.8778,42.6744 79.2748,42.6744 L84.2958,42.6744 L84.2958,47.6994 C84.2958,48.0984 84.6188,48.4194 85.0148,48.4194 L88.6028,48.4194 C88.9968,48.4194 89.3198,48.0984 89.3198,47.6994 L89.3198,42.6744 L94.3428,42.6744 C94.7388,42.6744 95.0598,42.3534 95.0598,41.9584 L95.0598,38.3724 C95.0598,37.9744 94.7388,37.6574 94.3428,37.6574" id="Fill-6" fill="#54D2CB" mask="url(#mask-2)"></path>
                  <polygon class="text" id="Fill-7" fill="#D3D3D3" mask="url(#mask-2)" points="70.636 57.248 102.981 57.248 102.981 52.651 70.636 52.651"></polygon>
                  <polygon class="text" id="Fill-8" fill="#D3D3D3" mask="url(#mask-2)" points="17.388 79.116 102.981 79.116 102.981 74.52 17.388 74.52"></polygon>
                  <polygon class="text" id="Fill-9" fill="#D3D3D3" mask="url(#mask-2)" points="17.388 91.821 102.981 91.821 102.981 87.221 17.388 87.221"></polygon>
                  <polygon class="text" id="Fill-10" fill="#D3D3D3" mask="url(#mask-2)" points="17.388 104.521 102.981 104.521 102.981 99.925 17.388 99.925"></polygon>
                  <polygon class="text" id="Fill-11" fill="#D3D3D3" mask="url(#mask-2)" points="17.388 117.221 102.981 117.221 102.981 112.633 17.388 112.633"></polygon>
                  <polygon class="text" id="Fill-12" fill="#D3D3D3" mask="url(#mask-2)" points="17.388 129.925 102.981 129.925 102.981 125.328 17.388 125.328"></polygon>
                  <g id="Pen" mask="url(#mask-2)">
                    <g transform="translate(86.000000, 99.000000)">
                      <path d="M6.1211,76.7799 C5.8171,77.4989 4.9851,77.8359 4.2661,77.5329 L1.3321,76.2889 C0.6111,75.9829 0.2751,75.1549 0.5791,74.4299 L27.8201,10.0899 C28.1251,9.3709 28.9581,9.0339 29.6761,9.3399 L32.6101,10.5809 C33.3311,10.8859 33.6681,11.7149 33.3621,12.4379 L6.1211,76.7799 Z" id="Fill-13" fill="#15303D"></path>
                      <path d="M28.7325,25.6412 C28.4265,26.3652 27.5965,26.6972 26.8775,26.3952 L22.3125,24.4652 C21.5935,24.1602 21.2545,23.3282 21.5605,22.6082 L30.6785,1.0722 C30.9815,0.3532 31.8145,0.0162 32.5345,0.3232 L37.0975,2.2522 C37.8185,2.5572 38.1545,3.3892 37.8485,4.1052 L28.7325,25.6412 Z" id="Fill-14" fill="#34586B"></path>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
        <div class="forfait__text">
          <div class="forfait__explaination"><?php echo the_field('explication_du_forfait');?></div>
        </div>
      </div>
    </div>
    <div class="forfait__cardsContainer">
      <section class="forfait__obligation">
        <h3 class="obligation__title obligation__title--house">Droits et devoirs des maisons médicales</h3>
        <?php if( have_rows('droits_maisons')):?>
        <ul class="obligation__list">
          <?php while( have_rows('droits_maisons')): the_row(); ?>
          <li class="obligation__element"><?php echo the_sub_field('droits_ou_devoirs');?></li>
        <?php endwhile;?>
        </ul>
      <?php endif;?>
      </section>
      <section class="forfait__obligation">
        <h3 class="obligation__title obligation__title--patient">Droits et devoirs des patients</h3>
        <?php if( have_rows('droits_patients')):?>
        <ul class="obligation__list">
          <?php while( have_rows('droits_patients')): the_row(); ?>
          <li class="obligation__element"><?php echo the_sub_field('droits_ou_devoirs');?></li>
        <?php endwhile;?>
        </ul>
      <?php endif;?>
      </section>
    </div>
  </section>
  <div class="express">
    <p class="express__text"><?php echo get_field('freedom');?></p>
  </div>
  <section class="philosophie" id="philosophie">
    <div class="philosophie__container">
      <h2 class="philosophie__title">Notre philosophie</h2>
      <div class="philosophie__content">
        <div class="philosophie__text"><?php echo the_field('philosophie');?></div>
      </div>
    </div>
  </section>
  
<?php get_footer();?>
