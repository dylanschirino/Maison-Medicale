<?php
/*
Template Name: Services de garde
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
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down active" href="<?php echo the_permalink('61');?>" title="En savoir plus sur le service de garde">Service de garde</a>
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
  <section class="services">
    <h2 class="services__title"><?php echo the_title();?></h2>
    <svg class="services__svg" width="354px" height="234px" viewBox="0 0 354 234" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <polygon id="path-1" points="353.27 12.3121 353.27 0.8441 0 0.8441 2.71050543e-20 12.3121 353.27 12.3121"></polygon>
        <polygon id="path-3" points="0.2086 78 77.3916 78 77.3916 0.8181 0.2086 0.8181 0.2086 78"></polygon>
        <polygon id="path-5" points="0.8638 78 78.0498 78 78.0498 0.8181 0.8638 0.8181 0.8638 78"></polygon>
      </defs>
      <g id="Service-de-garde-OK-déplacement" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Service-de-garde-OK" transform="translate(-463.000000, -256.000000)">
          <g id="Background" transform="translate(0.000000, 101.000000)">
            <g id="Ambulance" transform="translate(463.000000, 155.000000)">
              <path d="M80.6348,106.3166 L25.0318,106.3166 L25.0318,100.9386 C25.2678,99.7486 25.8028,98.4386 26.6448,96.9966 L61.5878,62.0466 C62.5428,61.2256 63.8558,60.6736 65.5288,60.4376 L80.6348,60.4376 L80.6348,106.3166 Z M25.0318,198.0706 L93.8398,198.0706 L93.8398,120.2426 L93.8398,106.3166 L93.8398,60.4376 L93.8398,53.4756 L93.8398,42.0036 L65.1628,42.0036 C62.0598,42.0036 58.6028,42.7866 54.7798,44.3316 C50.9538,45.8896 47.9058,47.7986 45.6418,50.0646 L15.4318,81.0496 C13.1538,83.3186 11.2538,86.3646 9.6988,90.1916 C8.1408,94.0116 7.3658,97.4716 7.3658,100.5846 L7.3658,175.1296 L7.3658,195.1686 L25.0318,195.1686 L25.0318,198.0706 L25.0318,198.0706 Z" id="Fill-1" fill="#DEDEDE"></path>
              <path d="M342.4971,3.4074 C340.2311,1.1384 337.5471,0.0004 334.4301,0.0004 L105.0531,0.0004 C101.9501,0.0004 99.2611,1.1384 96.9861,3.4074 C94.7211,5.6754 93.5821,8.3684 93.5821,11.4724 L93.5821,32.4594 L93.5821,37.5034 L93.5821,60.4374 L93.5821,106.3164 L93.5821,198.0704 L116.5231,198.0704 L185.3311,198.0704 L300.0221,198.0704 L334.4301,198.0704 C337.5361,198.0704 340.2211,196.9334 342.4971,194.6654 C344.7631,192.3904 345.9041,189.7084 345.9041,186.6014 L345.9041,11.4724 C345.9041,8.3684 344.7631,5.6844 342.4971,3.4074" id="Fill-3" fill="#EEEEEE"></path>
              <path d="M81.4004,127.339 C81.4004,128.995 80.0554,130.344 78.3974,130.344 L55.2264,130.344 C53.5684,130.344 52.2224,128.995 52.2224,127.339 C52.2224,125.681 53.5684,124.333 55.2264,124.333 L78.3974,124.333 C80.0554,124.333 81.4004,125.681 81.4004,127.339" id="Fill-5" fill="#34586B"></path>
              <path d="M274.5547,92.3449 C274.5547,124.5459 248.4507,150.6499 216.2527,150.6499 C184.0517,150.6499 157.9507,124.5459 157.9507,92.3449 C157.9507,60.1449 184.0517,34.0419 216.2527,34.0419 C248.4507,34.0419 274.5547,60.1449 274.5547,92.3449" id="Fill-7" fill="#FFFFFF"></path>
              <path d="M246.8282,82.1545 L226.4422,82.1545 L226.4422,61.7655 C226.4422,60.1575 225.1342,58.8585 223.5352,58.8585 L208.9712,58.8585 C207.3642,58.8585 206.0552,60.1575 206.0552,61.7655 L206.0552,82.1545 L185.6752,82.1545 C184.0622,82.1545 182.7612,83.4555 182.7612,85.0705 L182.7612,99.6225 C182.7612,101.2235 184.0622,102.5265 185.6752,102.5265 L206.0552,102.5265 L206.0552,122.9165 C206.0552,124.5325 207.3642,125.8345 208.9712,125.8345 L223.5352,125.8345 C225.1342,125.8345 226.4422,124.5325 226.4422,122.9165 L226.4422,102.5265 L246.8282,102.5265 C248.4402,102.5265 249.7432,101.2235 249.7432,99.6225 L249.7432,85.0705 C249.7432,83.4555 248.4402,82.1545 246.8282,82.1545" id="Fill-9" fill="#FF5938"></path>
              <g id="Group-13" transform="translate(0.000000, 185.758000)">
                <mask id="mask-2" fill="white">
                  <use xlink:href="#path-1"></use>
                </mask>
                <g id="Clip-12"></g>
                <path d="M353.2705,6.5771 C353.2705,9.7491 350.7025,12.3121 347.5345,12.3121 L5.7355,12.3121 C2.5675,12.3121 -0.0005,9.7491 -0.0005,6.5771 C-0.0005,3.4101 2.5675,0.8441 5.7355,0.8441 L347.5345,0.8441 C350.7025,0.8441 353.2705,3.4101 353.2705,6.5771" id="Fill-11" fill="#B4B4B4" mask="url(#mask-2)"></path>
              </g>
              <g id="Group-16" transform="translate(58.000000, 155.758000)">
                <mask id="mask-4" fill="white">
                  <use xlink:href="#path-3"></use>
                </mask>
                <g id="Clip-15"></g>
                <path d="M77.3916,39.4101 C77.3916,60.7231 60.1126,78.0001 38.7986,78.0001 C17.4876,78.0001 0.2086,60.7231 0.2086,39.4101 C0.2086,18.0961 17.4876,0.8181 38.7986,0.8181 C60.1126,0.8181 77.3916,18.0961 77.3916,39.4101" id="Fill-14" fill="#34586B" mask="url(#mask-4)"></path>
              </g>
              <path d="M123.4805,195.1681 C123.4805,209.9041 111.5355,221.8461 96.7985,221.8461 C82.0655,221.8461 70.1195,209.9041 70.1195,195.1681 C70.1195,180.4331 82.0655,168.4891 96.7985,168.4891 C111.5355,168.4891 123.4805,180.4331 123.4805,195.1681" id="Fill-17" fill="#EEEEEE"></path>
              <path d="M105.5909,195.1681 C105.5909,200.0231 101.6529,203.9571 96.7989,203.9571 C91.9449,203.9571 88.0089,200.0231 88.0089,195.1681 C88.0089,190.3121 91.9449,186.3741 96.7989,186.3741 C101.6529,186.3741 105.5909,190.3121 105.5909,195.1681" id="Fill-19" fill="#15303D"></path>
              <g id="Group-23" transform="translate(235.000000, 155.758000)">
                <mask id="mask-6" fill="white">
                  <use xlink:href="#path-5"></use>
                </mask>
                <g id="Clip-22"></g>
                <path d="M78.0498,39.4101 C78.0498,60.7231 60.7688,78.0001 39.4558,78.0001 C18.1428,78.0001 0.8638,60.7231 0.8638,39.4101 C0.8638,18.0961 18.1428,0.8181 39.4558,0.8181 C60.7688,0.8181 78.0498,18.0961 78.0498,39.4101" id="Fill-21" fill="#34586B" mask="url(#mask-6)"></path>
              </g>
              <path d="M301.1367,195.1681 C301.1367,209.9041 289.1907,221.8461 274.4557,221.8461 C259.7207,221.8461 247.7747,209.9041 247.7747,195.1681 C247.7747,180.4331 259.7207,168.4891 274.4557,168.4891 C289.1907,168.4891 301.1367,180.4331 301.1367,195.1681" id="Fill-24" fill="#EEEEEE"></path>
              <path d="M283.2471,195.1681 C283.2471,200.0231 279.3101,203.9571 274.4561,203.9571 C269.6011,203.9571 265.6661,200.0231 265.6661,195.1681 C265.6661,190.3121 269.6011,186.3741 274.4561,186.3741 C279.3101,186.3741 283.2471,190.3121 283.2471,195.1681" id="Fill-26" fill="#15303D"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <p class="services__label">Numéro d'urgence</p><a class="services__numero" href="tel:0494364774" title="Sonner au numéro d'urgence"><?php echo the_field('num_urgence');?></a>
    <p class="services__info">A contacter uniquement si vous n’arrivez pas à nous contacter par d’autre moyen.</p>
  </section>

  <section class="information">
    <h2 class="hidden">Information sur le services de gardes</h2>
    <div class="information__container">
      <div class="information__choix information__choix--active"><a class="information__link information__link--check" href="#" data-tab-target="move" title="Cliquez pour voir le contenu de la section">Je peux me déplacer</a></div>
      <div class="information__choix" id="pasdéplacer"><a class="information__link information__link--uncheck" href="#" data-tab-target="notmove" title="Cliquez pour voir le contenu de la section">Je ne peux pas me déplacer</a></div>
    </div>
    <div class="information__content information__content--active" id="move">
      <article class="information__article" id="déplacer">
        <h3 class="information__title">Information <span class="hidden"> sur le déplacement</span></h3>
        <?php echo the_field('information_déplacer');?>
      </article>

      <?php if( have_rows('horaire_medecin_centre')):?>
      <table class="information__table">
        <caption class="hidden">Horaire des médecins de garde à la maison médicale</caption>
        <?php while( have_rows('horaire_medecin_centre') ): the_row(); ?>
        <tr class="information__tableRow">
          <th class="information__tableHead" colspan="2"><?php echo the_sub_field('jour_de_la_semaine');?></th>
        </tr>
        <tr class="information__tableRow">
          <td class="information__tableData"><?php echo the_sub_field('heures_ouvertures');?></td>
          <td class="information__tableData"><?php echo the_sub_field('heures_clotures');?></td>
        </tr>
        <tr class="information__tableRow">
          <td class="information__tableData" colspan="2"><a class="information__tel" href="tel:0474266436" title="Téléphoner à ce numéro?"><?php echo the_sub_field('numero_de_telephone');?></a></td>
        </tr>
      <?php endwhile;?>
      </table>
    <?php endif;?>
    </div>
    <div class="information__content" id="notmove">
      <article class="information__article">
        <h3 class="information__title">Information <span class="hidden">sur les soins à domicile</span></h3>
        <?php echo the_field('information_pasdéplacer');?>
      </article>
      <?php if( have_rows('horaire_medecin')):?>
      <table class="information__table">
        <caption class="hidden">Horaire des médecins de garde à domicile</caption>
        <?php while( have_rows('horaire_medecin') ): the_row(); ?>
        <tr class="information__tableRow">
          <th class="information__tableHead" colspan="2"><?php echo the_sub_field('jour_de_la_semaine');?></th>
        </tr>
        <tr class="information__tableRow">
          <td class="information__tableData"><?php echo the_sub_field('heures_ouvertures');?></td>
          <td class="information__tableData"><?php echo the_sub_field('heures_clotures');?></td>
        </tr>
        <tr class="information__tableRow">
          <td class="information__tableData" colspan="2"><a class="information__tel" href="tel:0474266436" title="Téléphoner à ce numéro?"><?php echo the_sub_field('numero_de_telephone');?></a></td>
        </tr>
      <?php endwhile;?>
      </table>
    <?php endif;?>
    </div>
  </section>
<?php get_footer();?>
