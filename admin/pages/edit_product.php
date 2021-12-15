<?php
require '../admin/function.php';
//require "add_product_function.php";	

$product_id=$_GET['product_id'];
$product_query_result = select_product_info_by_id($product_id);
$product_info = mysqli_fetch_assoc($product_query_result);


if(isset($_POST['update_product'])){
  $message = update_product_info($_POST);
 // require "update_product_function.php";
	
    
}

if(isset($_GET['success'])){
	echo "<h3 style='color:green;'>Your Product Information save successfully</h3>";
}


$query_result = select_all_published_category_info();
$manufacturer_result = select_all_published_manufacturer_info();

?>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<h3>
							<?php if(isset($message)){
									echo $message;
									unset($message);
							}?>
						</h3>
						<form class="form-horizontal" method="post" name="edit_product_form" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $product_info['product_name']?>" name="product_name">
								  <input class="input-xlarge focused" id="focusedInput" type="hidden" value="<?php echo $product_info['product_id']?>" name="product_id">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError3">Category Name</label>
								<div class="controls">
								  <select id="selectError3" name="content_id">
								  	<option>---Select Category Name---</option>
									  <?php while($category_info = mysqli_fetch_assoc($query_result)){?>
									<option value="<?php echo $category_info['content_id'];?>"> <?php echo $category_info['content_name'];?></option>
									<?php } ?>
									
								  </select>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError3">Category Name</label>
								<div class="controls">
								  <select id="selectError3" name="manufacturer_id">
									<option>---Select Manufacturer Name---</option>
									<?php while($manufacturer_info = mysqli_fetch_assoc($manufacturer_result)){?>
									<option value="<?php echo $manufacturer_info['manufacturer_id'];?>"> <?php echo $manufacturer_info['manufacturer_name'];?></option>
									<?php } ?>
									
								  </select>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Product Price</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $product_info['product_price']?>" name="product_price">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Product Quantity</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $product_info['product_quantity']?>" name="product_quantity">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Product Sku</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $product_info['product_sku']?>" name="product_sku">
								</div>
							  </div>
                              <div class="control-group hidden-phone">
								<label class="control-label" for="textarea2">Product Short description</label>
								<div class="controls">
									<textarea class="cleditor" name="product_short_description" id="textarea2" rows="3"><?php echo $product_info['product_short_description']?></textarea>
								</div>
							  </div>
							  <div class="control-group hidden-phone">
								<label class="control-label" for="textarea2">Product Long description</label>
								<div class="controls">
									<textarea class="cleditor" name="product_long_description" id="textarea2" rows="3"><?php echo $product_info['product_long_description']?></textarea>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label">Product Image</label>
								<div class="controls">
								  <input name="upload_image" type="file">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError3">Publication Status</label>
								<div class="controls">
								  <select id="selectError3" name="publication_status">
								  <option>---Select Publication Status---</option>
									<option value=1 >Published</option>
									<option value=0 >Unpublished</option>
								  </select>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError3">Best Seller</label>
								<div class="controls">
								  <select id="selectError3" name="best_seller">
								  <option>---Select Best Seller Status---</option>
									<option value=1 >Published</option>
									<option value=0 >Unpublished</option>
								  </select>
								</div>
							  </div>
							 
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary" name="update_product">Update Product</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			<script>
				document.forms['edit_product_form'].elements['content_id'].value='<?php echo $product_info['content_id']?>';
				document.forms['edit_product_form'].elements['manufacturer_id'].value='<?php echo $product_info['manufacturer_id']?>';
				document.forms['edit_product_form'].elements['publication_status'].value='<?php echo $product_info['publication_status']?>';
			</script>