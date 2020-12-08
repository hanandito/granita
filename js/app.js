    /*Animation: Moving Ornament on Scroll*/
    $(document).ready(function(){
$('.bubble-origin').click(function() {
  $(".title-content").addClass("active");
   $(".content-detail").addClass("active");
   $(".bubble-origin").addClass("active");
   $(".close-bubble").addClass("active");
})
$('.close-bubble').click(function() {
  $(".title-content").removeClass("active");
   $(".content-detail").removeClass("active");
   $(".bubble-origin").removeClass("active");
   $(".close-bubble").removeClass("active");
});
});
 $('.carousel-homebanner').addClass('owl-carousel owl-theme').owlCarousel({
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      autoplay:true,
      autoplayTimeout: 5000,
     loop: true,
     center: true,
     responsive:{
       0: {
         items: 1,
         dots: true,
         nav: false
       },
       600: {
         items: 1,
         dots: true,
         nav: false
       },
       1000: {
         items: 1,
         dots: true,
         nav: false
       }
     }
   })
   $('.carousel-products').addClass('owl-carousel owl-theme').owlCarousel({
   loop: true,
   navText: ["<img src='https://granita.netlify.app/images/carousel-nav-07.png'>","<img src='https://granita.netlify.app/images/carousel-nav-08.png'>"],
   responsive:{
     0: {
       items: 1,
       dots: true,
       nav: false
     },
     600: {
       items: 1,
       dots: true,
       nav: false
     },
     1000: {
       items: 2,
       dots: false,
       nav: true
     }
   }
 })
 
    /*Animation: Moving Ornament on Scroll*/
$(document).ready(function(){


  $(window).scroll(function(){
    windowTop = $(window).scrollTop();

    $('.move-right').css({
      'transform':'translateX('+(windowTop) * 0.1  +'px)'
    });

    $('.move-left').css({
      'transform':'translateX('+(windowTop) * -0.1 +'px)'
    });

    $('.move-top').css({
      'transform':'translateY('+(windowTop) * -0.1 +'px)'
    });
    $('.move-bottom').css({
      'transform':'translateY('+(windowTop) * -1.0 +'px)'
    });
    $('.move-topcontact').css({
      'transform':'translateY('+(windowTop) * -1 +'px)'
    });
  });
});

$( document ).ready(function() {
  $(window).on("scroll resize", function () {
    var pos = $('.number').offset();
    $('.postery').each(function () {
      if (pos.top >= $(this).offset().top && pos.top <= $(this).next().offset().top) {
        var countery = $(this).find('.countery');
        $('.number').html(countery.text());
        $('.number').prop('href',countery.data('href'));
        return; 
      }
    });
  });
  $(document).ready(function () {
    $(window).trigger('scroll');
  });
});
