$("#primary").addClass("fixed");$(document).ready(function(){$("#toggle").click(function(){$("#primary").addClass("open");$("#header").addClass("closed")});$("#close-primary, #close-primary-hidden").click(function(){$("#primary").removeClass("open");$("#header").removeClass("closed")});$(".subcat").addClass("close");$(".filter").click(function(){$(".subcat").addClass("close")});$("#lookbook-modal").addClass("fixed");$(".open-lookbook").click(function(){$("#lookbook-modal").addClass("open")});$(".close-lookbook").click(function(){$("#lookbook-modal").removeClass("open")});$(".open-size-chart").click(function(){$(".size-chart").addClass("open")});$(".close-size-chart").click(function(){$(".size-chart").removeClass("open")});$(window).resize(function(){});$("article, header").fitVids();$(".show-comments").click(function(){$(".comments").addClass("show")});$(window).scroll(function(){$(this).scrollTop()>200?$("#header, .logo-subtitle, #primary").addClass("scrolled"):$("#header, .logo-subtitle, #primary").removeClass("scrolled")});var e=new Instafeed({get:"tagged",tagName:"suffoca",accessToken:"2023173.467ede5.add2f7a2796448ea87bb5f034df16040",clientId:"513b251ee14d416fa01ad5f53eddf91c",template:'<a href="{{link}}"><img src="{{image}}" /></a>',limit:3,resolution:"standard_resolution"});e.run();window.featuredPosts=$("#featured-posts").Swipe().data("Swipe");window.lookbook=$("#lookbook").Swipe().data("Swipe");$(".product-slider").slick({dots:!0,speed:500})});