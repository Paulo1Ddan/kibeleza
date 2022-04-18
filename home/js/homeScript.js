$(document).ready(function () {
    $('#banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
        pauseOnFocus: false,
    });
});
$(document).ready(function () {
    $('#galeria').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        speed: 3000,
        arrows: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        swipe: true,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                speed: 3000,
                arrows: false,
                pauseOnHover: false,
                pauseOnFocus: false,
                swipe: true,
              }
            },
            {
              breakpoint: 1000,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                speed: 3000,
                arrows: false,
                pauseOnHover: false,
                pauseOnFocus: false,
                swipe: true,
              }
            },
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                speed: 3000,
                arrows: false,
                pauseOnHover: false,
                pauseOnFocus: false,
                swipe: true,
              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                speed: 3000,
                arrows: false,
                pauseOnHover: false,
                pauseOnFocus: false,
                swipe: true,
              }
            },
        ]
    });
});
$(document).ready(function(){
  $('.itemMenu').click(function(){
    $('.itemMenu').removeClass('ativa')
    $(this).addClass("ativa")
  })
})