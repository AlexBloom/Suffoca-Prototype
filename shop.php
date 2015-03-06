<?php include_once'inc/head.inc' ?>
<?php include_once'inc/header.inc' ?>

	
	<header id="shop-header" style="background-image:url(img/content/lookbook/hitch_01.jpg)">		 
		<section class="open-lookbook">
			<h1 class="title">Spring 2015 Lookbook</h1>
            <h2 class="subtitle"> <button type="reset"> View  </button>  </h2>			
		</section>		
	</header>  
	
	<section id="lookbook-modal">
		<div id="lookbook" class="swipe">
			<div class="swipe-wrap">
				<div> <img src="img/content/lookbook/hitch_01.jpg" alt="Hitch 01">  </div>
				<div> <img src="img/content/lookbook/hitch_02.jpg" alt="Hitch 02">  </div>
				<div> <img src="img/content/lookbook/hitch_03.jpg" alt="Hitch 03">  </div>
				<div> <img src="img/content/lookbook/hitch_04.jpg" alt="Hitch 04">  </div>
				<div> <img src="img/content/lookbook/hitch_05.jpg" alt="Hitch 05">  </div>				
			</div>
			<h3 class="lookbook-title"> SPRING 2015 </h3>
			<div class="button prev" onclick='lookbook.prev()'> <span class="icon icon-left"> </span> </div> 
	    	<div class="button next" onclick='lookbook.next()'> <span class="icon icon-right"> </span> </div>
			<span class="close-lookbook"> <span class="icon-close"> </span> </span>
		</div>
		
	</section>
	
	
	<dl class=" filters">
		<dt> FILTER </dt>
		<dd class="filter all active"> All </dd>
		<dd class="filter shortsleeve"> Shortsleeve  </dd>
		<dd class="filter longsleeve"> Longsleeve </dd>
		<dd class="filter misc"> Misc </dd>
		<dd class="filter art"> Art </dd>
	</dl>

    <ul class="products">
        <li class="product">
           <a href="product" class="permalink">
              <img src="img/content/products/all/Beanie_Suffoca-400x400.jpg" alt="Beanie Suffoca 400x400">
               <!-- <h6> Product Name </h6> -->
			   <!-- <p class="price"> £15.00 </p> -->
           </a>
        </li>
        <li class="product">
           <a href="product" class="permalink">
               <img src="img/content/products/all/Stickerset-400x400.jpg"  alt="Stickerset 400x400">
               <!-- <h6> Product Name </h6> -->
			   <!-- <p class="price"> £5.00 </p> -->
           </a>
        </li>
        <li class="product">
           <a href="product" class="permalink">
               <img src="img/content/products/all/Suffoca_Bean_Flannel-400x400.jpg"  alt="Suffoca Bean Flannel 400x400">
               <!-- <h6> Product Name </h6> -->
			   <!-- <p class="price"> £32.00 </p> -->
           </a>
        </li>
        <li class="product">
           <a href="" class="permalink">
               <img src="img/content/products/all/Suffoca_BirdFullMove-400x400.gif"  alt="Suffoca BirdFullMove 400x400">
               <!-- <h6> Product Name </h6> -->
			   <!-- <p class="price"> £22.00 </p> -->
           </a>
        </li>
        <li class="product">
           <a href="" class="permalink">
               <img src="img/content/products/all/Suffoca_Clubhouse_Full-400x400.gif" alt="Suffoca Clubhouse Full 400x400">
               <!-- <h6> Product Name </h6> -->
			   <!-- <p class="price"> £22.00 </p> -->
           </a>
        </li>
        <li class="product">
           <a href="" class="permalink">
               <img src="img/content/products/all/Suffoca_Crew_Type_Full-400x400.gif" alt="Suffoca Crew Type Full 400x400">
               <!-- <h6> Product Name </h6> -->
			   <!-- <p class="price"> £28.00 </p> -->
           </a>
        </li>
        <li class="product">
           <a href="" class="permalink">
			   <img src="img/content/products/all/Suffoca_Script_Front-400x400.jpg"  alt="Suffoca Script Front 400x400">
               <!-- <h6> Product Name </h6> -->
			   <!-- <p class="price"> £16.00 </p> -->
           </a>
        </li>
        <li class="product">
           <a href="" class="permalink">
			   <img src="img/content/products/all/Suffoca_Skull-400x400.gif" alt="Suffoca Skull 400x400">
               <!-- <h6> Product Name </h6> -->
			   <!-- <p class="price"> £15.00 </p> -->
           </a>
        </li>
        <li class="product">
           <a href="" class="permalink">
               <img src="img/content/products/all/Suffoca_Strike_Full-400x400.gif" alt="Suffoca Strike Full 400x400">
               <!-- <h6> Product Name </h6> -->
			   <!-- <p class="price"> £15.00 </p> -->
           </a>
        </li>
    </ul>

<?php include_once'inc/footer.inc' ?>