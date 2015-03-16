//anim.js
$(document).ready(function($) {
	// init controller
	var controller = new ScrollMagic();

	// build tween
	// var tween = TweenMax.from("#animate", 0.5, {autoAlpha: 0, scale: 0.7});

	// build scene
	// var scene = new ScrollScene({triggerElement: "a#top", duration: 200, triggerHook: "onLeave"})
					//.setTween(tween)
					//.addTo(controller);
					

	var dur = ($(window).height()/1.5);
	//var durCountdown = ($(window).height()*8);

// build tween
var titleFade = TweenMax.fromTo("#post-title", 1, 
		{scale: 1, opacity:1 },
		{scale: .75, opacity:.25}
	);
	

	
// build scene
var scene = new ScrollScene({triggerElement: "#home-posts", duration: dur, offset: -200 })
	.setTween(titleFade)
	//.setTween(bgSlide)
	
	.addTo(controller);

var bgSlide = TweenMax.fromTo("#home-header", 1,
	//{css:{"background-position":"50% 50%"}},
	//{css:{"background-position":"50% 100%"}}
	{top:0, opacity:1  },
	{top:-200, opacity:.5 }
	);
	
// build scene
var scene = new ScrollScene({triggerElement: "#home-posts", duration: dur, offset: -200 })
	//.setTween(titleFade)
	.setTween(bgSlide)
	
	.addTo(controller);


});

