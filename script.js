document.addEventListener("DOMContentLoaded", function() { 

    var burger = document.querySelector('.burger');
    var header = document.querySelector('#header-page');
    var menu = document.querySelector('.content-menu'); // accueil
    var displayMenu = document.querySelector('.display-menu');
    var reseaux = document.querySelectorAll('.reseaux'); // footer reseaux sociaux 
    var copyrights = document.querySelectorAll('.copyright'); // footer copyright
  
  function myFunction(x) {

    burger.addEventListener('click', function() { 
        
    if (x.matches) { // If media query matches with smartphone
       
            burger.classList.toggle("is-active");
              
             if(burger.classList.contains('is-active')) {
              header.style.height = "180vh";
              menu.style.display = "block";
              // templateMenu.style.display = "none";
              displayMenu.style.display = "none";      
              reseaux.forEach(reseau => {
                  reseau.style.display = "none";
              });
      
              copyrights.forEach(copyright => {
                  copyright.style.display = "block";
              });
             }
      
             else {
              header.style.height = "25vh";
              menu.style.display = "none";
              // templateMenu.style.display = "block";
              displayMenu.style.display = "block";
              
              reseaux.forEach(reseau => {
                  reseau.style.display = "block";
              });
              
              copyrights.forEach(copyright => {
                  copyright.style.display = "none";
              });
             }
      
    } else if (! x.matches) { // au dessus de smartphone
        burger.classList.toggle("is-active");
              
        if(burger.classList.contains('is-active')) {
         header.style.height = "83vh";
         menu.style.display = "block";
         // templateMenu.style.display = "none";
         displayMenu.style.display = "none";      
         reseaux.forEach(reseau => {
             reseau.style.display = "none";
         });
 
         copyrights.forEach(copyright => {
             copyright.style.display = "block";
         });
        }
 
        else { 
         header.style.height = "25vh";
         menu.style.display = "none";
         // templateMenu.style.display = "block";
         displayMenu.style.display = "block";
         
         reseaux.forEach(reseau => {
             reseau.style.display = "block";
         });
         
         copyrights.forEach(copyright => {
             copyright.style.display = "none";
         });
        }
    }

    });

  }
  
  var x = window.matchMedia("(max-width: 767px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes 

});
