
$('#primary').addClass('fixed');

$(document).ready(function(){
    // Open Navigation on Toggle
	
	$("#toggle").click(function(){
		$("#primary").toggleClass('open');
	});
	

	$('.full-screen').css('height',$(window).height());
	// FitVids Video Containers.
    $("article").fitVids();

}); // Close Doc Ready Func
