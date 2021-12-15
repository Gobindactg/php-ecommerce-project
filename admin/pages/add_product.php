<?php
require '../admin/function.php';
if(isset($_POST['save_product'])){
   
	require "add_product_function.php";	
    
}

if(isset($_GET['success'])){
	echo "<h3 style='color:green;'>Your Product Information save successfully</h3>";
}

/*
        $connection = mysqli_connect('localhost','root','','user_info');
        if(!$connection){
            die("Not connected". mysqli_error()); 
        }

           $query = "INSERT INTO product_table(product_name, content_id, manufacturer_id, product_price, product_quantity, product_sku, product_short_description, product_long_description, publication_status) VALUES ('$product_name', '$content_id', '$manufacturer_id', '$product_price', '$product_quantity', '$product_sku', '$product_short_description', '$product_long_description', '$publication_status')";
           //$query = "INSERT INTO product_table(product_name, content_id, manufacturer_id, product_price, product_quantity, product_sku, product_short_description, product_long_description, publication_status) VALUES ('$data[product_name]', '$data[content_id]', '$data[manufacturer_id]', '$data[product_price]', '$data[product_quantity]', '$data[product_sku]', '$data[product_short_description]', '$data[product_long_description]', '$data[publication_status]')";          
           
           //  $query ="INSERT INTO product_table(product_name, content_id, manufacturer_id, product_price) VALUES ('$data[product_name]', '$data[content_id]', '$data[manufacturer_id]', '$data[product_price]')";
                $result = mysqli_query($connection, $query);            
		  		if($result){
                   // echo "product info save successfully";
					header('location: add_product.php');
                    
                     }else{
                         echo "query Problem";
                            }
                           
                        }
	*/


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
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="" name="product_name">
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
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="" name="product_price">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Product Quantity</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="" name="product_quantity">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Product Sku</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="" name="product_sku">
								</div>
							  </div>
                              <div class="control-group hidden-phone">
								<label class="control-label" for="textarea2">Product Short description</label>
								<div class="controls">
									<textarea class="cleditor" name="product_short_description" id="textarea2" rows="3"></textarea>
								</div>
							  </div>
							  <div class="control-group hidden-phone">
								<label class="control-label" for="textarea2">Product Long description</label>
								<div class="controls">
									<textarea class="cleditor" name="product_long_description" id="textarea2" rows="3"></textarea>
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
								<button type="submit" class="btn btn-primary" name="save_product">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->