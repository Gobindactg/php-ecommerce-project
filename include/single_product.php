
<?php

$product_id = $_GET['product_id'];
$query_result = single_product_details($product_id);
$result = mysqli_fetch_assoc($query_result);
$content_id = $result['content_id'];
$related_query_result = select_product_info_by_category_id($content_id);
$related_query_result_display = select_product_info_display_by_category_id($content_id);

if(isset($_POST['btn'])){
  // $product_id = $_POST['product_id'];
   save_cart_product_info($_POST);
}
?>


<div class="men">
	<div class="container">
	  <div class="single_top">
	       <div class="col-md-9 single_right">
	   	       <div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="admin/<?php echo $result['product_image'];?>" class="img-responsive" />
									<img class="etalage_source_image" src="admin/<?php echo $result['product_image'];?>" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="admin/<?php echo $result['product_image'];?>" class="img-responsive" />
								<img class="etalage_source_image" src="admin/<?php echo $result['product_image'];?>" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="admin/<?php echo $result['product_image'];?>" class="img-responsive"  />
								<img class="etalage_source_image" src="admin/<?php echo $result['product_image'];?>"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="admin/<?php echo $result['product_image'];?>" class="img-responsive"  />
								<img class="etalage_source_image" src="admin/<?php echo $result['product_image'];?>"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				    <h1 style="font-size:15px; font-weight:900;" ><?php echo $result['product_name'];?></h1>
				    <h4 ><span style="font-size:15px; font-weight:600;"> Category Name. </span><?php echo $result['content_name'];?> </h4>
					<h4 ><span style="font-size:15px; font-weight:600;"> Manufacturer Name. </span><?php echo $result['manufacturer_name'];?> </h4>
					<h4 ><span style="font-size:15px; font-weight:600;"> Stock Quantity. </span><?php echo $result['product_quantity'];?> </h4>
					<h4 ><span style="font-size:15px; font-weight:600;"> BDT. </span><?php echo $result['product_price'];?> </h4>
					
					
					
				    <div class="btn_form">
						<form action="" method="post">
						   <input type="number" name="product_quantity" value="1"><br>
						   <input type="hidden" name="product_id" value="<?php echo $result['product_id'];?>">
							
							<input type="submit" name="btn" value="ADD TO CART">
						</form>
					 </div>
					 
				  </div>
				  <div class="clearfix"></div>	
       </div>
       <div class="col-md-3">
      	<!-- FlexSlider -->
              <section class="slider_flex">
				  <div class="flexslider">
					<ul class="slides">
					<?php while($rows = mysqli_fetch_assoc($related_query_result_display)){ ?>
						<li><img src="admin/<?php echo $rows['product_image'];?>" class="img-responsive" alt=""/></li>
						<?php } ?>
					
				    </ul>
				  </div>
	          </section>
<!-- FlexSlider -->
      </div>
      <div class="clearfix"> </div>
     </div>
       <div class="toogle">
     	<h2>Product Details</h2>
     	<p class="m_text2"><?php echo $result['product_short_description'];?></p>
     </div>
     <div class="toogle">
     	<h2>More Information</h2>
     	<p class="m_text2"><?php echo $result['product_long_description'];?></p>
     </div>
     <h4 class="head_single">Related Products</h4>
     <div class="span_3">
		 <?php while($rows = mysqli_fetch_assoc($related_query_result)){ ?>
	          	 <div class="col-sm-3 grid_1">
	          	    <a href="single_product.php?product_id=<?php echo $rows['product_id'];?>">
				     <img style="height:150px;" src="admin/<?php echo $rows['product_image'];?>" class="img-responsive" alt=""/>
				     <h3><?php echo $rows['product_name'];?></h3>
					 <h4><?php echo $result['manufacturer_name'];?></h4>
				   	 <h4>BDT. <?php echo $rows['product_price'];?></h4>
			         </a>  
				  </div> 
				  <?php } ?>
				  <div class="clearfix"></div>
				 
	     </div>
      </div>
</div>