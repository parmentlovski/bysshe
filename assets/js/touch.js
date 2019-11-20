document.addEventListener("DOMContentLoaded", function () {
    news = document.querySelector('#touch-news');
    tour = document.querySelector('#touch-tour');

    news.addEventListener('touchstart', function(){
        window.location = "news";
    });

    tour.addEventListener('touchstart', function(){
        window.location = "tour";
    }); 

});