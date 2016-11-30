( function (){
  "use strict";

  // Variable

  var body = document.getElementsByTagName("body")[0],
  searchLink = document.querySelector( ".menu__link--search" ),
  searchBox = document.querySelector( ".menu__search" ),
  burger = document.querySelector("#header__burger"),
  sitecache = document.querySelector("#site-cache"),
  OpenInMenu = document.querySelectorAll(".menu__link--down"),
  subLink = document.querySelectorAll(".menu__sublist"),
  question = document.querySelectorAll(".discover__question");

  // Quand le javascript est désactiver
  body.classList.remove("no-js");

  // Menu dropdown responsive
    if ( window.innerWidth < 1097) {
      OpenInMenu.forEach(function(element) {
        element.addEventListener("click",function(e){
          e.preventDefault();
          e.target.nextElementSibling.classList.toggle('menu__sublist--open');
        });
      });
    }
    OpenInMenu.forEach(function(element) {
      element.addEventListener("focusin",function(e){
        e.target.nextElementSibling.classList.toggle('menu__sublist--open');
      });
    });




    //discover content appear/disapear while clicking on questions
    question.forEach(function(lien) {
      lien.addEventListener("click", function(events){
        events.preventDefault();
        events.target.classList.toggle("discover__question--clicked");
        events.target.nextElementSibling.classList.toggle("discover__answer--open");
      });
    });


  // Barre de recherche activé au click
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
