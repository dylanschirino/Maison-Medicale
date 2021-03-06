<?php
/*
Template Name: Contact
*/
if(is_page()){
  query_posts([
    'post_type' => 'personnel'
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
    <div class="center">
    <div class="contactHead__container">
      <h2 class="contactHead__title">Contact</h2>
      <div class="contactHead__text vcard" id="hcard-Csi-angleur"><?php echo the_field('explication_contact');?></div>
      <ul class="cars__list cards__list--contact fn n" itemscope itemtype="http://schema.org/Organization">
        <li class="cards__element cards__element--contact">
          <a class="cards__link cards__link--contact" href="https://www.google.be/maps/place/Rue+Vaudr%C3%A9e+48,+4031+Li%C3%A8ge/@50.6127477,5.5951963,17z/data=!3m1!4b1!4m5!3m4!1s0x47c0f746b29cb281:0x69612a0f1477f0cc!8m2!3d50.6127443!4d5.597385?hl=fr" title="Voir l'adresse sur google maps">
          <span class="cards__label cards__label--adress">Adresse : </span>
          <span class="cards__info street-address" itemprop="address"><?php the_field('adress', 'option'); ?></span>
          </a>
        </li>
        <li class="cards__element cards__element--contact">
          <a class="cards__link cards__link--contact" href="tel:0494344737" title="Téléphoner à la maison médicale">
            <span class="cards__label cards__label--tel">Téléphone : </span>
            <span class="cards__info cards__info--tel tel" itemprop="telephone"><?php (the_field('telephone', 'option')); ?></span>
          </a>
        </li>
        <li class="cards__element cards__element--contact">
          <a class="cards__link cards__link--contact" href="fax:043434737" title="Nous envoyer un fax!">
            <span class="cards__label cards__label--fax">Fax : </span>
            <span class="cards__info" itemprop="faxNumber"><?php the_field('fax', 'option');?></span>
          </a>
        </li>
        <li class="cards__element cards__element--contact">
          <a class="cards__link cards__link--contact" href="mailto:<?php the_field('email', 'option');?>" title="Nous envoyer un email">
          <span class="cards__label cards__label--email">Email : </span>
          <span class="cards__info email" itemprop="email"><?php the_field('email', 'option');?></span>
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
  </div>
  </section>
  <section class="maps">
    <h2 class="hidden">Google maps</h2><a class="maps__link" href="https://www.google.be/maps/place/Rue+Vaudr%C3%A9e+48,+4031+Li%C3%A8ge/@50.6127477,5.5951963,17z/data=!3m1!4b1!4m5!3m4!1s0x47c0f746b29cb281:0x69612a0f1477f0cc!8m2!3d50.6127443!4d5.597385?hl=fr" title="Google maps"><span class="maps__label">Google maps</span></a>
  </section>
  <section class="team">
    <div class="team__container">
      <div class="team__header">
        <h2 class="team__title">Notre équipe</h2>
        <div class="controls__container"><a class="button controls__button--prev controls__button--prev1" href="#s2"><span class="hidden">Next</span></a><a class="button controls__button--next controls__button--next2" href="#s1"><span class="hidden">Prev</span></a></div>
      </div>
      <div class="team__slideshow">
        <div id="s1">
          <div id="s2"></div>
          <ul class="team__slider" id="sContent">
            <?php $args = array( 'post_type' => 'personnel');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();?>
            <li class="team__element">
              <?php if( get_field('photo_du_membre')): $image = get_field('photo_du_membre'); $size='thumb-membre';?>
              <?php echo wp_get_attachment_image($image['id'],$size);?>
            <?php endif;?>
              <div class="team__horaire">
                <div class="team__horaire--info"><?php echo the_field('disponibilite');?></div>
              </div>
              <div class="team__info"><span class="team__name"><?php the_title();?></span><span class="team__function"><?php echo the_field('profession');?></span></div>
            </li>
          <?php endwhile;?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php wp_reset_query(); ?>
  <section class="horaire">
    <h2 class="horaire__title hidden">Heures de visite par section</h2>
    <svg class="horaire__svg" width="80px" height="80px" viewBox="0 0 80 80">
      <defs></defs>
      <g id="Contact" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-600.000000, -1562.000000)" id="Horaires">
          <g transform="translate(-1.000000, 1530.000000)">
            <g transform="translate(601.000000, 32.000000)">
              <g>
                <path d="M39.9565563,79.912053 C29.2837086,79.912053 19.2503311,75.7562914 11.7027815,68.2098013 C4.15629139,60.6627815 0,50.6288742 0,39.9560265 C0,29.2837086 4.15629139,19.2498013 11.7027815,11.7027815 C19.2503311,4.15576159 29.2837086,0 39.9565563,0 C50.629404,0 60.6627815,4.15576159 68.2103311,11.7027815 C75.7568212,19.2498013 79.9125828,29.2837086 79.9125828,39.9560265 C79.9125828,50.6288742 75.7568212,60.6627815 68.2103311,68.2098013 C60.6633113,75.7562914 50.629404,79.912053 39.9565563,79.912053" id="Fill-1" fill="#FF9C15"></path>
                <path d="M39.9565563,73.1384901 C31.0929801,73.1384901 22.7602649,69.6863046 16.4927152,63.4198146 C10.2262252,57.1527947 6.77350993,48.8200795 6.77350993,39.9559735 C6.77350993,31.0929272 10.2262252,22.7596821 16.4927152,16.4931921 C22.7602649,10.2256424 31.0929801,6.77345695 39.9565563,6.77345695 C48.8201325,6.77345695 57.1528477,10.2256424 63.4203974,16.4931921 C69.6874172,22.7596821 73.138543,31.0929272 73.138543,39.9559735 C73.138543,48.8200795 69.6874172,57.1527947 63.4203974,63.4198146 C57.1528477,69.6863046 48.8201325,73.1384901 39.9565563,73.1384901" id="Fill-3" fill="#FFFFFF"></path>
                <path d="M37.3779073,14.6544106 L36.7914172,14.8340132 C36.7341987,14.8499073 36.6605563,14.8589139 36.6123444,14.8589139 C36.3755232,14.8589139 36.1720795,14.6634172 36.1720795,14.434543 C36.1720795,14.2231523 36.3024106,14.0605033 36.5058543,14.0032848 L37.3694305,13.7261987 C37.565457,13.6695099 37.7122119,13.6366623 37.8579073,13.6366623 L37.8743311,13.6366623 C38.1604238,13.6366623 38.3718146,13.8565298 38.3718146,14.1330861 L38.3718146,18.9563974 C38.3718146,19.2334834 38.1514172,19.453351 37.8743311,19.453351 C37.6057219,19.453351 37.3779073,19.2334834 37.3779073,18.9563974 L37.3779073,14.6544106 Z" id="Fill-5" fill="#FF9C15"></path>
                <path d="M39.7656159,18.442702 L41.5166093,16.9523709 C42.298596,16.2917086 42.5836291,15.9261457 42.5836291,15.4122384 C42.5836291,14.8501192 42.1841589,14.5242914 41.6633642,14.5242914 C41.2072053,14.5242914 40.8893245,14.7367417 40.5391258,15.160053 C40.4654834,15.2411126 40.3510464,15.3152848 40.1889272,15.3152848 C39.9356821,15.3152848 39.7327682,15.1107815 39.7327682,14.8580662 C39.7327682,14.7526358 39.7735629,14.6387285 39.8461457,14.5481325 C40.3107815,13.9711788 40.840053,13.6283974 41.7364768,13.6283974 C42.8527682,13.6283974 43.6178013,14.3129007 43.6178013,15.330649 L43.6178013,15.3470728 C43.6178013,16.2434967 43.1462781,16.7325033 42.1354172,17.554755 L40.9629669,18.5322384 L43.2766093,18.5322384 C43.5208477,18.5322384 43.7168742,18.7277351 43.7168742,18.9725033 C43.7168742,19.2172715 43.5208477,19.4127682 43.2766093,19.4127682 L40.0416424,19.4127682 C39.7327682,19.4127682 39.5044238,19.2331656 39.5044238,18.9401854 C39.5044238,18.7446887 39.5939603,18.5815099 39.7656159,18.442702" id="Fill-7" fill="#FF9C15"></path>
                <path d="M62.1942252,42.1922119 C62.1046887,42.1185695 62.0315762,41.9802914 62.0315762,41.8330066 C62.0315762,41.5723444 62.2519735,41.3524768 62.512106,41.3524768 C62.6593907,41.3524768 62.7642914,41.4091656 62.8458808,41.4828079 C63.2045563,41.8414834 63.6114437,42.0290331 64.1423046,42.0290331 C64.7033642,42.0290331 65.1277351,41.6873113 65.1277351,41.1659868 L65.1277351,41.1490331 C65.1277351,40.5874437 64.6138278,40.2695629 63.8164768,40.2695629 L63.6114437,40.2695629 C63.3751523,40.2695629 63.1801854,40.0735364 63.1801854,39.8377748 C63.1801854,39.7074437 63.237404,39.5850596 63.392106,39.4298278 L64.7277351,38.0051921 L62.6593907,38.0051921 C62.4146225,38.0051921 62.2191258,37.8091656 62.2191258,37.5723444 C62.2191258,37.328106 62.4146225,37.1326093 62.6593907,37.1326093 L65.5754172,37.1326093 C65.8604503,37.1326093 66.0723709,37.3037351 66.0723709,37.5723444 C66.0723709,37.8091656 65.9579338,37.9469139 65.7868079,38.1185695 L64.442702,39.5108874 C65.3062781,39.6179073 66.1211126,40.0571126 66.1211126,41.1082384 L66.1211126,41.1246623 C66.1211126,42.1763179 65.314755,42.9328742 64.1258808,42.9328742 C63.2861457,42.9328742 62.6593907,42.639894 62.1942252,42.1922119" id="Fill-9" fill="#FF9C15"></path>
                <path d="M41.1418808,64.4950464 L41.1418808,64.4802119 C41.1418808,63.9096159 40.6857219,63.4857748 39.9768477,63.4857748 C39.2679735,63.4857748 38.8202914,63.9419338 38.8202914,64.4876291 L38.8202914,64.5045828 C38.8202914,65.0820662 39.2923444,65.5218013 40.0012185,65.5218013 C40.7106225,65.5218013 41.1418808,65.0820662 41.1418808,64.4950464 M38.437245,65.7914702 C38.005457,65.3591523 37.7447947,64.7647152 37.7447947,63.616106 L37.7447947,63.5996821 C37.7447947,61.8566358 38.5755232,60.496106 40.1887682,60.496106 C40.7752583,60.496106 41.239894,60.6502781 41.6144636,60.9029934 C41.7691656,61.0010066 41.866649,61.1313377 41.866649,61.3347815 C41.866649,61.5954437 41.6462517,61.7994172 41.386649,61.7994172 C41.2965828,61.7994172 41.2070464,61.7665695 41.1328742,61.725245 C40.8234702,61.5223311 40.5384371,61.4084238 40.1564503,61.4084238 C39.3082384,61.4084238 38.8356556,62.1739868 38.7874437,63.2171656 C39.0889007,62.9231258 39.4793642,62.6460397 40.1564503,62.6460397 C41.2557881,62.6460397 42.1437351,63.2976954 42.1437351,64.4394172 L42.1437351,64.4547815 C42.1437351,65.5874967 41.2229404,66.3938543 40.0261192,66.3938543 C39.3246623,66.3938543 38.8202914,66.1739868 38.437245,65.7914702" id="Fill-11" fill="#FF9C15"></path>
                <path d="M16.6970596,39.0144106 L16.6970596,38.9985166 C16.6970596,38.4040795 16.2329536,37.9468609 15.5076556,37.9468609 C14.7993113,37.9468609 14.3749404,38.4199735 14.3749404,39.0064636 L14.3749404,39.0228874 C14.3749404,39.6178543 14.8316291,40.0406358 15.5399735,40.0406358 C16.2658013,40.0406358 16.6970596,39.5685828 16.6970596,39.0144106 M13.7889801,42.5100397 C13.650702,42.4199735 13.5606358,42.2816954 13.5606358,42.0936159 C13.5606358,41.8329536 13.7720265,41.6379868 14.0337483,41.6379868 C14.1391788,41.6379868 14.229245,41.6703046 14.3103046,41.7190464 C14.6440795,41.9558675 14.9624901,42.0697748 15.3534834,42.0697748 C16.1926887,42.0697748 16.6970596,41.3285828 16.7299073,40.277457 C16.4443444,40.6197086 16.0051391,40.8798411 15.3942781,40.8798411 C14.1794437,40.8798411 13.3736159,40.1714967 13.3736159,39.0716291 L13.3736159,39.0552053 C13.3736159,37.9394437 14.2366623,37.0832848 15.4997086,37.0832848 C16.2170596,37.0832848 16.6811656,37.2872583 17.0885828,37.6867285 C17.5034172,38.1105695 17.7725563,38.7378543 17.7725563,39.8620927 L17.7725563,39.8779868 C17.7725563,41.7110993 16.8681854,42.9820927 15.3285828,42.9820927 C14.6848742,42.9820927 14.2128212,42.794543 13.7889801,42.5100397" id="Fill-13" fill="#FF9C15"></path>
                <path d="M11.6654834,40.1536954 C11.6654834,40.402702 11.4641589,40.6034967 11.2151523,40.6034967 L9.65541722,40.6034967 C9.4069404,40.6034967 9.20508609,40.402702 9.20508609,40.1536954 L9.20508609,40.0175364 C9.20508609,39.7685298 9.4069404,39.5677351 9.65541722,39.5677351 L11.2151523,39.5677351 C11.4641589,39.5677351 11.6654834,39.7685298 11.6654834,40.0175364 L11.6654834,40.1536954 Z" id="Fill-15" fill="#FF9C15"></path>
                <path d="M40.6684503,11.3472848 C40.6684503,11.5952318 40.4904371,11.7303311 40.2414305,11.7303311 L40.0247417,11.7303311 C39.7752053,11.7303311 39.6332185,11.5952318 39.6332185,11.3472848 L39.6332185,9.78807947 C39.6332185,9.54013245 39.7752053,9.26993377 40.0247417,9.26993377 L40.2414305,9.26993377 C40.4904371,9.26993377 40.6684503,9.54013245 40.6684503,9.78807947 L40.6684503,11.3472848 Z" id="Fill-17" fill="#FF9C15"></path>
                <path d="M70.7078146,40.1536954 C70.7078146,40.402702 70.5059603,40.6034967 70.2569536,40.6034967 L68.6972185,40.6034967 C68.4487417,40.6034967 68.2468874,40.402702 68.2468874,40.1536954 L68.2468874,40.0175364 C68.2468874,39.7685298 68.4487417,39.5677351 68.6972185,39.5677351 L70.2569536,39.5677351 C70.5059603,39.5677351 70.7078146,39.7685298 70.7078146,40.0175364 L70.7078146,40.1536954 Z" id="Fill-19" fill="#FF9C15"></path>
                <path d="M40.6684503,70.192 C40.6684503,70.4410066 40.4671258,70.6423311 40.218649,70.6423311 L40.0830199,70.6423311 C39.834543,70.6423311 39.6332185,70.4410066 39.6332185,70.192 L39.6332185,68.6322649 C39.6332185,68.3832583 39.834543,68.1819338 40.0830199,68.1819338 L40.218649,68.1819338 C40.4671258,68.1819338 40.6684503,68.3832583 40.6684503,68.6322649 L40.6684503,70.192 Z" id="Fill-21" fill="#FF9C15"></path>
                <path d="M24.6114437,65.6979603 C24.4890596,65.8849801 24.5399205,66.136106 24.7274702,66.2595497 C24.9134305,66.3819338 25.1645563,66.330543 25.288,66.144053 L25.9560795,65.1289536 C26.0795232,64.9419338 26.0286623,64.6908079 25.8411126,64.5684238 C25.6546225,64.4455099 25.4034967,64.4963709 25.2805828,64.6833907 L24.6114437,65.6979603 Z" id="Fill-23" fill="#FF9C15"></path>
                <path d="M13.8917616,54.5561325 C13.6962649,54.6647417 13.6263311,54.9116291 13.7349404,55.106596 C13.8440795,55.3020927 14.0904371,55.3725563 14.2859338,55.2634172 L15.3471258,54.6726887 C15.5426225,54.5630199 15.6130861,54.3166623 15.503947,54.1211656 C15.3953377,53.9261987 15.1484503,53.8562649 14.9529536,53.9648742 L13.8917616,54.5561325 Z" id="Fill-25" fill="#FF9C15"></path>
                <path d="M14.2751788,24.5136954 C14.0881589,24.3913113 13.8375629,24.442702 13.7141192,24.6291921 C13.5912053,24.8156821 13.6431258,25.0678675 13.8296159,25.1897219 L14.8441854,25.8588609 C15.0312053,25.9817748 15.2818013,25.9303841 15.4057748,25.7433642 C15.5276291,25.5568742 15.4767682,25.3052185 15.2892185,25.1833642 L14.2751788,24.5136954 Z" id="Fill-27" fill="#FF9C15"></path>
                <path d="M25.4170066,13.7940132 C25.3083974,13.5985166 25.0615099,13.528053 24.866543,13.6377219 C24.6715762,13.7463311 24.6011126,13.9926887 24.7091921,14.1881854 L25.3009801,15.2499073 C25.4095894,15.4448742 25.6564768,15.5148079 25.8519735,15.4061987 C26.0469404,15.2970596 26.117404,15.050702 26.0077351,14.8552053 L25.4170066,13.7940132 Z" id="Fill-29" fill="#FF9C15"></path>
                <path d="M55.4304636,14.3336159 C55.5528477,14.146596 55.5019868,13.896 55.3144371,13.7725563 C55.1284768,13.6501722 54.8768212,13.7015629 54.7539073,13.8885828 L54.085298,14.9026225 C53.9623841,15.0901722 54.0137748,15.3407682 54.2013245,15.4636821 C54.3872848,15.586596 54.6389404,15.5357351 54.7618543,15.3481854 L55.4304636,14.3336159 Z" id="Fill-31" fill="#FF9C15"></path>
                <path d="M66.1501457,25.4754967 C66.3456424,25.3674172 66.4155762,25.1205298 66.3074967,24.9255629 C66.1983576,24.7300662 65.952,24.6596026 65.7565033,24.7687417 L64.6953113,25.3594702 C64.4998146,25.4686093 64.4288212,25.7149669 64.5384901,25.9104636 C64.6476291,26.1059603 64.8939868,26.1753642 65.0889536,26.0672848 L66.1501457,25.4754967 Z" id="Fill-33" fill="#FF9C15"></path>
                <path d="M65.7673113,55.3828874 C65.9538013,55.5052715 66.2049272,55.4544106 66.3273113,55.2679205 C66.4512848,55.0809007 66.3993642,54.829245 66.2123444,54.7063311 L65.1977748,54.0377219 C65.0112848,53.9153377 64.7606887,53.9667285 64.6367152,54.1532185 C64.5143311,54.3397086 64.5657219,54.5913642 64.7522119,54.7142781 L65.7673113,55.3828874 Z" id="Fill-35" fill="#FF9C15"></path>
                <path d="M54.6249007,66.1036291 C54.7335099,66.298596 54.9803974,66.3674702 55.175894,66.2604503 C55.3713907,66.1507815 55.4407947,65.903894 55.3327152,65.7083974 L54.7409272,64.6477351 C54.6328477,64.4522384 54.3854305,64.3817748 54.1899338,64.4903841 C53.9949669,64.5995232 53.9245033,64.8458808 54.0336424,65.0408477 L54.6249007,66.1036291 Z" id="Fill-37" fill="#FF9C15"></path>
                <path class="aiguille" d="M39.1406623,39.0149404 C39.6635762,38.7166623 40.3311258,38.8978543 40.6299338,39.4223576 C40.9282119,39.9463311 40.7449007,40.6128212 40.2219868,40.9121589 L20.1255629,52.3712318 C19.6015894,52.6700397 18.9340397,52.4877881 18.6362914,51.9643444 C18.3369536,51.4398411 18.5197351,50.773351 19.0437086,50.4750728 L39.1406623,39.0149404 Z" id="minute" fill="#34586B"></path>
                <path d="M40.9727152,41.0332715 C40.3687417,41.0332715 39.8802649,40.5437351 39.8802649,39.9408212 C39.8802649,39.3384371 40.3687417,38.8499603 40.9727152,38.8499603 L54.9997351,38.8499603 C55.6031788,38.8499603 56.0921854,39.3384371 56.0921854,39.9408212 C56.0921854,40.5437351 55.6031788,41.0332715 54.9997351,41.0332715 L40.9727152,41.0332715 Z" id="heures" fill="#34586B"></path>
                <path d="M42.5501987,39.9560795 C42.5501987,41.3881325 41.3888742,42.5499868 39.9562914,42.5499868 C38.5242384,42.5499868 37.3629139,41.3881325 37.3629139,39.9560795 C37.3629139,38.5240265 38.5242384,37.3621722 39.9562914,37.3621722 C41.3888742,37.3621722 42.5501987,38.5240265 42.5501987,39.9560795" id="center" fill="#FF9C15"></path>
              </g>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <div class="center">
    <?php if( have_rows('horaire_par_services')):?>
    <table class="horaire__table">
      <caption class="hidden">Horaire de visites par section</caption>
      <thead class="horaire__head">
        <tr class="horaire__rows">
          <th class="horaire__th"></th>
          <?php while( have_rows('horaire_par_services')): the_row(); ?>
          <th class="horaire__th"> <?php echo the_sub_field('nom_services');?></th>
        <?php endwhile;?>
        </tr>
      </thead>
      <tbody class="horaire__body">
        <tr class="horaire__row">
          <th class="horaire__day">Lundi</th>
          <?php while(have_rows('horaire_par_services')): the_row();?>
          <?php while( have_rows('horaires_complet')): the_row();?>
          <td class="horaire__data"><?php echo the_sub_field('horaire_lundi');?></td>
        <?php endwhile;?>
        <?php endwhile;?>
        </tr>
        <tr class="horaire__row">
          <th class="horaire__day">Mardi</th>
          <?php while(have_rows('horaire_par_services')): the_row();?>
          <?php while( have_rows('horaires_complet')): the_row();?>
          <td class="horaire__data"><?php echo the_sub_field('horaire_mardi');?></td>
        <?php endwhile;?>
        <?php endwhile;?>
        </tr>
        <tr class="horaire__row">
          <th class="horaire__day">Mercredi</th>
          <?php while(have_rows('horaire_par_services')): the_row();?>
          <?php while( have_rows('horaires_complet')): the_row();?>
          <td class="horaire__data"><?php echo the_sub_field('horaire_mercredi');?></td>
        <?php endwhile;?>
        <?php endwhile;?>
        </tr>
        <tr class="horaire__row">
          <th class="horaire__day">Jeudi</th>
          <?php while(have_rows('horaire_par_services')): the_row();?>
          <?php while( have_rows('horaires_complet')): the_row();?>
          <td class="horaire__data"><?php echo the_sub_field('horaire_jeudi');?></td>
        <?php endwhile;?>
        <?php endwhile;?>
        </tr>
        <tr class="horaire__row">
          <th class="horaire__day">Vendredi</th>
          <?php while(have_rows('horaire_par_services')): the_row();?>
          <?php while( have_rows('horaires_complet')): the_row();?>
          <td class="horaire__data"><?php echo the_sub_field('horaire_vendredi');?></td>
        <?php endwhile;?>
        <?php endwhile;?>
        </tr>
        <tr class="horaire__row">
          <th class="horaire__day">Samedi</th>
          <?php while(have_rows('horaire_par_services')): the_row();?>
          <?php while( have_rows('horaires_complet')): the_row();?>
          <td class="horaire__data"><?php echo the_sub_field('horaire_samedi');?></td>
        <?php endwhile;?>
        <?php endwhile;?>
        </tr>
        <tr class="horaire__row">
          <th class="horaire__day">Dimanche</th>
          <?php while(have_rows('horaire_par_services')): the_row();?>
          <?php while( have_rows('horaires_complet')): the_row();?>
          <td class="horaire__data"><?php echo the_sub_field('horaire_dimanche');?></td>
        <?php endwhile;?>
        <?php endwhile;?>
        </tr>
      </tbody>
    </table>
  <?php endif;?>
</div>
  </section>
<?php get_footer();?>
