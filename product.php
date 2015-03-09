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
		
		<div class="product-info">
			<h2> Product Name </h2>	
			<p class="description">
				Product description goes here. Lots of stuff to describe. Custom this and that. New these and those.
			</p>
		</div>
		<div class="swipe" id="product-images">
			<div class="swipe-wrap">
				<div><img src="img/content/products/Hoodie_01.jpg" alt="Product Caption"></div>
				<div><img src="img/content/products/Hoodie_01.jpg" alt="Product Caption"></div>
			</div>
			<h6> 
				<span class="button prev" onclick='product.prev()'> </span>
		    	<span class="button next" onclick='product.next()'> </span>
			</h6>
			
		</div>
		<aside class="product-actions">
			<h6 class="price"> <strong> £40.00</strong> </h6>

		   <form action="cart" id="product-selections">
			   <!-- <select name="" id="">
					<option value=""> Color </option>
					<option value=""> Black </option>
					<option value=""> Grey </option>
					<option value=""> White </option>
			   </select> -->
		   
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
		  
			  <br /> 
		 	  <input type="submit" value="Add to Cart" id="add-to-cart" />
		  

		   </form>
	   
			<!-- <h6>Details</h6>

			<h6>Sizing</h6>
			<p>
				Notes on size. <a href="#size-chart">Size Chart</a>
			</p>

			<h6>Shipping</h6>
			<p>
				Notes on shipping
			</p> -->
	   
		</aside>
		<section class="sizing">
			<h5 class="open-size-chart">Sizing Chart</h5>
		</section>
		
		<section class="size-chart">
			<span class="close-size-chart icon-close"></span>
			<div class="size-chart-float">
				<img src="img/content/products/sizechart.png" alt="Sizechart">
			</div>
		</section>
		
	</header>
	<section class="product-detail-images">
		  <img src="img/content/products/Hoodie_01.jpg"  alt="Hoodie 01">
		  <img src="img/content/products/Black_T_.jpg" alt="Black T">
		  <img src="img/content/products/img-thing.jpeg" alt="Img Thing">   
	</section>
</article>    

<section class="related-products">
	<h3>Related Products</h3>
    <ul>
        <li>
           <a href="" class="permalink">
               <img src="img/content/products/all/Beanie_Suffoca-400x400.jpg" alt="Product Caption">
               <!-- <h6> Product Name </h6> -->
           </a>
        </li>
        
		<li>
           <a href="" class="permalink">
               <img src="img/content/products/all/Suffoca_Crew_Type_Full-400x400.gif" alt="Product Caption">
               <!-- <h6> Product Name </h6> -->
           </a>
        </li>

        <li>
           <a href="" class="permalink">
               <img src="img/content/products/all/Suffoca_Script_Front-400x400.jpg" alt="Product Caption">
               <!-- <h6> Product Name </h6> -->
           </a>
        </li>	
    </ul>
	
</section>
	
	
   



<?php include_once'inc/footer.inc' ?>