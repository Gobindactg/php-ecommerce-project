
<h4 style="color:red">
<?php

if(isset($_POST['product_manufacturer'])){
		$manufacturer_name = $_POST['manufacturer_name'];
		$product_description = $_POST['product_description'];
		$publication_status = $_POST['publication_status'];
				
		$connection = mysqli_connect('localhost','root','','user_info');
		if(!$connection){
			die("Not connected". mysqli_error()); 
		}
		$query = "INSERT INTO product_manufacturer (user_name, manufacturer_name, product_description, publication_status) VALUES ('$_SESSION[admin_name]', '$manufacturer_name', '$product_description', '$publication_status')";
		$query_result = mysqli_query($connection,$query);
		if($query_result){
		header('location:product_manufacturer.php');
		
		}
	}
	?>
	</h4>
	
<?php
if(isset($_REQUEST['updated'])){
	echo "You information updated Successfully";
}
?>

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Poduct_Manufacturer Form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Manufacturer Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="manufacturer_name" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								
							  </div>
							</div>
							        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product_description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_description" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="fileInput">Publication Status</label>
							  <div class="controls">
								<select name="publication_status" id="">
                                    <option value="">Select Publication Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" name="product_manufacturer" class="btn btn-primary">Save Content</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->