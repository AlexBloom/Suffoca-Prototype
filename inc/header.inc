		

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
						<span class="icon-twitter"></span>
					</a>
				</li>
				<li>
					<a href="http://instagram.com/suffoca" target=_blank>
						<span class="icon-instagram"></span>
					</a>
				</li>
				<li>
					<a href="http://youtube.com/suffoca" target=_blank>
						<span class="icon-youtube"></span>
					</a>
				</li>
			</ul>
    	</nav>

		<div id="about">
    		<div class="about-text">
    			<p>Suffoca is a lifestyle brand and purveyor of visual storytelling. Sharing a creative view on travel, art and experience. </p>
    			<p>Building on British ethics of preserving history and embracing the new, each creation has a relation to a previous experience. </p>
    			<p>Creativity is in all of us. Some express it in different ways but there isn't a better feeling of creating something which really communicates, reflects a feeling, memory or solves a problem. </p>
    			<h6> Creatures of habit • Masters of travel • Dreamers of creativity </h6>
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
