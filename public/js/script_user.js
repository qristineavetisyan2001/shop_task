const swiper = new Swiper('.sample-slider', {
    loop: false,                         //loop
    slidesPerView: 2,                   //number of slides to show
    centeredSlides : false,              //put acctive slide center
    spaceBetween: 10,                   //space between slides
    autoplay: {                         //autoplay
        delay: 1000000,
    },
    pagination: {                       //pagination（dots）
        el: '.swiper-pagination',
    },
    navigation: {                       //navigation（arrows）
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
})


function aaa(){
    alert();
}
