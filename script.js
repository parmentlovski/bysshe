document.addEventListener("DOMContentLoaded", function() { 
    var burger = document.querySelector('.burger');
    var header = document.querySelector('#header-page');
    var menu = document.querySelector('.content-menu');
    var accueil = document.querySelector('#accueil');
    var tests = document.querySelectorAll('.test');
    var cools = document.querySelectorAll('.test2');
    var footer = document.querySelector('footer');

    burger.addEventListener('click', function() {
        
      burger.classList.toggle("is-active");
        
       if(burger.classList.contains('is-active')) {
        header.style.height = "90vh";
        header.style.overflow = "hidden";
        menu.style.display = "block";
        accueil.style.display = "none";

        tests.forEach(test => {
            test.style.display = "none";
        });

        cools.forEach(cool => {
            cool.style.display = "block";
        });
       }

       else {
        header.style.height = "25vh";
        header.style.overflow = "visible";
        menu.style.display = "none";
        accueil.style.display = "block";
    
        tests.forEach(test => {
            test.style.display = "block";
        });
    
        cools.forEach(cool => {
            cool.style.display = "none";
        });
       }

    });
  });
