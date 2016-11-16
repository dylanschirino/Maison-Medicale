( function (){
  "use strict";


  // Quand le javascript est désactiver
  var body = document.getElementsByTagName("body")[0],
  searchLink = document.querySelector( ".menu__link--search" ),
  searchBox = document.querySelector( ".menu__search" ),
  burger = document.querySelector("#header__burger"),
  sitecache = document.querySelector("#site-cache"),
  OpenInMenu = document.querySelectorAll(".menu__element--down"),
  subLink = document.querySelectorAll(".menu__sublist");
  console.log(subLink);

  body.classList.remove("no-js");

    if ( window.innerWidth > 1097) {
      OpenInMenu.forEach(function(element) {
        element.addEventListener("click",function(e){
          e.preventDefault();
          e.target.nextElementSibling.classList.toggle('menu__sublist--open');
        });
      });
    }

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
