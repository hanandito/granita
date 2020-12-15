$(document).ready(function() {
$('.bubble-origin').click(function() {
  $(".bubble-origin-expand").addClass("active");
  $(".bubble-origin").addClass("hide");
})
$('.close-bubble').click(function(e) {
  $('.bubble-origin-expand').removeClass('active');
  $('.content-detail').removeClass('active');
  $('.bubble-origin').removeClass('hide');
  e.stopPropagation();
})
$('.bubble-origin-2').click(function() {
  $('.bubble-origin-2-expand').addClass("active");
  $('.bubble-origin-2').addClass("hide");
})
$('.close-bubble-2').click(function() {
  $('.bubble-origin-2-expand').removeClass("active");
  $('.bubble-origin-2').removeClass('hide');
})
})
//  Favor
 $('.carousel-homebanner').addClass('owl-carousel owl-theme').owlCarousel({
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      autoplay:false,
      autoplayTimeout: 5000,
     loop: true,
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

//Create classOnScroll function
function classOnScroll(){
  let $box = $('.navbar-granita'),
      $scroll = $(window).scrollTop();
  
  if($scroll > 40){
    if(!$box.hasClass('scrolled')) 
      $box.addClass('scrolled');
  }
  else
    $box.removeClass('scrolled');

}

//Run on first site run
classOnScroll();

//Run on scroll and resize
$(window).on('scroll resize',classOnScroll);
