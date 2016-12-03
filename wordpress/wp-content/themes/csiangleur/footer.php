<footer class="footer">
  <section class="footer__container">
    <h2 class="hidden">Information complémentaire</h2>
    <section class="footer__information">
      <h3 class="footer__title">Information</h3>
      <ul class="cars__list--footer" itemscope itemtype="http://schema.org/Organization">
        <li class="cards__element--footer">
          <a class="cards__link--footer" href="https://www.google.be/maps/place/Rue+Vaudr%C3%A9e+48,+4031+Li%C3%A8ge/@50.6127477,5.5951963,17z/data=!3m1!4b1!4m5!3m4!1s0x47c0f746b29cb281:0x69612a0f1477f0cc!8m2!3d50.6127443!4d5.597385?hl=fr" title="Voir l'adresse sur google maps">
          <span class="cards__label cards__label--adress">Adresse : </span>
          <span class="cards__info" itemprop="address"><?php the_field('adress', 'option'); ?></span>
          </a>
        </li>
        <li class="cards__element--footer">
          <a class="cards__link--footer" href="tel:0494344737" title="Téléphoner à la maison médicale">
            <span class="cards__label cards__label--tel">Téléphone : </span>
            <span class="cards__info cards__info--tel" itemprop="telephone"><?php (the_field('telephone', 'option')); ?></span>
          </a>
        </li>
        <li class="cards__element--footer">
          <a class="cards__link--footer" href="fax:043434737" title="Nous envoyer un fax!">
            <span class="cards__label cards__label--fax">Fax : </span>
            <span class="cards__info" itemprop="faxNumber"><?php the_field('fax', 'option');?></span>
          </a>
        </li>
        <li class="cards__element--footer">
          <a class="cards__link--footer" href="mailto:<?php the_field('email', 'option');?>" title="Nous envoyer un email">
          <span class="cards__label cards__label--email">Email : </span>
          <span class="cards__info" itemprop="email"><?php the_field('email', 'option');?></span>
          </a>
        </li>
      </ul>
    </section>
    <section class="footer__horaire">
      <h3 class="footer__title footer__title--center">Horaires</h3>
      <?php if( have_rows('horaire','option') ):?>
      <ul class="cars__list--footer">
        <?php while( have_rows('horaire', 'option') ): the_row(); ?>
        <li class="table__element--footer">
          <?php $jours = get_sub_field('jours');?>
          <span class="table__day--footer"><?php echo substr($jours,0,3);?></span>
          <span class="table__info--footer"><?php the_sub_field('heure');?></span>
        </li>
      <?php endwhile;?>
      </ul>
    <?php endif;?>
    </section>
    <section class="footer__linkSection">
      <h3 class="footer__title">Liens Utiles</h3>
      <?php if( have_rows('ressource_utiles','option') ):?>
      <ul class="linkSection__list">
        <?php while( have_rows('ressource_utiles', 'option') ): the_row(); ?>
        <li class="linkSection__element">
          <a class="linkSection__link" href="<?php the_sub_field('liens');?>" title="Vers le site de l'inami"><?php the_sub_field('nom_du_site');?>
          </a>
        </li>
      <?php endwhile;?>
      </ul>
    <?php endif;?>
    </section>
  </section>
  <div class="footer__newsletter">
    <div class="newsletter__form">
      <p class="newsletter__title newsletter__title--footer">Je m'inscris à la newsletter</p>
      <?php echo do_shortcode('[mc4wp_form id="22"]');?>
    </div>
  </div>
  <div class="designby"><a class="designby__ds" href="http://schirino.be" title="Aller vers le site internet du créateur de ce site">Designed by DS</a></div>
</footer>
</main>
</div>
<div class="site-cache" id="site-cache"></div>
</div>
</div>
<script src="<?php echo get_template_directory_uri().'/script/script.js';?>"></script>
<?php if (is_page(5)):?>
<script src="<?php echo get_template_directory_uri().'/script/script-tab.js';?>"></script>
<?php endif;?>
<?php if (is_page(59)):?>
<script src="<?php echo get_template_directory_uri().'/script/script-tab-subscribe.js';?>"></script>
<?php endif;?>
<?php if(is_page(61)):?>
<script src="<?php echo get_template_directory_uri().'/script/script-tab-services.js';?>"></script>
<?php endif;?>
 <?php wp_footer(); ?>
</body>
</html>
