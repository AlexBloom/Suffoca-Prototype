<?php include_once'inc/head.inc' ?>
<?php include_once'inc/header.inc' ?>


<article class="post">
    <header class="post-header" style="background-image:url(img/content/adventures/blogtest.jpg)">
		
		<div class="post-title">
			<span class="date">2015.01.18</span>
	        <h1 class="title">Roam Where You Want To</h1>
	        <p class="subtitle">Article Subtitle or introductory text that goes from a few words to a paragraph.</p>
		</div>
		
 		<div class="meta">
 	        <div class="author"> 
 				<p>
					<a class="author-link" href="contributor">
 						<img src="img/content/contributors/boyce.jpg" alt="Boyce" /> 
						<span class="name"> Boyce </span>
					</a>
 				</p> 
 			</div>	
       </div>
	    <!-- <ul class="tags">
            <li><a href="#"> London </a> </li>
            <li><a href="#"> Fun With Friends </a> </li>
            <li><a href="#"> Los Angeles </a> </li>
        </ul> -->
		
    </header>
	
	<section class="post-content">
	   	<nav class="share">
			Share
	   		<a href="http://facebook.com/share"><span class="icon-facebook"></span></a>
	   		<a href="http://twitter.com/share"><span class="icon-twitter"></span></a>
	   		<a href="http://tumblr.com/share"><span class="icon-tumblr"></span></a>
			<a href="http://google.com/share"><span class="icon-google-plus"></span></a>
	   	</nav>

		
			<img src="img/content/adventures/blogtest2.jpg" alt="Deer">
	
			<p> An amazing installation called Spectra, by Japanese artist Ryoji Ikeda was put up next to the House of Lords to commemorate those in world war 2. The visuals topped with the composed sounds, was a truly body tingling exsperience , it was hard not to feel something when gazing at the huge beams of light connecting us from the ground to the skys.</p>
		
			<img class="half" src="img/content/adventures/post/6K3A1889.jpg" alt="6K3A1889">
			<!-- <img class="half" src="img/content/adventures/post/6K3A0960.jpg"  alt="6K3A0960"> -->
			<img class="half" src="img/content/adventures/post/6K3A1671.jpg" alt="6K3A1671">
		
			<img class="half" src="img/content/adventures/post/6K3A1632-Edit.jpg" alt="6K3A1632 Edit">
			<img class="half" src="img/content/adventures/post/6K3A1816.jpg" alt="6K3A1816">
		
			<img src="img/content/adventures/post/6K3A1165.jpg" alt="6K3A1165">
	        <p>This trip was amazing. I really needed it, so stoked to see what life is like outside of DC. More to come.</p>
			<img src="img/content/adventures/post/6K3A8666.jpg" alt="6K3A8666">
        	<blockquote> This was a truly awesome summer adventure, I highly recommend taking a bunch of your friends and taking it to the hills. </blockquote>
			<iframe width="1020" height="574" src="//www.youtube.com/embed/JTzae0fPzzM" frameborder="0" allowfullscreen></iframe>
			<p>Thirteen of us decided it was time to take a trip together to the south of Spain, to let loose and have some long hangouts with good food and even better company.</p>
	        <figure>
	            <img src="img/content/adventures/post/6K3A1448.jpg" alt="6K3A1448">
	            <figcaption> Hiding in the cacti. This could be a caption style for when you want to make notes about a particular image that don't fall within the normal importance of paragraphs. </figcaption>
	        </figure>
       
			
        		
			
				
			
		
			
		<section>
			<p>Paragraphs of text</p>
			<img src="img/content/adventures/post/6K3A1019.jpg">
	        <figure>
	            <blockquote> If you don't build your dream, someone will hire you to help build theirs. Quote inside of a figure for when you want to share the author name. </blockquote>
	            <figcaption> — quote author. </figcaption>
	        </figure>
	    </section>
	
	</section>
	
    <footer> 
		<!-- <h6>20 Comments <button class="show-comments"> SHOW </button> </h6> -->
		
		<section class="comments">
			<div class="th-comment-area">
				<div id="disqus_thread">
				</div>

				<script type="text/javascript">
				var disqus_url = 'http://thehundreds.com/suffoca-the-big-smoke/';
				var disqus_identifier = '185030 http://thehundreds.com/?p=185030';
				var disqus_container_id = 'disqus_thread';
				var disqus_shortname = 'staging-thehundreds';
				var disqus_title = "SUFFOCA :: THE BIG SMOKE";
				var disqus_config_custom = window.disqus_config;
				var disqus_config = function () {
				    /*
				    All currently supported events:
				    onReady: fires when everything is ready,
				    onNewComment: fires when a new comment is posted,
				    onIdentify: fires when user is authenticated
				    */
    
				    this.page.remote_auth_s3 = 'W10= 74c4f5ec88a079215e1742e6f892a90659b54e7a 1421446251';
				this.page.api_key = 'CVWbmHctmjurQUsWuU62UyN9YbHtsETYf1KnFNxtFGHb5xmGc7lOIv6meVBg6KW1';
				this.sso = {     
				          name: "The Hundreds",       
				          button: "",       
				          url: "http://thehundreds.com/wp-login.php",        
				          logout: "http://thehundreds.com/wp-login.php?action=logout",       
				          width: "800",        
				          height: "700"        
				    };
				    this.language = '';
				        this.callbacks.onReady.push(function () {

				        // sync comments in the background so we don't block the page
				        var script = document.createElement('script');
				        script.async = true;
				        script.src = '?cf_action=sync_comments&post_id=185030';

				        var firstScript = document.getElementsByTagName('script')[0];
				        firstScript.parentNode.insertBefore(script, firstScript);
				    });
    
				    if (disqus_config_custom) {
				        disqus_config_custom.call(this);
				    }
				};

				(function() {
				    var dsq = document.createElement('script'); dsq.type = 'text/javascript';
				    dsq.async = true;
				    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				})();
				</script>
			</div>
		</section>
    </footer>
</article>
<div class="pagination">
	<!-- <a href="post" class="prev">
		<span class="icon-left"> </span>
		<span class="prev-post-text">Prev Post Title</span>
	</a> -->
	<!-- <a href="post" class="next">
		<span class="next-post-text">Next Post Title </span>
		<span class="icon-right"> </span>
	</a> -->
		
	<a href="post" class="next-up" style="background-image:url(img/content/adventures/post/6K3A1889.jpg)"> 
		<h6>NEXT UP</h6>
		<h1 class="post-title"> Riding the Clouds </h1>
		<p class="subtitle"> What if we go on another adventure? </p>
	</a>	
</div>


<?php include_once'inc/footer.inc' ?>