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
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down" href="<?php echo the_permalink('7');?>" title="En savoir plus sur la maison médicale">Notre maison</a>
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('7').'#forfait';?>" title="Comprendre le forfait">Forfait</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('7').'#philosophie';?>" title="Découvrez notre philosophie">Philosophie</a></li>
        </ul>
      </li>
      <li class="menu__element menu__element--down"><a class="menu__link nofocus" href="<?php echo the_permalink('59');?>" title="Découvrir comment nous fonctionnons">Fonctionnement</a>
      </li>
      <li class="menu__element menu__element--down"><a class="menu__link nofocus menu__link--down" href="<?php echo the_permalink('61');?>" title="En savoir plus sur le service de garde">Service de garde</a>
        <ul class="menu__sublist menu__sublist2">
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#deplacer';?>" title="Je souhaite me déplacer">Me déplacer</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#pasdeplacer';?>" title="Je souhaite que le médecin vienne">Domicile</a></li>
        </ul>
      </li>
      <li class="menu__element"><a class="menu__link nofocus" href="<?php echo the_permalink('65');?>" title="Découvrez les activités que nous proposons">Prévention</a></li>
      <li class="menu__element"><a class="menu__link nofocus" href="<?php echo the_permalink('63');?>" title="Contacter nous et visionner nos horaires">Contact</a></li>

      <li class="menu__element menu__element--search"><a class="menu__link menu__link--search" href="#" title="Voir la barre de recherche"><span class="hidden">Recherche</span></a>
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

  <section class="headContent">
    <div class="center">
    <h2 class="hidden">Information principale</h2>
    <p class="headContent__slogan"><?php echo bloginfo('description');?></p>
    <div class="headContent__cards">
      <div class="headContent__cardsContact vcard" id="hcard-Csi-angleur">
        <p class="cards__title">Centre de santé d'angleur</p>
        <ul class="cards__list fn n" itemscope itemtype="http://schema.org/Organization">
          <li class="cards__element"><a class="cards__link" href="https://www.google.be/maps/place/Rue+Vaudr%C3%A9e+48,+4031+Li%C3%A8ge/@50.6127477,5.5951963,17z/data=!3m1!4b1!4m5!3m4!1s0x47c0f746b29cb281:0x69612a0f1477f0cc!8m2!3d50.6127443!4d5.597385?hl=fr" title="Voir l'adresse sur google maps"><span class="cards__label cards__label--adress">Adresse : </span><span class="cards__info stree-address" itemprop="address"><?php the_field('adress', 'option'); ?></span></a></li>
          <li class="cards__element"><a class="cards__link" href="tel:0494344737" title="Téléphoner à la maison médicale"><span class="cards__label cards__label--tel">Téléphone : </span><span class="cards__info tel" itemprop="telephone"><?php (the_field('telephone', 'option')); ?></span></a></li>
          <li class="cards__element"><a class="cards__link" href="fax:043434737" title="Nous envoyer un fax!"><span class="cards__label cards__label--fax" itemprop="faxNumber">Fax : </span><span class="cards__info"><?php the_field('fax', 'option');?></span></a></li>
          <li class="cards__element"><a class="cards__link" href="mailto:<?php the_field('email', 'option');?>" title="Nous envoyer un email"><span class="cards__label cards__label--email">Email : </span><span class="cards__info email" itemprop="email"><?php the_field('email', 'option');?></span></a></li>
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
  </div>
  </section>

  <section class="howitworks">
    <div class="centerContainer">
      <svg class="howitworks__svg" width="170" height="210" viewbox="0 0 158 210">
        <defs>
          <path id="a" d="M21.805 22.203V.68H.285v21.523h21.52z"></path>
        </defs>
        <g fill="none" fill-rule="evenodd">
          <path d="M5.052 41.484C2.636 19.877 17.792 6.71 17.96 6.566c1.008-.852 1.134-2.357.284-3.367-.85-1.007-2.36-1.138-3.37-.286C14.164 3.51-2.45 17.826.31 42.104c.006.056.013.11.022.163l6.63 36.162 4.69-.928-6.6-36.018z" fill="#45B2AE"></path>
          <path d="M51.083 120.67c-28.875 2.257-35.837-23.944-36.085-24.91L11.65 77.5l-4.687.93 3.362 18.34c.075.302 7.532 28.822 37.288 28.822 1.24 0 2.525-.052 3.844-.154 1.317-.105 2.3-1.255 2.197-2.572-.103-1.316-1.23-2.293-2.57-2.197M20.56 5.234c.728 1.447.146 3.207-1.3 3.934-1.444.726-3.206.146-3.933-1.3l-1.823-3.62c-.726-1.448-.144-3.207 1.3-3.936 1.446-.724 3.208-.146 3.936 1.303l1.82 3.62z" fill="#BAFFEE"></path>
          <path d="M99.098 41.484C101.514 19.877 86.358 6.71 86.19 6.566c-1.007-.852-1.134-2.357-.284-3.367.85-1.007 2.36-1.138 3.37-.286.71.597 17.325 14.912 14.565 39.19-.005.056-.012.11-.022.163l-6.63 36.162-4.69-.928 6.6-36.018z" fill="#45B2AE"></path>
          <path d="M53.067 120.67c28.875 2.257 35.837-23.944 36.085-24.91L92.5 77.5l4.687.93-3.362 18.34c-.075.302-7.532 28.822-37.288 28.822-1.24 0-2.525-.052-3.844-.154-1.315-.105-2.3-1.255-2.197-2.572.103-1.316 1.23-2.293 2.57-2.197M83.59 5.234c-.73 1.447-.146 3.207 1.3 3.934 1.444.726 3.206.146 3.933-1.3l1.823-3.62c.726-1.448.144-3.207-1.3-3.936C87.9-.412 86.137.166 85.41 1.615l-1.82 3.62z" fill="#BAFFEE"></path>
          <path class="path" d="M131.103 106.644h-14.808c-10.11 0-18.334 8.225-18.334 18.334v65.962c0 7.47-6.077 13.55-13.548 13.55H69.604c-7.473 0-13.55-6.08-13.55-13.55v-65.35H51.27v65.35c0 10.106 8.225 18.33 18.334 18.33h14.808c10.11 0 18.333-8.224 18.333-18.33v-65.961c0-7.473 6.078-13.55 13.55-13.55h14.808c7.472 0 13.55 6.077 13.55 13.55v30.82h4.783v-30.82c0-10.11-8.224-18.334-18.333-18.334" fill="#BAFFEE"></path>
          <path d="M63.995 119.677h-6.89v-6.89c0-.544-.44-.983-.982-.983H51.2c-.54 0-.985.44-.985.982v6.89H43.33c-.546 0-.984.437-.984.983v4.917c0 .543.438.983.983.983h6.885v6.89c0 .55.444.99.986.99h4.923c.54 0 .982-.44.982-.99v-6.89h6.89c.545 0 .983-.44.983-.983v-4.918c0-.547-.438-.983-.983-.983" fill="#45B2AE"></path>
          <g transform="translate(136 149.27)">
            <mask id="b" fill="#fff">
              <use xlink:href="#a"></use>
            </mask>
            <path class="cercle" d="M21.805 11.443c0 5.94-4.817 10.76-10.76 10.76-5.944 0-10.76-4.82-10.76-10.76C.284 5.5 5.1.68 11.044.68c5.943 0 10.76 4.82 10.76 10.763" fill="#45B2AE" mask="url(#b)"></path>
          </g>
          <path d="M151.635 160.714c0 2.535-2.056 4.59-4.59 4.59-2.536 0-4.59-2.055-4.59-4.59 0-2.535 2.054-4.59 4.59-4.59 2.534 0 4.59 2.055 4.59 4.59" fill="#BAFFEE"></path>
        </g>
      </svg>
      <h2 class="howitworks__title">Comment ca marche&nbsp;?</h2>
      <div class="howitworks__text"><?php echo the_field('comment_ca_marche');?></div>
      <svg class="howitworks__svg howitworks__svg--medic" width="93px" height="70px" viewBox="0 0 93 57">
        <defs>
          <polygon id="path-1" points="14.4799378 27.0850045 28.710552 27.0850045 28.710552 0.214818744 0.249323602 0.214818744 0.249323602 27.0850045"></polygon>
        </defs>
        <g id="Accueil" class="medic" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-1047.000000, -1105.000000)" id="How-it-works">
            <g transform="translate(0.000000, 550.000000)">
              <g id="Medic" transform="translate(1047.000000, 555.000000)">
                <g class="medic-2">
                  <path class="medic-top" d="M47.0103061,29.8901114 C40.5029013,29.8901114 35.2339703,35.1426676 35.2339703,41.6133522 L35.2339703,45.0387159 C35.2339703,51.5110601 40.5029013,56.7602972 47.0103061,56.7602972 L63.6905314,56.7602972 L63.6905314,29.8901114 L47.0103061,29.8901114 L47.0103061,29.8901114 Z" id="Fill-1" fill="#BAFFEE"></path>
                  <g id="Group-5" transform="translate(63.441041, 29.675293)">
                    <mask id="mask-2" fill="white">
                      <use xlink:href="#path-1"></use>
                    </mask>
                    <g id="Clip-4"></g>
                    <path class="medic-bottom" d="M0.249323602,27.0850045 L16.9328827,27.0850045 C23.4402875,27.0850045 28.7108853,21.8357674 28.7108853,15.3634233 L28.7108853,11.9380596 C28.7108853,5.46737498 23.4402875,0.214818744 16.9328827,0.214818744 L0.249323602,0.214818744 L0.249323602,27.0850045 Z" id="Fill-3" fill="#45B2AE" mask="url(#mask-2)"></path>
                  </g>
                </g>
                <path d="M0.120320666,45.0378861 C0.120320666,51.5102303 5.39258537,56.7594674 11.8983233,56.7594674 L15.3303793,56.7594674 C21.8377841,56.7594674 27.1100488,51.5102303 27.1100488,45.0378861 L27.1100488,28.4305148 L0.120320666,28.4305148 L0.120320666,45.0378861 Z" id="Fill-6" fill="#BAFFEE"></path>
                <path d="M27.1105488,28.4300169 L27.1105488,11.809369 C27.1105488,5.33702482 21.8382841,0.0861281662 15.3308793,0.0861281662 L11.8988234,0.0861281662 C5.39308542,0.0861281662 0.120820722,5.33702482 0.120820722,11.809369 L0.120820722,28.4300169 L27.1105488,28.4300169 Z" id="Fill-8" fill="#45B2AE"></path>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </div>
  </section>
  <div class="centerContainer centerContainer--newsletter">
    <section class="newsletter">
      <h2 class="hidden">Inscription à la newsletter</h2>
      <div class="newsletter__container">
        <label for="newsletter" class="newsletter__title">Inscrivez vous à notre newsletter pour recevoir notre actualité</label>
        <div class="newsletter__container">
          <div class="newsletter__form">
            <?php echo do_shortcode('[mc4wp_form id="22"]');?>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section class="discover">
    <div class="discover__header">
      <div class="discover__container">
        <h2 class="discover__title">Découvrez nos services</h2>
        <ul class="discover__menu">
          <li class="discover__element actif"><a class="discover__link discover__link--generale" href="" data-tab-target="tab-one" title="En savoir plus sur la section généraliste">Généraliste</a></li>
          <li class="discover__element"><a class="discover__link discover__link--psy" href="" data-tab-target="tab-two" title="En savoir plus sur la section psychologie">Psychologue</a></li>
          <li class="discover__element"><a class="discover__link discover__link--kine" href="" data-tab-target="tab-three" title="En savoir plus sur la section kine">Kiné</a></li>
          <li class="discover__element"><a class="discover__link discover__link--cardio" href="" data-tab-target="tab-four" title="En savoir plus sur la section cardiologie">Cardiologue</a></li>
          <li class="discover__element"><a class="discover__link discover__link--infirmier" href="" data-tab-target="tab-five" title="En savoir plus sur la section dentiste">Infirmier</a></li>
        </ul>
      </div>
    </div>

    <div class="discover__services">
      <?php if( have_rows('question_reponse_generaliste')):?>
      <div class="discover__content activated" id="tab-one">
        <?php while( have_rows('question_reponse_generaliste') ): the_row(); ?>
        <a class="discover__question" href="#focus" title="Cliquez pour voir le contenu relatif"><?php echo get_sub_field('titre__question');?></a>
        <div class="discover__answer">
          <div class="answer__text"><?php echo get_sub_field('texte_de_la_section');?></div>
        </div>
      <?php endwhile;?>
      </div>
    <?php endif;?>

    <?php if( have_rows('question_reponse_psy')):?>
      <div class="discover__content" id="tab-two">
        <?php while( have_rows('question_reponse_psy') ): the_row(); ?>
        <a class="discover__question" href="#focus" title="Cliquez pour voir le contenu relatif"><?php echo get_sub_field('titre__question');?></a>
        <div class="discover__answer">
          <div class="answer__text"><?php echo get_sub_field('texte_de_la_section');?></div>
        </div>
      <?php endwhile;?>
      </div>
    <?php endif;?>
    <?php if( have_rows('question_reponse_kine')):?>
      <div class="discover__content" id="tab-three">
        <?php while( have_rows('question_reponse_kine') ): the_row(); ?>
        <a class="discover__question" href="#focus" title="Cliquez pour voir le contenu relatif"><?php echo get_sub_field('titre__question');?>
        </a>
        <div class="discover__answer">
          <div class="answer__text"><?php echo get_sub_field('texte_de_la_section');?></div>
        </div>
      <?php endwhile;?>
      </div>
    <?php endif;?>
    <?php if( have_rows('question_reponse_cardio')):?>
      <div class="discover__content" id="tab-four">
        <?php while( have_rows('question_reponse_cardio') ): the_row(); ?>
        <a class="discover__question" href="#focus" title="Cliquez pour voir le contenu relatif"><?php echo get_sub_field('titre__question');?></a>
        <div class="discover__answer">
          <div class="answer__text"><?php echo get_sub_field('texte_de_la_section');?></div>
        </div>
      <?php endwhile;?>
      </div>
    <?php endif;?>
    <?php if( have_rows('question_reponse_infirmière')):?>
      <div class="discover__content" id="tab-five">
        <?php while( have_rows('question_reponse_infirmière') ): the_row(); ?>
        <a class="discover__question" href="#focus" title="Cliquez pour voir le contenu relatif"><?php echo get_sub_field('titre__question');?></a>
        <div class="discover__answer">
          <div class="answer__text"><?php echo get_sub_field('texte_de_la_section');?></div>
        </div>
      <?php endwhile;?>
      </div>
    <?php endif;?>
    </div>
  </section>

<?php get_footer();?>
