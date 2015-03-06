
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
	$(".close-lookbook").click(function(){
		$("#lookbook-modal").removeClass('open');
	});
	
	
	$(".mens").click(function(){
		$(".mens-sub").removeClass('close');
	});
	
	$(".womens").click(function(){
		$(".womens-sub").removeClass('close');
	});
	
	



	//$('.full-screen').css('height',$(window).height() -200);
	
	$('#home-header').css('height',$(window).height()-100);
	$('.post-header').css('height',$(window).height()-50);
	$('#home-posts').css('margin-top',$(window).height()-100);
	$('.post-content').css('margin-top',$(window).height()-100);
    $(window).resize(function(){
		$('#home-header').css('height',$(window).height()-100);
		$('.post-header').css('height',$(window).height()-50);
		$('#home-posts').css('margin-top',$(window).height()-100);
		$('.post-content').css('margin-top',$(window).height()-100);
		
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
	



	//INITIATE INSTAFEED
		
    var feed = new Instafeed({
        //get: 'tagged',
		//tagName: 'suffoca',
		get: 'user',		
		userId: 2023173,
		accessToken: '2023173.467ede5.add2f7a2796448ea87bb5f034df16040',
        clientId: '513b251ee14d416fa01ad5f53eddf91c',
		template: '<a href="{{link}}"><img src="{{image}}" /></a>',
		limit: 4,
		resolution: 'standard_resolution',
    });
    feed.run();
	


	
	//Fire Swipe Classes for Sliders
	window.featuredPosts = $('#featured-posts').Swipe().data('Swipe');
	window.product = $('#product-images').Swipe().data('Swipe');
	window.lookbook = $('#lookbook').Swipe().data('Swipe');





}); // Close Doc Ready Func
