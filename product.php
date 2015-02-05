<?php include_once'inc/head.inc' ?>
<?php include_once'inc/header.inc' ?>

<article class="product">
	
	<nav class="breadcrumb">
		<ul>
			<li> <a href="shop"> Shop </a> </li>
			<li> <a href="shop/mens"> Mens </a> </li>
			<li> <a href="shop/mens/hoodies"> Hoodies </a> </li>
			<li> <a href="product">This Product</a></li>
		</ul>
	</nav>
	
	<header>
	<div class="swipe" id="product-images">
		<div class="swipe-wrap">
			<div><img src="img/content/products/Hoodie_01.jpg" alt="Product Caption"></div>
			<div><img src="img/content/products/Hoodie_01.jpg" alt="Product Caption"></div>
			<div><img src="img/content/products/Hoodie_01.jpg" alt="Product Caption"></div>
			<div><img src="img/content/products/Hoodie_01.jpg" alt="Product Caption"></div>
			<div><img src="img/content/products/Hoodie_01.jpg" alt="Product Caption"></div>
		</div>
		<div class="button prev" onclick='product.prev()'> <span class="icon icon-left"> </span> </div> 
    	<div class="button next" onclick='product.next()'> <span class="icon icon-right"> </span> </div>
	</div>
	<aside class="product-details">
		<h2> Product Name </h2>	
		<h6 class="price"> <strong>40.00</strong> </h6>

	   <form action="cart" id="product-selections">
		   <!-- <input type="radio" name="color" value="black">
		   		<span>
			   		<div class="swatch" style="background-color:#222;"> </div>
			   		<br> Black
		   		</span>
		   <input type="radio" name="color" value="grey">
		   		<span>
			   		<div class="swatch" style="background-color:#999;"> </div>
			   		<br> Grey
		   		</span>
		   <input type="radio" name="color" value="white">
		   		<span>
			   		<div class="swatch" style="background-color:#FFF;"> </div>
			   		<br> White
		   		</span>
		   <hr>
	   	   <input type="radio" name="size" value="xs"> XS
 		   <input type="radio" name="size" value="s"> S
 		   <input type="radio" name="size" value="m"> M
		   <input type="radio" name="size" value="l"> L
		   <input type="radio" name="size" value="xl"> XL

		   <hr> -->
		   
		   <!-- <ul>
		   	 <li>
				 <dl>
		   	 		<dt>Color</dt>
					<dd></dd>
		   	 	</dl>
			 </li>
			 <li>
				 <dl>
				 	<dt>Size</dt>
					<dd></dd>
				 </dl>
			 </li>
		   </ul> -->
		   <hr />
		  
		   <select name="" id="">
				<option value=""> Color </option>
				<option value=""> Black </option>
				<option value=""> Grey </option>
				<option value=""> White </option>
		   </select>
		   
		   <select name="" id="">
			    <option value=""> Size </option>
				<option value=""> X Small </option>
				<option value=""> Small </option>
				<option value=""> Medium </option>
				<option value=""> Large </option>
				<option value=""> X Large </option>
		   </select>
		   
		   <select name="" id="">
		   	<option value="-1"> Quantity </option>
			<option value="">1</option>
			<option value="">2</option>
			<option value="">3</option>
			<option value="">4</option>
			<option value="">5</option>
			<option value="">6</option>
			<option value="">7</option>
			<option value="">8</option>
			<option value="">9</option>
			<option value="">10</option>
			
		   </select>	  	
		  
		  
	 	  <input type="submit" value="Add to Cart" />
		  <hr /> 

	   </form>
	   
		<h6>Details</h6>
	
		<p>Product description goes here. Lots of stuff to describe. Custom this and that. New these and those.</p>
	
		<h6>Sizing</h6>
		<p>
			Notes on size. <a href="#size-chart">Size Chart</a>
		</p>
	
		<h6>Shipping</h6>
		<p>
			Notes on shipping
		</p>
	   
	</aside>
	</header>
	<section>
	</section>
	    
	<section class="related-products">
		<h3>Recommended Products</h3>
	    <ul>
	        <li class="product">
	           <a href="" class="permalink">
	               <img src="img/content/products/Black_T_.jpg" alt="Product Caption">
	               <h6> Product Name </h6>
	           </a>
	        </li>
	        <li class="product">
	           <a href="" class="permalink">
	               <img src="img/content/products/LONGT_.jpg" alt="Product Caption">
	               <h6> Product Name </h6>
	           </a>
	        </li>

	        <li class="product">
	           <a href="" class="permalink">
	               <img src="img/content/products/Crew.jpg" alt="Product Caption">
	               <h6> Product Name </h6>
	           </a>
	        </li>
	    </ul>
	</section>
	
	
   

</article>

<?php include_once'inc/footer.inc' ?>