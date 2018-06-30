let aboutMeDiv = document.querySelectorAll(".about-me");
let skillIcons = document.querySelectorAll(".skill-icons");
let restaurantImg = document.querySelectorAll("#restaurantImg")
let landingImg = document.querySelectorAll("#landingImg");

let f = function() {
    let eventHandler = function(event) {
        if ( window.pageYOffset > 150 && window.pageYOffset < 230 || window.pageYOffset === 546) {
            aboutMeDiv[0].classList.remove('hidden');
            aboutMeDiv[0].classList.add('animated');
            aboutMeDiv[0].classList.add('bounceInUp');
        }

        if ( window.pageYOffset > 650 && window.pageYOffset < 850 ) {
            skillIcons[0].classList.remove('hidden');
            skillIcons[0].classList.add('animated');
            skillIcons[0].classList.add('jackInTheBox');
        }

        if ( window.pageYOffset > 940 && window.pageYOffset < 1000 || window.pageYOffset === 1249) {
            restaurantImg[0].classList.remove('hidden');
            restaurantImg[0].classList.add('animated');
            restaurantImg[0].classList.add('slideInLeft')
        }
        if ( window.pageYOffset > 1300 && window.pageYOffset < 1500) {
            landingImg[0].classList.remove('hidden');
            landingImg[0].classList.add('animated');
            landingImg[0].classList.add('slideInUp')
        }
    }; 
    
    window.addEventListener('scroll', eventHandler, false);
};


document.addEventListener('DOMContentLoaded',f,false);