<footer class="footer">
  <section class="footer__container">
    <h2 class="hidden">Information complémentaire</h2>
    <section class="footer__information">
      <h3 class="footer__title">Information</h3>
      <ul class="cars__list--footer">
        <li class="cards__element--footer">
          <a class="cards__link--footer" href="googlemaps" title="Voir l'adresse sur google maps">
          <span class="cards__label cards__label--adress">Adresse : </span>
          <span class="cards__info"><?php the_field('adress', 'option'); ?></span>
          </a>
        </li>
        <li class="cards__element--footer">
          <a class="cards__link--footer" href="tel:0494344737" title="Téléphoner à la maison médicale">
            <span class="cards__label cards__label--tel">Téléphone : </span>
            <span class="cards__info cards__info--tel"><?php (the_field('telephone', 'option')); ?></span>
          </a>
        </li>
        <li class="cards__element--footer">
          <a class="cards__link--footer" href="fax:043434737" title="Nous envoyer un fax!">
            <span class="cards__label cards__label--fax">Fax : </span>
            <span class="cards__info"><?php the_field('fax', 'option');?></span>
          </a>
        </li>
        <li class="cards__element--footer">
          <a class="cards__link--footer" href="mailto:contact@csiangleur.be" title="Nous envoyer un email">
          <span class="cards__label cards__label--email">Email : </span>
          <span class="cards__info"><?php the_field('email', 'option');?></span>
          </a>
        </li>
      </ul>
    </section>
    <section class="footer__horaire">
      <h3 class="footer__title footer__title--center">Horaires</h3>
      <ul class="cars__list--footer">
        <li class="table__element--footer"><span class="table__day--footer">Lun </span><span class="table__info--footer">8.00 - 20.00 / 9.00 - 19h (férié)</span></li>
        <li class="table__element--footer"><span class="table__day--footer">Mar </span><span class="table__info--footer">8.00 - 20.00 / 9.00 - 19h (férié)</span></li>
        <li class="table__element--footer"><span class="table__day--footer">Mer </span><span class="table__info--footer">8.00 - 20.00 / 9.00 - 19h (férié)</span></li>
        <li class="table__element--footer"><span class="table__day--footer">Jeu </span><span class="table__info--footer">8.00 - 20.00 / 9.00 - 19h (férié)</span></li>
        <li class="table__element--footer"><span class="table__day--footer">Ven </span><span class="table__info--footer">8.00 - 20.00 / 9.00 - 19h (férié)</span></li>
        <li class="table__element--footer"><span class="table__day--footer">Sam </span><span class="table__info--footer">8.00 - 20.00 / 9.00 - 19h (férié)</span></li>
        <li class="table__element--footer"><span class="table__day--footer">Dim </span><span class="table__info--footer">8.00 - 20.00 / 9.00 - 19h (férié)</span></li>
      </ul>
    </section>
    <section class="footer__linkSection">
      <h3 class="footer__title">Liens Utiles</h3>
      <ul class="linkSection__list">
        <li class="linkSection__element"><a class="linkSection__link" href="http://inami.be" title="Vers le site de l'inami">Inami</a></li>
        <li class="linkSection__element"><a class="linkSection__link" href="http://maisonmedicale.org" title="Vers le site officiel des maison médicales">Maisonmédicale</a></li>
        <li class="linkSection__element"><a class="linkSection__link" href="http://glamo.be" title="Vers la page de l'inami">Glamo</a></li>
        <li class="linkSection__element"><a class="linkSection__link" href="http://chu.be" title="Vers le site du CHU">Chu</a></li>
      </ul>
    </section>
  </section>
  <div class="footer__newsletter">
    <div class="newsletter__form">
      <p class="newsletter__title newsletter__title--footer">Je m'inscris à la newsletter</p>
      <form>
        <input class="newsletter__input newsletter__input--footer" type="mail" name="newsletter" value="" id="newsletter" placeholder="Votre adresse email">
        <input class="newsletter__submit newsletter__submit--footer" type="submit" value="S'inscrire">
      </form>
    </div>
  </div>
  <div class="designby"><a class="designby__ds" href="http://schirino.be" title="Aller vers le site internet du créateur de ce site">Designed by DS</a></div>
</footer>
</main>
</div>
<div class="site-cache" id="site-cache"></div>
</div>
</div>
</body>
<script src="<?php echo get_template_directory_uri().'/script/script.js';?>"></script>
<script src="<?php echo get_template_directory_uri().'/script/script-tab.js';?>"></script>
</html>
