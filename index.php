<?php include_once'inc/head.inc' ?>
<?php include_once'inc/header.inc' ?>


	<header id="home-intro">	
		
		<div class="swipe" id="featured-posts">	
			<div class="swipe-wrap">	
				<div>	
					
					<iframe id="ytplayer" width="853" height="480" src="//www.youtube.com/embed/JTzae0fPzzM?rel=0&amp;controls=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allowfullscreen></iframe> 
					
					<a href="post" class="permalink">
						<h3> Keep Swimming </h3>
						<!-- <p> Sometimes you just need to grab your friends and take it to the hills. See the full post for more. </p> -->
					</a>
					
				</div>
				<div> 
					<div class="image" style="background-image:url(img/content/lookbook/hitch_01.jpg)"> 
					
					</div>
					<!-- <img src="img/content/lookbook/hitch_01.jpg" alt="Hitch 01"> -->
					
					<a href="post" class="permalink">
						<h3> Spring 2015 Collection </h3>
						<!-- <p> Excerpt of text about collection. </p> -->
					</a>
				</div>
				
				<div> 
					<div class="image" style="background-image:url(img/content/adventures/london_003.jpg)"> 
					 
					</div>
					<!-- <img src="img/content/adventures/london_003.jpg" alt="London 003"> -->
					
					<a href="post" class="permalink">
						<h3> New Product </h3>
						<!-- <p> Excerpt of text about product </p> -->
					</a>
				</div>
			</div>
			<div class="button prev" onclick='featuredPosts.prev()'> <span class="icon-left"> </span> </div> 
	    	<div class="button next" onclick='featuredPosts.next()'> <span class="icon-right"> </span> </div>
		</div>
		
		

	</header>  
	

	
	<!-- <dl class="filters">
		<dt> Filters </dt>
		<dd class="filter all"> All </dd>
		<dd class="filter adventure"> Adventure </dd>
		<dd class="filter product"> Product </dd>
		<dd class="filter artwork"> Artwork </dd>
		<dd class="filter other"> Other </dd>
	</dl> -->

    <ul class="posts">
     	<li>
			<figure>
	     		<a href="post" class="permalink">
     				<img src="img/content/adventures/la_01.jpg" alt="Los Angeles" />
	     		</a>
				<a href="contributor" class="author">
					<img src="img/content/contributors/boyce.jpg" alt="Boyce"/>
				</a>
				<nav class="tags">
					<a href="tag" class="tag">Los Angeles</a>
					<a href="tag" class="tag">Another Tag</a>
				</nav>
				<figcaption>
					<a href="post" class="permalink">
						<h3> Keep Swimming </h3>
					</a>
				</figcaption>
			</figure>
     	</li>
     	<li>
			<figure>
	     		<a href="post" class="permalink">
     				<img src="img/content/adventures/la_02.jpg" alt="London" />
	     		</a>
				<a href="contributor" class="author">
					<img src="img/content/contributors/boyce.jpg" alt="Boyce"/>
				</a>
				<nav class="tags">
					<a href="tag" class="tag">Los Angeles</a>
					<a href="tag" class="tag">Another Tag</a>
				</nav>
				<figcaption>
					<a href="post" class="permalink">
						<h3> More Los Angeles </h3>
					</a>
				</figcaption>
			</figure>
     	</li>
     	<li>
			<figure>
	     		<a href="post" class="permalink">
     				<img src="img/content/adventures/tokyo_03.jpg" alt="Tokyo" />
	     		</a>
				<a href="contributor" class="author">
					<img src="img/content/contributors/boyce.jpg" alt="Boyce"/>
				</a>
				<nav class="tags">
					<a href="tag" class="tag">Tokyo</a>
					<a href="tag" class="tag">Another Tag</a>
				</nav>
				<figcaption>
					<a href="post" class="permalink">
						<h3> Tokyo </h3>
					</a>
				</figcaption>
			</figure>
     	</li>
     	<li>
			<figure>
	     		<a href="post" class="permalink">
     				<img src="img/content/adventures/london_004.jpg" alt="London" />
	     		</a>
				<a href="contributor" class="author">
					<img src="img/content/contributors/boyce.jpg" alt="Boyce"/>
				</a>
				<nav class="tags">
					<a href="tag" class="tag">Los Angeles</a>
					<a href="tag" class="tag">Another Tag</a>
				</nav>
				<figcaption>
					<a href="post" class="permalink">
						<h3> Keep Swimming </h3>
					</a>
				</figcaption>
			</figure>
     	</li>
     	<li>
			<figure>
	     		<a href="post" class="permalink">
     				<img src="img/content/adventures/travels_003" alt="Travels" />
	     		</a>
				<a href="contributor" class="author">
					<img src="img/content/contributors/boyce.jpg" alt="Boyce"/>
				</a>
				<nav class="tags">
					<a href="tag" class="tag">Los Angeles</a>
					<a href="tag" class="tag">Another Tag</a>
				</nav>
				<figcaption>
					<a href="post" class="permalink">
						<h3> Travels Far and Wide </h3>
					</a>
				</figcaption>
			</figure>
     	</li>
		
		
     	<li>
			<figure>
	     		<a href="post" class="permalink">
     				<img src="img/content/adventures/london_003.jpg" alt="Tokyo" />
	     		</a>
				<a href="contributor" class="author">
					<img src="img/content/contributors/boyce.jpg" alt="Boyce"/>
				</a>
				<nav class="tags">
					<a href="tag" class="tag">Tokyo</a>
					<a href="tag" class="tag">Another Tag</a>
				</nav>
				<figcaption>
					<a href="post" class="permalink">
						<h3> Tokyo </h3>
					</a>
				</figcaption>
			</figure>
     	</li>
     	<li>
			<figure>
	     		<a href="post" class="permalink">
     				<img src="img/content/products/Hoodie_01.jpg" alt="London" />
	     		</a>
				<a href="contributor" class="author">
					<img src="img/content/contributors/boyce.jpg" alt="Boyce"/>
				</a>
				<nav class="tags">
					<a href="tag" class="tag">Los Angeles</a>
					<a href="tag" class="tag">Another Tag</a>
				</nav>
				<figcaption>
					<a href="post" class="permalink">
						<h3> Keep Swimming </h3>
					</a>
				</figcaption>
			</figure>
     	</li>
     	<li>
			<figure>
	     		<a href="post" class="permalink">
     				<img src="img/content/products/Unknown.jpeg" alt="Travels" />
	     		</a>
				<a href="contributor" class="author">
					<img src="img/content/contributors/boyce.jpg" alt="Boyce"/>
				</a>
				<nav class="tags">
					<a href="tag" class="tag">Los Angeles</a>
					<a href="tag" class="tag">Another Tag</a>
				</nav>
				<figcaption>
					<a href="post" class="permalink">
						<h3> Travels Far and Wide </h3>
					</a>
				</figcaption>
			</figure>
     	</li>
		
		
   		<!-- <li style="background-image:url(img/content/adventures/la_03.jpg)">
     		<a href="post" class="permalink">

     		</a>

			<h6> Paramount </h6>
     	</li>
     	<li style="background-image:url(img/content/adventures/london_003.jpg)">
     		<a href="post" class="permalink">
     			<h6> Eats Eggslut </h6>
     		</a>
     	</li>
   		<li style="background-image:url(img/content/adventures/tokyo_03.jpg)">
     		<a href="post" class="permalink">
     			<h6> Post Title </h6>
     		</a>
     	</li>
     	<li style="background-image:url(img/content/products/Beanie.jpg)">
     		<a href="post" class="permalink">
     			<h6> Product </h6>
     		</a>
     	</li>
   		<li style="background-image:url(img/content/adventures/travels_003.jpg)">
     		<a href="post" class="permalink">
     			<h6> Post Title </h6>
     		</a>
     	</li>
     	<li style="background-image:url(img/content/adventures/la_02.jpg)">
     		<a href="post" class="permalink">
     			<h6> Post Title </h6>
     		</a>
     	</li>
     	<li style="background-image:url(img/content/products/Unknown.jpeg)">
     		<a href="post" class="permalink">
     			<h6> New Product </h6>
     		</a>
     	</li>
   		<li style="background-image:url(img/content/adventures/travels_002.jpg)">
     		<a href="post" class="permalink">
     			<h6> Post Title </h6>
     		</a>
     	</li>
     	<li style="background-image:url(img/content/lookbook/hitch_04.jpg)">
     		<a href="post" class="permalink">
     			<h6> Post Title </h6>
     		</a>
     	</li>
     	<li style="background-image:url(img/content/products/Hoodie_01.jpg)">
     		<a href="post" class="permalink">
     			<h6> Other Product </h6>
     		</a>
     	</li>
   		<li style="background-image:url(img/content/adventures/london_004.jpg)">
     		<a href="post" class="permalink">
     			<h6> Post Title </h6>
     		</a>
     	</li> -->
    </ul>
	
    <button id="load"> Load More Stuff </button>


<?php include_once'inc/footer.inc' ?>