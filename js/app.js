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
         dots: false,
         nav: false
       }
     }
   })
   