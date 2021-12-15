<?php
$content_id = $_GET['content_id'];
$related_query_result_display = select_product_info_display_by_category_id($content_id);
?>

<div class="sellers_grid">
			<ul class="sellers">
				<i class="star"> </i>
				<li class="sellers_desc"><h2>Best Sports</h2></li>
				<div class="clearfix"> </div>
			</ul>
		</div>
		<div class="grid_2" >
		<?php while($rows = mysqli_fetch_assoc($related_query_result_display)) {?>
			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img style="height:200px;" src="admin/<?php echo $rows['product_image'];?>" class="img-responsive" alt=""/>
				 <div class="sale-box"> </div>
				 <div class="desc">
				 	<h3><?php echo $rows['product_name'];?></h3>
				 	<h4> BDT <?php echo $rows['product_price'];?></h4>
				 	<ul class="list2">
				 	  <li class="list2_left"><span class="m_1"><a href="#" class="link">Add to Cart</a></span></li>
				 	  <li class="list2_right"><span class="m_2"><a href="single_product.php?product_id=<?php echo $rows['product_id'];?>" class="link1">See More</a></span></li>
				 	  <div class="clearfix"> </div>
				 	</ul>
				 	<div class="heart"> </div>
				 </div>
			   </div>
			</div>
			<?php } ?>
		  <div class="clearfix"> </div>
		</div>