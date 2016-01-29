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
    $(".section-about i, .section-services i, .section-folio i, .section-register i, .section-boombox i, .section-swatthebug i,.section-hackerjack i,.section-hacknight i, .section-contact i,.section-hackerjack i,.section-bashemup i,.section-bestengineer i,.section-maestro i,.section-codeswap i,.section-highq i,.section-langx i,.section-sidhandics i,.section-startaction i,.section-mrcad i,.section-shutterbug i,.section-respawn i,.section-contraption i,.section-crossfire i,.section-pirate i,.section-mysteriarch i,.section-hudrolaunch i,.section-disco i,.section-cognizance i,.section-wikisurf i,.section-roadies i").removeClass("active");
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

  /* --- event Section start --- */
    $(".section-boombox").click(function () {
        $(".section").removeClass("section-expand");
        $("#boombox").addClass("section-expand");

    })
    $("#boombox").click(function () {
    $(".section-boombox i").toggleClass("active");
   })

  $(".section-sidhandics").click(function () {
    $(".section").removeClass("section-expand");
    $("#sidhandics").addClass("section-expand");

  })
  $("#sidhandics").click(function () {
    $(".section-sidhandics i").toggleClass("active");
  })

    $(".section-hackerjack").click(function () {
      $(".section").removeClass("section-expand");
      $("#hackerjack").addClass("section-expand");

    })

  $("#hackerjack").click(function () {
    $(".section-hackerjack i").toggleClass("active");
  })

    $(".section-swatthebug").click(function () {
        $(".section").removeClass("section-expand");
        $("#swatthebug").addClass("section-expand");


    })

  $("#swatthebug").click(function () {
    $(".section-swatthebug i").toggleClass("active");
  })


  $(".section-hacknight").click(function () {
    $(".section").removeClass("section-expand");
    $("#hacknight").addClass("section-expand");
  })

  $(".section-codezilla").click(function () {
    $(".section").removeClass("section-expand");
    $("#codezilla").addClass("section-expand");
  })
  $("#codezilla").click(function () {
    $(".section-codezilla i").toggleClass("active");
  })

  $("#hacknight").click(function () {
    $(".section-hacknight i").toggleClass("active");
  })

  $(".section-bashemup").click(function () {
    $(".section").removeClass("section-expand");
    $("#bashemup").addClass("section-expand");
  })

  $("#bashemup").click(function () {
    $(".section-bashemup i").toggleClass("active");
  })

  $(".section-bestengineer").click(function () {
    $(".section").removeClass("section-expand");
    $("#bestengineer").addClass("section-expand");
  })

  $("#bestengineer").click(function () {
    $(".section-bestengineer i").toggleClass("active");
  })

  $(".section-maestro").click(function () {
    $(".section").removeClass("section-expand");
    $("#maestro").addClass("section-expand");
  })

  $("#maestro").click(function () {
    $(".section-maestro i").toggleClass("active");
  })

  $(".section-codeswap").click(function () {
    $(".section").removeClass("section-expand");
    $("#codeswap").addClass("section-expand");
  })

  $("#codeswap").click(function () {
    $(".section-codeswap i").toggleClass("active");
  })

  $(".section-highq").click(function () {
    $(".section").removeClass("section-expand");
    $("#highq").addClass("section-expand");
  })

  $(".section-langx").click(function () {
    $(".section").removeClass("section-expand");
    $("#langx").addClass("section-expand");
  })
  $("#langx").click(function () {
    $(".section-langx i").toggleClass("active");
  })

  $(".section-startaction").click(function () {
    $(".section").removeClass("section-expand");
    $("#startaction").addClass("section-expand");
  })

  $("#startaction").click(function () {
    $(".section-startaction i").toggleClass("active");
  })

  $(".section-mrcad").click(function () {
    $(".section").removeClass("section-expand");
    $("#mrcad").addClass("section-expand");
  })

  $("#mrcad").click(function () {
    $(".section-mrcad i").toggleClass("active");
  })

  $(".section-shutterbug").click(function () {
    $(".section").removeClass("section-expand");
    $("#shutterbug").addClass("section-expand");
  })
  $("#shutterbug").click(function () {
    $(".section-shutterbug i").toggleClass("active");
  })

  $(".section-respawn").click(function () {
    $(".section").removeClass("section-expand");
    $("#respawn").addClass("section-expand");
  })

  $(".section-contraption").click(function () {
    $(".section").removeClass("section-expand");
    $("#contraption").addClass("section-expand");
  })

  $("#contraption").click(function () {
    $(".section-contraption i").toggleClass("active");
  })

  $(".section-crossfire").click(function () {
    $(".section").removeClass("section-expand");
    $("#crossfire").addClass("section-expand");
  })

  $("#crossfire").click(function () {
    $(".section-crossfire i").toggleClass("active");
  })

  $(".section-pirate").click(function () {
    $(".section").removeClass("section-expand");
    $("#pirate").addClass("section-expand");
  })
  $("#pirate").click(function () {
    $(".section-pirate i").toggleClass("active");
  })

  $(".section-mysteriarch").click(function () {
    $(".section").removeClass("section-expand");
    $("#mysteriarch").addClass("section-expand");
  })
  $("#mysteriarch").click(function () {
    $(".section-mysteriarch i").toggleClass("active");
  })

  $(".section-hudrolaunch").click(function () {
    $(".section").removeClass("section-expand");
    $("#hudrolaunch").addClass("section-expand");
  })
  $("#hudrolaunch").click(function () {
    $(".section-hudrolaunch i").toggleClass("active");
  })

  $(".section-disco").click(function () {
    $(".section").removeClass("section-expand");
    $("#disco").addClass("section-expand");
  })
  $("#disco").click(function () {
    $(".section-disco i").toggleClass("active");
  })

  $(".section-cognizance").click(function () {
    $(".section").removeClass("section-expand");
    $("#cognizance").addClass("section-expand");
  })
  $("#cognizance").click(function () {
    $(".section-cognizance i").toggleClass("active");
  })

  $(".section-wikisurf").click(function () {
    $(".section").removeClass("section-expand");
    $("#wikisurf").addClass("section-expand");
  })
  $("#wikisurf").click(function () {
    $(".section-wikisurf i").toggleClass("active");
  })

  $(".section-roadies").click(function () {
    $(".section").removeClass("section-expand");
    $("#roadies").addClass("section-expand");
  })
  $("#roadies").click(function () {
    $(".section-roadies i").toggleClass("active");
  })
  /* --- event Section end --- */

  $(".section-services").click(function () {
    $(".section").removeClass("section-expand");

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

  /* --- GoTo Event Section start--- */
    $(".goto-boombox").click(function (e) {
        $("#boombox").addClass("section-expand").siblings().removeClass("section-expand");
        $(".section-boombox i").addClass("active");
        $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");

        e.stopPropagation();
    })

    $(".goto-swatthebug").click(function (e) {
        $("#swatthebug").addClass("section-expand").siblings().removeClass("section-expand");
        $(".section-swatthebug i").addClass("active");
        $(".section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
        e.stopPropagation();
    })

  $(".goto-hacknight").click(function (e) {
    $("#hacknight").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-hacknight i").addClass("active");
    $(".section-swatthebug i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-hackerjack").click(function (e) {
    $("#hackerjack").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-hackerjack i").addClass("active");
    $(".section-swatthebug i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-bashemup").click(function (e) {
    $("#bashemup").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-bashemup i").addClass("active");
    $(".section-swatthebug i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-maestro").click(function (e) {
    $("#maestro").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-maestro i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-codeswap").click(function (e) {
    $("#codeswap").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-codeswap i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-codezilla").click(function (e) {
    $("#codezilla").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-codezilla i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })
  $(".goto-langx").click(function (e) {
    $("#langx").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-langx i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-sidhandics").click(function (e) {
    $("#sidhandics").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-sidhandics i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })


  $(".goto-highq").click(function (e) {
    $("#highq").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-highq i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-bestengineer").click(function (e) {
    $("#bestengineer").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-bestengineer i").addClass("active");

    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

    $(".goto-startaction").click(function (e) {
      $("#startaction").addClass("section-expand").siblings().removeClass("section-expand");
      $(".section-startaction i").addClass("active");

      $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
      e.stopPropagation();
  })

  $(".goto-mrcad").click(function (e) {
    $("#mrcad").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-mrcad i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

   $(".goto-shutterbug").click(function (e) {
    $("#shutterbug").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-shutterbug i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-respawn").click(function (e) {
    $("#respawn").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-respawn i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-contraption").click(function (e) {
    $("#contraption").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-contraption i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-crossfire").click(function (e) {
    $("#crossfire").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-crossfire i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-pirate").click(function (e) {
    $("#pirate").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-pirate i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })

  $(".goto-mysteriarch").click(function (e) {
    $("#mysteriarch").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-mysteriarch i").addClass("active");
    $(".section-hudrolaunch i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })


  $(".goto-hudrolaunch").click(function (e) {
    $("#hudrolaunch").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-hudrolaunch i").addClass("active");
    $(".section-hudrolaunch i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })


  $(".goto-disco").click(function (e) {
    $("#disco").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-disco i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })


  $(".goto-cognizance").click(function (e) {
    $("#pirate").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-cognizance i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })



  $(".goto-wikisurf").click(function (e) {
    $("#wikisurf").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-wikisurf i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })


  $(".goto-roadies").click(function (e) {
    $("#roadies").addClass("section-expand").siblings().removeClass("section-expand");
    $(".section-roadies i").addClass("active");
    $(".section-swatthebug i,.section-hacknight i,.section-about i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
    e.stopPropagation();
  })


  /* --- GoTo Event Section stop--- */

  $(".goto-about").click(function (e) {
    $("#about").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-about i").addClass("active");
    $(".section-hacknight i,.section-swatthebug i,.section-services i, .section-folio i, .section-register i, .section-contact i").removeClass("active");
	e.stopPropagation();
  })
  $(".goto-services").click(function (e) {
    $("#services").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-services i").addClass("active");
    $(".section-hacknight i,.section-swatthebug i,.section-about i, .section-folio i,.section-hacknight i, .section-register i, .section-contact i").removeClass("active");
	e.stopPropagation();
  })
  $(".goto-folio").click(function (e) {
    $("#folio").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-folio i").addClass("active");
    $(".section-hacknight i,.section-swatthebug i,.section-about i, .section-services i, .section-register i, .section-contact i").removeClass("active");
	e.stopPropagation();
  })
  $(".goto-register").click(function (e) {
    $("#register").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-register i").addClass("active");
    $(".section-about i,.section-hacknight i,.section-swatthebug i,.section-services i, .section-folio i, .section-contact i").removeClass("active");
	e.stopPropagation();
  })
  $(".goto-contact").click(function (e) {
    $("#contact").addClass("section-expand").siblings().removeClass("section-expand");
	$(".section-contact i").addClass("active");
    $(".section-about i,.section-hacknight i,.section-swatthebug i,.section-services i, .section-folio i, .section-register i").removeClass("active");
	e.stopPropagation();
  })

  /* --- Active Filter Menu --- */
  $(".switch-section a i, .filter a").click(function (e) {
    $(".switch-section a i, .filter a").removeClass("active");
    $(this).addClass("active");
    e.preventDefault();
  });

  ;

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

$(document).ready(function() {

    setTimeout(function(){
        $('body').addClass('loaded');
        $('h1').css('color','#ffffff');
    }, 3000);

});