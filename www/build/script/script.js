( function (){
  "use strict";

  window.addEventListener("load",function(){
    document.querySelector( ".menu__link--search" ).addEventListener("click",function(){
    document.querySelector( ".menu__search" ).classList.toggle('menu__search--open');

    });
    var body = document.getElementsByTagName("body")[0];
    body.classList.remove("no-js");
  });



} )();
