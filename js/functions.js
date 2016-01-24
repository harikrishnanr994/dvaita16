// JavaScript Functions ( Statti Template )

$(document).ready(function () {
  
  /* --- Open Section --- */
  $(".section").click(function () {
    $(this).addClass("section-expand");
    $(".switch-section").show(250);
    $(".section-close").show(250);
    $(".switch-section").addClass("switch-section-open");
  })

  /* --- Close Section --- */
  $(".section-close").click(function () {
    $(".section").removeClass("section-expand");
    $(".switch-section").hide(250);
    $(".section-close").hide(250);
    $(".section-about i, .section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
  })

  /* --- Side Menu --- */
  $(".switch-section").click(function () {
    $(this).toggleClass("switch-section-open");
  })
  
  /* --- Switch Section --- */
  $(".section-about").click(function () {
    $(".section").removeClass("section-expand");
    $("#about").addClass("section-expand");
  })
  $("#about").click(function () {
    $(".section-about i").toggleClass("active");
  })

  $(".section-services").click(function () {
    $(".section").removeClass("section-expand");
    $("#services").addClass("section-expand");
  })
  $("#services").click(function () {
    $(".section-services i").toggleClass("active");
  })

  $(".section-folio").click(function () {
    $(".section").removeClass("section-expand");
    $("#folio").addClass("section-expand");
  })
  $("#folio").click(function () {
    $(".section-folio i").toggleClass("active");
  })

  $(".section-register").click(function () {
    $(".section").removeClass("section-expand");
    $("#register").addClass("section-expand");
  })
  $("#register").click(function () {
    $(".section-register i").toggleClass("active");
  })

  $(".section-contact").click(function () {
    $(".section").removeClass("section-expand");
    $("#contact").addClass("section-expand");
  })
  $("#contact").click(function () {
    $(".section-contact i").toggleClass("active");
  })

  /* --- GoTo Section --- */
  $(".goto-about").click(function (e) {
    $("#about").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-about i").addClass("active");
    $(".section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
	e.stopPropagation();
  })
  $(".goto-services").click(function (e) {
    $("#services").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-services i").addClass("active");
    $(".section-about i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
	e.stopPropagation();
  })
  $(".goto-folio").click(function (e) {
    $("#folio").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-folio i").addClass("active");
    $(".section-about i, .section-services i, .section-register i, .section-contact i").removeClass("active");
	e.stopPropagation();
  })
  $(".goto-register").click(function (e) {
    $("#register").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-register i").addClass("active");
    $(".section-about i, .section-services i, .section-folio i, .section-contact i").removeClass("active");
	e.stopPropagation();
  })
  $(".goto-contact").click(function (e) {
    $("#contact").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-contact i").addClass("active");
    $(".section-about i, .section-services i, .section-folio i, .section-register i").removeClass("active");
	e.stopPropagation();
  })

  /* --- Active Filter Menu --- */
  $(".switch-section a i, .filter a").click(function (e) {
    $(".switch-section a i, .filter a").removeClass("active");
    $(this).addClass("active");
    e.preventDefault();
  });
  
  /* --- Masonry --- */
  $("#folio, .section-folio, .goto-folio, #register, .section-register, .goto-register").on("click",function(){

  var $container = $(".masonry");
  $container.imagesLoaded(function () {
    $container.isotope({
      itemSelector: ".item",
    });
  });
  $("#folio-filters a, #register-filters a").click(function () {
    var selector = $(this).attr("data-filter");
    $container.isotope({
      filter: selector
    });
    return false;
  });

  });
  
  /* --- Item Description --- */
  $(".item").click(function () {
    $(this).toggleClass("open");
  })
  
  /* --- Fancybox --- */
  $(".view-fancybox").fancybox({
    openEffect: 'elastic',
    closeEffect: 'elastic',
    next: '<i class="icon-smile"></i>',
    prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
  });
  
  /* --- NiceScroll --- */
  $(".section").niceScroll();
  
  /* --- Slider --- */
  $('#slides').superslides({
    slide_easing: 'easeInOutCubic',
    slide_speed: 800,
    play: 4000,
    pagination: true,
    hashchange: true,
    scrollable: true
  });

  $("#contact, .section-contact, .goto-contact").on("click",function(){

  /* --- Google Map --- */
  var mapOptions = {
    center: new google.maps.LatLng(10.8235315,76.6425173),
    zoom: 17,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
  
  var image = "img/marker.png";
  var marker = new google.maps.Marker({
    position: mapOptions.center,
    map: map,
    icon: image
  });

  });

});

/* --- Flex Slider --- */
$(window).load(function() {
  $(".flexslider").flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 300,
    itemMargin: 0,
    prevText: "<i class='icon-angle-left'></i>",
    nextText: "<i class='icon-angle-right'></i>",
  });
});