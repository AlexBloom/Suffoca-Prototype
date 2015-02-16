
$('#primary').addClass('fixed');

$(document).ready(function(){
    // Open Navigation on Toggle
	
	$("#toggle").click(function(){
		$("#primary").addClass('open');
	});
	
	$("#close-primary, #close-primary-hidden").click(function(){
		$("#primary").removeClass('open');
	});
	
	$(".subcat").addClass('close');
	
	$(".filter").click(function(){
		$(".subcat").addClass('close');
	});
	
	//Shop
	$(".mens").click(function(){
		$(".mens-sub").removeClass('close');
	});
	
	$(".womens").click(function(){
		$(".womens-sub").removeClass('close');
	});



	//$('.full-screen').css('height',$(window).height() -200);
	
	$('#home-header').css('height',$(window).height()-100);
	$('.post-header').css('height',$(window).height());
	
	$('#home-posts').css('margin-top',$(window).height()-100);
	
	
	// FitVids Video Containers.
    $("article, header").fitVids();
	
	$(".show-comments").click(function(){
		$(".comments").addClass('show');
	});
	


	$(window).scroll(function() {
	if ($(this).scrollTop() > 200){  
	    $('#header, .logo-subtitle').addClass("scrolled");
	  }
	  else{
	    $('#header, .logo-subtitle').removeClass("scrolled");
	  }
	});
	


	
	//Fire Swipe Classes for Sliders
	window.featuredPosts = $('#featured-posts').Swipe().data('Swipe');







}); // Close Doc Ready Func
