
$('#primary').addClass('fixed');

$(document).ready(function(){
    // Open Navigation on Toggle
	
	$("#toggle").click(function(){
		$("#primary").addClass('open');
	});
	
	$("#close-primary").click(function(){
		$("#primary").removeClass('open');
	});
	
	$(".subcat").addClass('close');
	
	$(".filter").click(function(){
		$(".subcat").addClass('close');
	});
	
	$(".mens").click(function(){
		$(".mens-sub").removeClass('close');
	});
	
	$(".womens").click(function(){
		$(".womens-sub").removeClass('close');
	});

	$('.full-screen').css('height',$(window).height());
	// FitVids Video Containers.
    $("article").fitVids();
	
	$(".show-comments").click(function(){
		$(".comments").addClass('show');
	});
	
	
	//Fire Swipe Classes for Sliders
	window.product = $('#product-images').Swipe().data('Swipe');


}); // Close Doc Ready Func
