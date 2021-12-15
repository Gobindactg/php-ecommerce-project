
<?php
ob_start();
if(isset($_POST['save_category'])){
		$category_name = $_POST['category_name'];
		$category_description = $_POST['category_description'];

		$connection = mysqli_connect('localhost','root','','user_info');
		if(!$connection){
			die("Not connected". mysqli_error()); 
		}

		$query = "INSERT INTO category_table (category_name, category_description) VALUES ('$category_name', '$category_description')";
		if(mysqli_query($connection,$query)){
		$query_result = mysqli_query($connection,$query);
		 
		   
		}else{
			die ('Query Problem'.mysqli_error($connection));
		}
	}
	

?>
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content" style="background-color:rgb(200, 206, 212); color:black; font-size:20px; padding-top:8px">
						<form class="form-horizontal" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Category Name </label>
							  <div class="controls">
								<input type="text" name="category_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								
							  </div>
							</div>
						         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category_description</label>
							  <div class="controls">
								<textarea class="cleditor" name="category_description" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" name="save_category" class="btn btn-primary">Save category</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
			