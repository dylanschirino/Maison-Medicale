( function (){
  "use strict";


  // Quand le javascript est désactiver
  var body = document.getElementsByTagName("body")[0],
      searchLink = document.querySelector( ".menu__link--search" ),
      searchBox = document.querySelector( ".menu__search" ),
      burger = document.querySelector("#header__burger"),
      sitecache = document.querySelector("#site-cache");

  body.classList.remove("no-js");

  window.addEventListener("load",function(){

    // Affichage de la barre de recherche
    searchLink.addEventListener("click",function(){
    searchBox.classList.toggle('menu__search--open');

    });

    // Menu burger responsive
    burger.addEventListener("click",function(e){
      e.preventDefault();
      body.classList.toggle('with--sidebar');

    });

    sitecache.addEventListener("click", function(e){
      body.classList.remove('with--sidebar')
    })

  });



} )();
