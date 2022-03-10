'use strict';

/******************************
 ** NAVBAR MENU
******************************/
document.addEventListener('DOMContentLoaded', () => {
    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
        // Add a click event on each of them
        $navbarBurgers.forEach( el => {
            el.addEventListener('click', () => {
                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);
                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    }
});


jQuery(document).ready(function( $ ) {

/******************************
 ** IMAGE ROTATOR
******************************/
    $('#home-banner-mobile').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1500,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav: false,
        dots: false,
        mouseDrag: false
    })
    
/******************************
 ** HOME FEATURES
******************************/
    $('#home-features').owlCarousel({
        // loop:true,
        margin: 24,
        nav: true,
        dots: false,
        navText: [$('.am-prev'), $('.am-next')],
        responsive:{
            0:{
                items: 1
            },
            500:{
                items: 2
            },
            768:{
                items: 3
            },
            1000:{
                items: 4
            }
        }
    })

/******************************
 ** ACCORDION
******************************/
    $('.accordion-toggle').on('click', function(e) {
        e.preventDefault();
    
      let $this = $(this);
    
      if ($this.next().hasClass('show')) {
          $this.next().removeClass('show');
          $this.next().slideUp(350);
      } else {
          $this.parent().parent().find('li .accordion-content').removeClass('show');
          $this.parent().parent().find('li .accordion-content').slideUp(350);
          $this.next().toggleClass('show');
          $this.next().slideToggle(350);
      }
    });




});//jquery