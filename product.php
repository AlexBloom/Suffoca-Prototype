<?php include_once'inc/head.inc' ?>

	<style>
		#shop-link{
			display:none!important;
		}
		#cart-link{
	      display:block!important;
	    }
	</style>
	
<?php include_once'inc/header.inc' ?>

<!-- <nav class="breadcrumb"> 
	<ul>
		<li> <a href="shop"> Shop </a> </li>
		<li> <a href="shop/mens"> Mens </a> </li>
		<li> <a href="shop/mens/hoodies"> Hoodies </a> </li>
		<li> <a href="product">This Product</a></li>
	</ul>
</nav>
-->


<article class="product">
		
		<div class="back-link-container">
			<h6>
				<a href="shop" id="back-to-shop">Back to Shop</a>
			</h6>
		</div>

		<div class="product-slider">			
				<div>
					<header>
						<section class="product-info">
						<h2> Product Name </h2>	
						<p class="description">
							Product description goes here. Lots of stuff to describe. Custom this and that. New these and those.
						</p>
						<h6 class="price"> <strong> £40.00</strong> </h6>
						</section>
					<div class="featured-image">
						<img src="img/content/products/Hoodie_01.jpg" alt="">
					</div>
					<aside class="product-actions">
						   <form action="cart" id="product-selections">
						   
							   <select name="" id="">
								    <option value=""> Size </option>
									<option value=""> X Small </option>
									<option value=""> Small </option>
									<option value=""> Medium </option>
									<option value=""> Large </option>
									<option value=""> X Large </option>
							   </select>	  	
						 	  <input type="submit" value="Buy Now" id="add-to-cart" />
								
						   </form>
					</aside>
					<div class="size-chart-link">
						<p class="open-size-chart"><small>Sizing Chart</small></p>
					</div>
					</header>
					
				</div>			
				<div style="background-image:url(img/content/products/Hoodie_01.jpg);">  </div>
				<div style="background-image:url(img/content/products/Hoodie_01.jpg);"> </div>
				<div style="background-image:url(img/content/products/Black_T_.jpg);"> </div>
				<div style="background-image:url(img/content/products/img-thing.jpeg);"> </div>		
		</div> 
		
		

		<section class="size-chart">
			<span class="close-size-chart">
					<svg class="icon icon-close">
						<use xlink:href="#icon-close"></use>
					</svg> 
			</span>
			<div class="size-chart-float">
				<img src="img/content/products/sizechart.png" alt="Sizechart">
			</div>
		</section>
		
</article>    

<!--  
<section class="related-products">
	<h3>Related Products</h3>
    <ul>
        <li>
           <a href="" class="permalink">
               <img src="img/content/products/all/Beanie_Suffoca-400x400.jpg" alt="Product Caption">
           </a>
        </li>
        
		<li>
           <a href="" class="permalink">
               <img src="img/content/products/all/Suffoca_Crew_Type_Full-400x400.gif" alt="Product Caption">
           </a>
        </li>

        <li>
           <a href="" class="permalink">
               <img src="img/content/products/all/Suffoca_Script_Front-400x400.jpg" alt="Product Caption">
           </a>
        </li>	
         <li>
           <a href="" class="permalink">
               <img src="img/content/products/all/Beanie_Suffoca-400x400.jpg" alt="Product Caption">
           </a>
        </li>
    </ul>	
</section>
-->
<!--
<footer class="shop-footer">
	<div class="shipping">
		<p>Shipping Worldwide - Returns within 10 days of purchase only, unless faulty. <span class="open-size-chart">Sizing Chart</span></p>
	</div>	
	<dl class="payment"> 
		 <dt>Payments Accepted </dt> 
		<dd>Visa</dd>
		<dd>Mastercard</dd>
		<dd>Paypal</dd>
	</dl>
</footer>
-->	
	
   



<?php include_once'inc/footer.inc' ?>