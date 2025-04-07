var carousel = function() {
    // Solo ejecuta el carrusel si estamos en la vista de tienda
    if (!document.querySelector('.tienda-page')) return;
  
    $('.home-slider').each(function() {
      const $carousel = $(this);
  
      // Verifica si tiene productos (card-chart) para decidir configuración
      const isProductCarousel = $carousel.find('.card-chart').length > 0;
  
      $carousel.owlCarousel({
        loop: true,
        autoplay: true,
        margin: isProductCarousel ? 10 : 0,
        animateOut: isProductCarousel ? false : 'fadeOut',
        animateIn: isProductCarousel ? false : 'fadeIn',
        nav: true,
        dots: !isProductCarousel,
        autoplayHoverPause: true,
        navText: isProductCarousel 
          ? ["<p><span class='fa fa-chevron-left'></span></p>","<p><span class='fa fa-chevron-right'></span></p>"]
          : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
        responsive:{
          0:{ items: isProductCarousel ? 1 : 1 },
          600:{ items: isProductCarousel ? 2 : 1 },
          1000:{ items: isProductCarousel ? 4 : 1 }
        }
      });
    });
  
    // Mantén los otros carruseles
    $('.carousel-testimony').owlCarousel({
      center: true,
      loop: true,
      items:1,
      margin: 30,
      stagePadding: 0,
      nav: false,
      navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
      responsive:{
        0:{ items: 1 },
        600:{ items: 2 },
        1000:{ items: 3 }
      }
    });
  
    $('.carousel-stories').owlCarousel({
      loop: true,
      autoplay: true,
      autoHeight: false,
      margin: 30,
      nav: true,
      dots: false,
      autoplayHoverPause: false,
      items: 1,
      navText : ["<p><span class='fa fa-chevron-left'></span></p>","<p><span class='fa fa-chevron-right'></span></p>"],
      responsive:{
        0:{ items:1 },
        600:{ items:1 },
        1000:{ items:1 }
      }
    });
  };
  
  carousel();
  