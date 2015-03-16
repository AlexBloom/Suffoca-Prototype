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
					

	var dur = ($(window).height());
	//var durCountdown = ($(window).height()*8);

/* HOME CONTENT */ 

// build tween
//var titleFadeHome = TweenMax.fromTo("#post-title", 1, 
//		{scale: 1, opacity:1 },
//		{scale: .75, opacity:.25}
//	);
//	
//// build scene
//var scene = new ScrollScene({triggerElement: "#home-posts", duration: dur, offset: -200 })
//	.setTween(titleFadeHome)
//	//.setTween(bgSlide)	
//	.addTo(controller);
//	
//
//var bgHome = TweenMax.fromTo("#home-header", 1,
//	//{css:{"background-position":"50% 50%"}},
//	//{css:{"background-position":"50% 100%"}}
//	{top:0, opacity:1  },
//	{top:-200, opacity:.5 }
//	);
//	
//// build scene
//var scene = new ScrollScene({triggerElement: "#home-posts", duration: dur, offset: -200 })
//	//.setTween(titleFade)
//	.setTween(bgHome)
//	
//	.addTo(controller);
//
//

/* POST CONTENT */ 


// build tween
var titleFade = TweenMax.fromTo(".post-title", 1.5, 
		{scale: 1, opacity:1 },
		{scale: .75, opacity:.25}
	);
	
// build scene
var scene = new ScrollScene({triggerElement: ".page-content", duration: dur, offset: -300 })
	//.setTween(titleFade)
	.setTween(titleFade)
	
	.addTo(controller);



var bgPost = TweenMax.fromTo(".page-header", 1.5,
	//{css:{"background-position":"50% 50%"}},
	//{css:{"background-position":"50% 100%"}}
	{top:0, opacity:1  },
	{top:-200, opacity:.5 }
	);
	
// build scene
var scene = new ScrollScene({triggerElement: ".page-content", duration: dur, offset: -300 })
	//.setTween(titleFade)
	.setTween(bgPost)
	
	.addTo(controller);

});
