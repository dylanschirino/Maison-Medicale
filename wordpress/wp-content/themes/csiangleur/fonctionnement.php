<?php
/*
Template Name: Fonctionnement
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
      <li class="menu__element menu__element--down"><a class="menu__link active" href="<?php echo the_permalink('59');?>" title="Découvrir comment nous fonctionnons">Fonctionnement</a>
      </li>
      <li class="menu__element menu__element--down"><a class="menu__link menu__link--down" href="<?php echo the_permalink('61');?>" title="En savoir plus sur le service de garde">Service de garde</a>
        <ul class="menu__sublist">
          <li class="menu__subelement menu__sublist2"><a class="menu__sublink" href="<?php echo the_permalink('61').'#deplacer';?>" title="Je souhaite me déplacer">Me déplacer</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#pasdeplacer';?>" title="Je souhaite que le médecin vienne">Domicile</a></li>
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
  <section class="headContent headContent--fonction">
    <div class="headContent__container">
      <?php if( get_field('photo_header')):
   $image = get_field('photo_header');
   $size='thumb-header';
   ?>
      <figure class="headContent__figure">
        <?php echo wp_get_attachment_image($image['id'],$size);?>
      </figure>
    <?php endif;?>
      <div class="headContent__texte">
        <h2 class="headContent__slogan headContent__slogan--house"><?php echo the_title();?></h2>
        <div class="headContent__text"><?php echo the_field('texte_daccroche');?></div>
      </div>
    </div>
  </section>

  <section class="subscription">
    <div class="center">
    <svg class="subscription__svg" width="220px" height="159px" viewBox="0 0 220 159" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <polygon id="path-1" points="0.0417 31 27.2657 31 27.2657 0.6045 0.0417 0.6045 0.0417 31"></polygon>
      </defs>
      <g id="Fonctionnement" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-136.000000, -595.000000)" id="Question">
          <g transform="translate(0.000000, 550.000000)">
            <g id="Valise" transform="translate(136.000000, 45.000000)">
              <path d="M135.7667,31.8845 C135.7667,35.0725 133.1807,37.6575 129.9947,37.6575 L89.2637,37.6575 C86.0757,37.6575 83.4907,35.0725 83.4907,31.8845 L83.4907,14.3445 C83.4907,11.1575 86.0757,8.5725 89.2637,8.5725 L129.9947,8.5725 C133.1807,8.5725 135.7667,11.1575 135.7667,14.3445 L135.7667,31.8845 Z M137.8637,0.0005 L81.3947,0.0005 C76.9737,0.0005 73.3907,3.5845 73.3907,8.0035 L73.3907,31.1085 C73.3907,35.5285 76.9737,39.1125 81.3947,39.1125 L137.8637,39.1125 C142.2837,39.1125 145.8677,35.5285 145.8677,31.1085 L145.8677,8.0035 C145.8677,3.5845 142.2837,0.0005 137.8637,0.0005 L137.8637,0.0005 Z" id="Fill-1" fill="#BBFEED"></path>
              <path d="M46.8546,18.6457 C46.8546,20.8967 45.0296,22.7207 42.7786,22.7207 L23.1806,22.7207 C20.9296,22.7207 19.1046,20.8967 19.1046,18.6457 C19.1046,16.3947 20.9296,14.5707 23.1806,14.5707 L42.7786,14.5707 C45.0296,14.5707 46.8546,16.3947 46.8546,18.6457" id="Fill-3" fill="#BBFEED"></path>
              <path d="M200.1592,18.6457 C200.1592,20.8967 198.3352,22.7207 196.0832,22.7207 L176.4862,22.7207 C174.2352,22.7207 172.4112,20.8967 172.4112,18.6457 C172.4112,16.3947 174.2352,14.5707 176.4862,14.5707 L196.0832,14.5707 C198.3352,14.5707 200.1592,16.3947 200.1592,18.6457" id="Fill-5" fill="#BBFEED"></path>
              <path d="M217.9844,128.406 C218.4134,128.406 218.8404,128.417 219.2654,128.439 L219.2654,29.306 C219.2654,23.922 214.9004,19.556 209.5164,19.556 L9.7494,19.556 C4.3644,19.556 0.0004,23.922 0.0004,29.306 L0.0004,128.439 C0.4234,128.417 0.8504,128.406 1.2814,128.406 C15.6084,128.406 27.2224,140.021 27.2224,154.348 C27.2224,155.867 27.0854,157.354 26.8354,158.801 L192.4304,158.801 C192.1804,157.354 192.0424,155.867 192.0424,154.348 C192.0424,140.021 203.6564,128.406 217.9844,128.406" id="Fill-7" fill="#EEEEEE"></path>
              <path d="M1.2813,128.406 C0.8503,128.406 0.4243,128.417 0.0003,128.439 L0.0003,149.052 C0.0003,154.435 4.3643,158.801 9.7493,158.801 L26.8353,158.801 C27.0853,157.354 27.2223,155.867 27.2223,154.348 C27.2223,140.021 15.6083,128.406 1.2813,128.406" id="Fill-9" fill="#59EBCF"></path>
              <g id="Group-13" transform="translate(192.000000, 127.801000)">
                <mask id="mask-2" fill="white">
                  <use xlink:href="#path-1"></use>
                </mask>
                <g id="Clip-12"></g>
                <path d="M27.2657,21.2505 L27.2657,0.6375 C26.8407,0.6165 26.4127,0.6045 25.9847,0.6045 C11.6567,0.6045 0.0417,12.2195 0.0417,26.5465 C0.0417,28.0665 0.1807,29.5525 0.4307,31.0005 L17.5167,31.0005 C22.9007,31.0005 27.2657,26.6345 27.2657,21.2505" id="Fill-11" fill="#59EBCF" mask="url(#mask-2)"></path>
              </g>
              <path d="M22.9835,120.634 C22.9835,122.174 21.7365,123.422 20.1965,123.422 C18.6575,123.422 17.4095,122.174 17.4095,120.634 L17.4095,34.564 C17.4095,33.025 18.6575,31.777 20.1965,31.777 C21.7365,31.777 22.9835,33.025 22.9835,34.564 L22.9835,120.634 Z" id="Fill-14" fill="#DEDEDE"></path>
              <path d="M45.3438,145.7424 C45.3438,147.2824 44.0958,148.5304 42.5558,148.5304 C41.0178,148.5304 39.7688,147.2824 39.7688,145.7424 L39.7688,34.5644 C39.7688,33.0254 41.0178,31.7774 42.5558,31.7774 C44.0958,31.7774 45.3438,33.0254 45.3438,34.5644 L45.3438,145.7424 Z" id="Fill-16" fill="#DEDEDE"></path>
              <path d="M67.6964,145.7424 C67.6964,147.2824 66.4484,148.5304 64.9144,148.5304 C63.3774,148.5304 62.1294,147.2824 62.1294,145.7424 L62.1294,34.5644 C62.1294,33.0254 63.3774,31.7774 64.9144,31.7774 C66.4484,31.7774 67.6964,33.0254 67.6964,34.5644 L67.6964,145.7424 Z" id="Fill-18" fill="#DEDEDE"></path>
              <path d="M90.0557,145.7424 C90.0557,147.2824 88.8077,148.5304 87.2687,148.5304 C85.7297,148.5304 84.4817,147.2824 84.4817,145.7424 L84.4817,34.5644 C84.4817,33.0254 85.7297,31.7774 87.2687,31.7774 C88.8077,31.7774 90.0557,33.0254 90.0557,34.5644 L90.0557,145.7424 Z" id="Fill-20" fill="#DEDEDE"></path>
              <path d="M112.4161,145.7424 C112.4161,147.2824 111.1671,148.5304 109.6291,148.5304 C108.0901,148.5304 106.8411,147.2824 106.8411,145.7424 L106.8411,34.5644 C106.8411,33.0254 108.0901,31.7774 109.6291,31.7774 C111.1671,31.7774 112.4161,33.0254 112.4161,34.5644 L112.4161,145.7424 Z" id="Fill-22" fill="#DEDEDE"></path>
              <path d="M134.7764,145.7424 C134.7764,147.2824 133.5284,148.5304 131.9884,148.5304 C130.4504,148.5304 129.2014,147.2824 129.2014,145.7424 L129.2014,34.5644 C129.2014,33.0254 130.4504,31.7774 131.9884,31.7774 C133.5284,31.7774 134.7764,33.0254 134.7764,34.5644 L134.7764,145.7424 Z" id="Fill-24" fill="#DEDEDE"></path>
              <path d="M157.1358,145.7424 C157.1358,147.2824 155.8878,148.5304 154.3478,148.5304 C152.8098,148.5304 151.5618,147.2824 151.5618,145.7424 L151.5618,34.5644 C151.5618,33.0254 152.8098,31.7774 154.3478,31.7774 C155.8878,31.7774 157.1358,33.0254 157.1358,34.5644 L157.1358,145.7424 Z" id="Fill-26" fill="#DEDEDE"></path>
              <path d="M179.4952,145.7424 C179.4952,147.2824 178.2472,148.5304 176.7082,148.5304 C175.1692,148.5304 173.9212,147.2824 173.9212,145.7424 L173.9212,34.5644 C173.9212,33.0254 175.1692,31.7774 176.7082,31.7774 C178.2472,31.7774 179.4952,33.0254 179.4952,34.5644 L179.4952,145.7424 Z" id="Fill-28" fill="#DEDEDE"></path>
              <path d="M201.8546,120.634 C201.8546,122.174 200.6066,123.422 199.0676,123.422 C197.5286,123.422 196.2806,122.174 196.2806,120.634 L196.2806,34.564 C196.2806,33.025 197.5286,31.777 199.0676,31.777 C200.6066,31.777 201.8546,33.025 201.8546,34.564 L201.8546,120.634 Z" id="Fill-30" fill="#DEDEDE"></path>
              <path class="heart" d="M157.1993,74.6418 C157.1993,60.4488 145.6963,48.9448 131.5073,48.9448 C122.2403,48.9448 114.1493,53.8658 109.6263,61.2208 C105.1083,53.8658 97.0123,48.9448 87.7493,48.9448 C73.5563,48.9448 62.0643,60.4488 62.0643,74.6418 C62.0643,82.3638 65.4843,89.2758 70.8773,93.9808 L107.2813,130.3908 C107.9053,131.0128 108.7483,131.3618 109.6263,131.3618 C110.5093,131.3618 111.3523,131.0128 111.9753,130.3908 L148.3793,93.9808 C153.7783,89.2758 157.1993,82.3638 157.1993,74.6418" id="Fill-32" fill="#54D2CB"></path>
              <path d="M124.8516,83.6125 L114.7026,83.6125 L114.7026,73.4635 C114.7026,72.6615 114.0496,72.0145 113.2546,72.0145 L106.0026,72.0145 C105.2036,72.0145 104.5516,72.6615 104.5516,73.4635 L104.5516,83.6125 L94.4056,83.6125 C93.6026,83.6125 92.9556,84.2595 92.9556,85.0645 L92.9556,92.3085 C92.9556,93.1055 93.6026,93.7545 94.4056,93.7545 L104.5516,93.7545 L104.5516,103.9045 C104.5516,104.7095 105.2036,105.3585 106.0026,105.3585 L113.2546,105.3585 C114.0496,105.3585 114.7026,104.7095 114.7026,103.9045 L114.7026,93.7545 L124.8516,93.7545 C125.6536,93.7545 126.3016,93.1055 126.3016,92.3085 L126.3016,85.0645 C126.3016,84.2595 125.6536,83.6125 124.8516,83.6125" id="Fill-34" fill="#FAFAFA"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <h2 class="subscription__title">Comment puis-je m’inscrire ou me désinscrire ?</h2>
  </div>
  </section>

  <div class="subscription__content">
    <aside class="subscription__aside">
      <h2 class="hidden">Menu de choix entre inscription et désinscription</h2>
      <div class="aside__container aside__container--active">
        <a class="aside__button aside__button--subscribe" href="#" data-tab-target="subscribe" title="Voir le contenu relatif a l'inscription">Je veux m'inscrire</a>
      </div>
      <div class="aside__container">
        <a class="aside__button aside__button--unsubscribe" href="#" data-tab-target="unsubscribe" title="Voir le contenu relatif a la désinscription">Je veux me désinscrire</a>
      </div>
    </aside>

    <div class="subscription__articleContainer">
      <section class="subscription__article subscription__active" id="subscribe">
        <h2 class="article__title">Je veux m’inscrire à la maison médicale</h2>
          <?php echo the_field('inscription');?>
      </section>
      <section class="subscription__article" id="unsubscribe">
        <h2 class="article__title">Je veux me désinscrire à la maison médicale</h2>
        <?php echo the_field('désinscription');?>
      </section>
    </div>
  </div>
<?php get_footer();?>
