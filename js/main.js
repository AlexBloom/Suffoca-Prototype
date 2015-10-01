
$('#primary').addClass('fixed');

$(document).ready(function(){
    // Open Navigation on Toggle
	
	$("#toggle").click(function(){
		$("#primary").addClass('open');
		$("#header").addClass('closed');
	});
	
	$("#close-primary, #close-primary-hidden").click(function(){
		$("#primary").removeClass('open');
		$("#header").removeClass('closed');
	});

	$(document).on('keyup',function(evt) {
	    if (evt.keyCode == 27) {
	       $("#primary").removeClass('open');
		   $("#header").removeClass('closed');
	    }
	});

	$("#openAbout").click(function(){
		$("#primary").addClass('right');
		$("#about").addClass('open');
	});
	$("#openContact").click(function(){
		$("#primary").addClass('left');
		$("#contact").addClass('open');
	});
	
	$(".closeOffCanvas").click(function(){
		$("#about").removeClass('open');
		$("#contact").removeClass('open');
		$("#primary").removeClass('left');
		$("#primary").removeClass('right');
	});
	
	$(".subcat").addClass('close');
	
	$(".filter").click(function(){
		$(".subcat").addClass('close');
	});
	
	//Shop
	//Lookbook Widget
	$("#lookbook-modal").addClass('fixed');
	
	$(".open-lookbook").click(function(){
		$("#lookbook-modal").addClass('open');
	});

	$(document).on('keyup',function(evt) {
	    if (evt.keyCode == 27) {
	       $("#lookbook-modal").removeClass('open');
	    }
	});

	$(".close-lookbook").click(function(){
		$("#lookbook-modal").removeClass('open');
	});
	
	
	// Shop Size Chart
	$(".open-size-chart").click(function(){
		$('.size-chart').addClass('open');
	});	
	$(".close-size-chart").click(function(){
		$('.size-chart').removeClass('open');
	});
	
	
	//$(".mens").click(function(){
	//	$(".mens-sub").removeClass('close');
	//});
	//
	//$(".womens").click(function(){
	//	$(".womens-sub").removeClass('close');
	//});
	
	



	//$('.full-screen').css('height',$(window).height() -200);
	
	//$('#home-header').css('height',$(window).height()-100);
	//$('.post-header').css('height',$(window).height()-50);
	//$('#home-posts').css('margin-top',$(window).height()-100);
	//$('.post-content').css('margin-top',$(window).height()-100);
    $(window).resize(function(){
		//$('#home-header').css('height',$(window).height()-100);
		
		//$('.post-header').css('height',$(window).height()-50);
		//$('#home-posts').css('margin-top',$(window).height()-100);
		
		//$('.post-content').css('margin-top',$(window).height()-100);
		
    });
	
	// FitVids Video Containers.
    $("article, header").fitVids();
	
	$(".show-comments").click(function(){
		$(".comments").addClass('show');
	});
	
   

	$(window).scroll(function() {
	if ($(this).scrollTop() > 200){  
	    $('#header, .logo-subtitle, #primary').addClass("scrolled");
	  }
	  else{
	    $('#header, .logo-subtitle, #primary').removeClass("scrolled");
	  }
	});
	


	//PARRALLAX TITLES FADE OUT

	//var controller = new ScrollMagic.Controller();

	
	
	
	// build scene

	//var scene = new ScrollMagic.Scene({triggerElement: "#home-header", duration: 300})
	//// animate color and top border in relation to scroll position
	//.setTween("#home-posts", {borderTop: "30px solid white", backgroundColor: "blue", scale: 0.7}) // the tween durtion can be omitted and defaults to 1
	//.addIndicators({name: "2 (duration: 300)"}) // add indicators (requires plugin)
	//.addTo(controller);



	//INITIATE INSTAFEED
		
    var feed = new Instafeed({
		get: 'user',		
		userId: 5000335,
		accessToken: '5000335.467ede5.f2f39714cc1d4a02aad4bddba9558579',
        clientId: '513b251ee14d416fa01ad5f53eddf91c',
		template: '<a href="{{link}}"><img src="{{image}}" /></a>',
		limit: 3,
		resolution: 'standard_resolution',
    });
    feed.run();
	



// Slick Slider
$('.product-slider').slick({
  dots: true,
  speed: 500
});

$('#lookbook').slick({
  dots: true,
  speed: 500
});



}); // Close Doc Ready Func
