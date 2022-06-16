let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
  navbar.classList.toggle('active');
}

$('.owl-carousel').owlCarousel({
  // items: 4,
  loop:true,
  margin:10,
  responsiveClass:true,
  autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      600:{
          items:1,
          nav:false
      },
      1000:{
          items:2,
          nav:false,
          loop:true
      }
  }
});