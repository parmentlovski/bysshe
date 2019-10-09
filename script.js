document.addEventListener("DOMContentLoaded", function() { 
    var burger = document.querySelector('.burger');
    var header = document.querySelector('#header-page');
    var menu = document.querySelector('.content-menu');
    var accueil = document.querySelector('#accueil');
    var reseaux = document.querySelectorAll('.reseaux');
    var copyrights = document.querySelectorAll('.copyright');
    var footer = document.querySelector('footer');

    burger.addEventListener('click', function() {
        
      burger.classList.toggle("is-active");
        
       if(burger.classList.contains('is-active')) {
        header.style.height = "89vh";
        menu.style.display = "block";
        accueil.style.display = "none";      

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
        accueil.style.display = "block";
        
        reseaux.forEach(reseau => {
            reseau.style.display = "block";
        });
        
        copyrights.forEach(copyright => {
            copyright.style.display = "none";
        });
       }

    });
  });
