$(".mvSlideArea").slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  prevArrow: '<div class="prev"><span>PREV</span></div>',
  nextArrow: '<div class="next"><span>NEXT</span></div>'
});

$(".product-slider").slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 800,
  slidesToShow: 4,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  prevArrow: '<div class="prev"><span></span></div>',
  nextArrow: '<div class="next"><span></span></div>',
  responsive: [{
    breakpoint: 960,
    settings: {
      slidesToShow: 1,
    }
  }]
});


// stop video
$('.rando__movie .btn-close').click(function(){
    console.log(2);
    $('.yvideo').attr('src', $('.yvideo').attr('src'));
})