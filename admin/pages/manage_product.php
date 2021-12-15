<?php
if(isset($_GET['success'])){
	echo "<h3 style='color:green;'> Product Information Updated Successfully </h3>";
}


require '../admin/function.php';
$query_result = veiw_product_info();

  
  	/* if(isset($_GET['p_status'])){
	   $product_id=$_GET['product_id'];
	

if($_GET['p_status'] == 'unpublished'){
		$message = unpublished_manufacturer_info($manufacturer_id);
	}
	else if($_GET['p_status'] == 'published'){
		$message = published_manufacturer_info($manufacturer_id);
	}
	if($_GET['p_status'] == 'active'){
		$message = active_product_info($product_id);
	}
	else if($_GET['p_status'] == 'deletion'){
		$message = deletion_product_info($product_id);
	}
   }*/
?>




<link rel="stylesheet" href="./css/veiw_catagory.css">
<div style="width:100% ; margin:10px auto;">


<form action="" method="post">
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						
						<div class="box-icon">
							
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>product ID</th>
								  <th>Product Name</th>
								  <th>Category Name</th>
								  <th>Manufacturer Name</th>
								  <th>Product Price</th>
								  <th>Product Quantity</th>
								  <th>Publication_status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php while ($rows=mysqli_fetch_assoc($query_result)){ ?>
								<td class="center"><?php echo $rows['product_id'];?></td>
								<td class="center"><?php echo $rows['product_name'];?></td>
								<td class="center"><?php echo $rows['content_name'];?></td>
								<td class="center"><?php echo $rows['manufacturer_name'];?></td>
								<td class="center"><?php echo $rows['product_price'];?></td>
								<td class="center"><?php echo $rows['product_quantity'];?></td>
								<td class="center">
									
								 <?php if($rows['publication_status']==1){echo "<h3 style='color:green;'>Published</h3>";	}?>
									<?php if ($rows['publication_status']==0){ echo "<h3 style='color:red;'>Unpublished</h3>"; 	}?> </td>
								


								<td class="center">
								<?php if($rows['publication_status'] ==1){?>
									<a class="btn btn-info" href="veiw_product.php?product_id=<?php echo $rows['product_id']; ?>" title="Veiw">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-success" href="?p_status=unpublished&product_id=<?php echo $rows['product_id'];?>" title="Published">
										<i class="halflings-icon white arrow-up"></i>  
									</a>
									<?php }else {?>
										<a class="btn btn-danger" href="?p_status=published&product_id=<?php echo $rows['product_id'];?>" title="Unpublished"> 
										<i class="halflings-icon white arrow-down"></i>  
									</a>

									<?php }?>
									<a class="btn btn-info" href="edit_product.php?product_id=<?php echo $rows['product_id']; ?>" title="Edit">
										<i class="halflings-icon white edit"></i>  
									</a>
									
									<?php if($rows['deletion_status'] ==1){?>
									<a class="btn btn-success" href="?p_status=active&product_id=<?php echo $rows['product_id'];?>" title="active">
										<i class="halflings-icon white trash"></i>  
									</a>
									<?php }else {?>
										<a class="btn btn-danger" href="?p_status=deletion&product_id=<?php echo $rows['product_id'];?>" title="deleted"> 
										<i class="halflings-icon yellow trash"></i>  
									</a>
									<?php }?>
							
								</td>
							</tr>
							<?php
								}
							?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

</form>
</div>