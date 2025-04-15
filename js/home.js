$(document).ready(function(){
  const windowsWidth = $(window).width();
    const swiper = new Swiper('.carrusel-constriudo', {
        slidesPerView: 1,
        spaceBetween: 10,
        // loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
            576: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 10,
            },
            992: {
              slidesPerView: 2,
              spaceBetween: 10,
            },
            1200: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
        },
    });
    const swiperTestimonios = new Swiper('.carrusel-testimonios', {
        slidesPerView: 1,
        spaceBetween: 10,
        // loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
            576: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 10,
            },
            992: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
            1200: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
        },
    });

    const swiperNoticias = new Swiper('.carrusel-noticias', {
      slidesPerView: 1,
      spaceBetween: 10,
      // loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
          576: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 20,
          }
      },
    });
})