		

		<!--<link rel="stylesheet" href="css/base.css">   Reset & Browser Independent -->
        <link rel="stylesheet" href="css/main.css"> <!-- Advanced & Browser Dependent -->
		
		<script src="//use.typekit.net/iwy1qra.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		
   </head>
        <body>

		<?php include_once("icons/suffoca.svg"); ?>

        <header id="header">
        	<a id="toggle" > 
				<!-- <span class="menu"> </span> -->
				<span class="menu menu-l"> 
					<svg class="icon icon-menu">
						<use xlink:href="#icon-menu"></use>
					</svg>
				</span>
				<span class="menu menu-r"> 
					<svg class="icon icon-menu">
						<use xlink:href="#icon-menu"></use>
					</svg>
				</span>
			</a>
        	<a id="logotype" href="index">  
				<svg class="icon icon-wordmark">
					<use xlink:href="#icon-wordmark"></use>
				</svg>
        	</a>
        	<div id="cart">
        		<a id="shop-link" href="shop"> Store </a>
        		
        		<a id="cart-link" href="#cart"> 
					<span class="cart"> Cart </span> <span class="total"><span class="currency">&pound;</span>100</span> 
				</a>
        	</div>
        </header>

        <nav id="primary">
			<div id="close-primary">
				<!-- <span class="icon-close">  -->
				<span>
					<svg class="icon icon-close">
						<use xlink:href="#icon-close"></use>
					</svg> 
				</span>
			</div>
			<div id="close-primary-hidden">	</div>			
			<ul id="page-nav">
				<li style=" "> 
					<a href="index"> 
						 Blog
					</a> 
				</li>
				<li style=" "> 
					<a href="shop"> 
						 Shop 
					</a> </li>
				<li style=" "> 
					<a id="openAbout" href="#about"> 
						 About 
					</a> 
				</li>
				<li style=" ">
					<a id="openContact" href="#contact"> 
						Email
					</a> 
				</li>
			</ul>
			<form id="search">
				<input type="text" placeholder="SEARCH"/> 
				<!-- <input type="submit" value="go" /> -->
			</form>
			<ul id="social-nav">
				<li>
					<a href="http://twitter.com/suffoca" target=_blank>
						<svg class="icon icon-twitter">
							<use xlink:href="#icon-twitter"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="http://instagram.com/suffoca" target=_blank>
						<svg class="icon icon-instagram">
							<use xlink:href="#icon-instagram"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="http://youtube.com/suffoca" target=_blank>
						<svg class="icon icon-youtube">
							<use xlink:href="#icon-youtube"></use>
						</svg>
					</a>
				</li>
			</ul>
    	</nav>

		<div id="about">
    		<div class="about-text">
    			<p> 05. <br>
				Suffoca is a lifestyle brand and upholder of visual story telling, sharing a creative view on travel, art and experience. </p>

				<p> Building on a British tradition of preserving history, whilst embracing the new, each creation has a connection to a past experience. </p>

				<p> Creativity is in all of us and there is no better feeling than creating something that truly communicates, evokes a feeling, triggers a memory or solves a problem. </p>

				<h6> Creatures of habit - Masters of travel - Dreamers in creativity. </h6>

    			<img src="img/content/about/about_lounging.gif" alt="">
    		</div>
    		<div class="closeOffCanvas" id="closeAbout">
    			<span> 
	    		 	<img src="img/UI/nav/arrow_r.png" alt="back to main menu">
	    		 </span>
    		</div>
    	</div>

    	<div id="contact">
    		
    		<form id="email-form" action="">
    			<input type="text" placeholder="Enter your email address here" class="email">
    			<input type="text" placeholder="Type Message Here" class="message">
    			
    			<input type="submit" value="Send" class="send">
    		</form>

    		<div class="closeOffCanvas" id="closeContact">
    		 <span> 
    		 	<img src="img/UI/nav/arrow_l.png" alt="back to main menu">
    		 </span>
    		</div>
    	</div> 
