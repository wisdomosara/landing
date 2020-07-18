window.onload = function() {
    document.querySelector(".preload").classList.add("hide")
    document.querySelector(".mainn").style.display = "block"
    console.log("hidee")
}
    new WOW().init();

    
var owl = $('.owl-carousel');
owl.owlCarousel({
    
    items:3,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
        }
    }

});


    lightbox.option({
      'resizeDuration': 100,
      'wrapAround': true,
      'showImageNumberLabel' : false,
      'imageFadeDuration' : 200,
      'FadeDuration':200

    })
