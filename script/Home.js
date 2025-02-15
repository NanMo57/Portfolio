import Typed from 'https://esm.sh/typed.js@2.0.12';
import Swiper from 'https://esm.sh/swiper@11/swiper-bundle.min.js';


var typed = new Typed('.writingTextIntro', {
  strings: [
    "I build dynamic and static websites for various purposes.",
    "I build responsive website for all different screen sizes.",
    "I build websites combining front-end and back-end expertise.",
    "I build websites using modern languages and design tools."
  ],
  typeSpeed: 50,
  loop:true,
  startDelay: 0,
});



var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3, 
  slidesPerGroup: 2, 
  spaceBetween: 20, 
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


