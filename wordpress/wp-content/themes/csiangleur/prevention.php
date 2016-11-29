<?php
/*
Template Name: Archives
*/
if(is_page()){
  query_posts([
    'post_type' => 'prevention',
    'paged' => get_query_var('paged')
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
        <ul class="menu__sublist">
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#déplacer';?>" title="Je souhaite me déplacer">Me déplacer</a></li>
          <li class="menu__subelement"><a class="menu__sublink" href="<?php echo the_permalink('61').'#pasdéplacer';?>" title="Je souhaite que le médecin vienne">Domicile</a></li>
        </ul>
      </li>
      <li class="menu__element"><a class="menu__link active" href="<?php echo the_permalink('65');?>" title="Découvrez les activités que nous proposons">Prévention</a></li>
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
  <section class="archiveHead">
    <h2 class="archiveHead__title">Fiche de prévention</h2>
    <p class="archiveHead__text">Retrouver ici l'ensemble des fiches préventives structurés de notre maison médicales.</p>
    <svg class="archiveHead__svg" width="332" height="161" viewBox="0 0 332 161" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <path id="a" d="M66.834.92H.874v22.14h65.96V.92z"/>
        <path id="c" d="M0 .365v12.407h331.965V.365H0z"/>
      </defs>
      <g fill="none" fill-rule="evenodd">
        <g transform="translate(14 -.92)">
          <mask id="b" fill="#fff">
            <use xlink:href="#a"/>
          </mask>
          <path d="M66.834 23.06c0-12.23-9.913-22.14-22.14-22.14h-21.68C10.788.92.875 10.83.875 23.06h65.96z" fill="#DEDEDE" mask="url(#b)"/>
        </g>
        <path d="M257.744 125.044c1.686.705 2.486 2.643 1.78 4.327-.702 1.694-2.64 2.488-4.33 1.787L24.422 34.903c-1.686-.708-2.486-2.642-1.78-4.33.703-1.688 2.642-2.482 4.33-1.78l230.774 96.25z" fill="#DEDEDE"/>
        <path d="M307.54 34.903c1.688-.708 2.487-2.643 1.784-4.33-.705-1.69-2.64-2.484-4.33-1.783L74.22 125.044c-1.687.705-2.485 2.642-1.782 4.327.704 1.693 2.643 2.488 4.33 1.784l230.773-96.25z" fill="#DEDEDE"/>
        <g transform="translate(0 21.08)">
          <mask id="d" fill="#fff">
            <use xlink:href="#c"/>
          </mask>
          <path d="M331.965 6.568c0 3.426-2.775 6.204-6.203 6.204H6.202C2.776 12.772 0 9.994 0 6.568 0 3.142 2.776.365 6.202.365h319.56c3.428 0 6.203 2.777 6.203 6.203" fill="#34586B" mask="url(#d)"/>
        </g>
        <path d="M80.834 144.086c0 2.312-1.87 4.18-4.18 4.18-2.31 0-4.182-1.868-4.182-4.18V129.23c0-2.31 1.87-4.186 4.18-4.186 2.31 0 4.182 1.875 4.182 4.185v14.856z" fill="#DEDEDE"/>
        <path d="M259.494 144.086c0 2.312-1.875 4.18-4.184 4.18-2.31 0-4.18-1.868-4.18-4.18V129.23c0-2.31 1.87-4.186 4.18-4.186 2.31 0 4.184 1.875 4.184 4.185v14.856z" fill="#DEDEDE"/>
        <path d="M88.325 148.267c0 6.52-5.29 11.814-11.812 11.814-6.525 0-11.812-5.292-11.812-11.813 0-6.523 5.288-11.81 11.813-11.81 6.52 0 11.812 5.287 11.812 11.81" fill="#34586B"/>
        <path d="M267.258 148.267c0 6.52-5.293 11.814-11.814 11.814-6.526 0-11.81-5.292-11.81-11.813 0-6.523 5.284-11.81 11.81-11.81 6.52 0 11.814 5.287 11.814 11.81" fill="#34586B"/>
      </g>
    </svg>
  </section>
  <section class="archive__list">
    <h2 class="hidden">Liste des fiche de prévention</h2>
    <div class="archive__container">
      <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;?>
      <?php $args = array( 'post_type' => 'prevention', 'posts_per_page' => 6,'paged' => $paged );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();?>

      <div class="archive__fiche">
        <?php the_post_thumbnail('thumb-cards');?>
        <article class="fiche__content">
          <span class="fiche__date"><?php the_time(get_option('date_format'));?></span>
          <h3 class="fiche__title"><?php echo the_title();?></h3>
          <?php $summary = get_field('introduction');?>
          <div class="fiche__text"><?php echo substr($summary, 0,116).'...'; ?></div>
          <a class="fiche__button" href="<?php echo the_permalink();?>" title="Continuer la lecture vers la fiche complète">Vers la fiche pratique</a>
        </article>
      </div>
    <?php endwhile;?>
    </div>
    <div class="pagination">
      <?php wp_pagenavi( array( 'query' => $loop ) ); ?>
    </div>
  </section>
<?php get_footer();?>
