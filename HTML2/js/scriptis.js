$("#menu .nav a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 300, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

   $(".nav-link").removeClass("active")
   $(this).addClass("active")

});

  $('#navbarTogglerDemo02').on('shown.bs.collapse', function () {
    $(".hamburger").toggleClass('active')
    $("#menu-container-mobile").css('background-color','#fff')
  })

  $('#navbarTogglerDemo02').on('hidden.bs.collapse', function () {
    $(".hamburger").toggleClass('active')
    $("#menu-container-mobile").css('background-color','')
  })