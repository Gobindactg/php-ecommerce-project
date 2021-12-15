
<?php


$manufacturer_id =$_GET['manufacturer_id'];
require "../admin/function.php";
$query_result = select_manufacturer_info_by_id($manufacturer_id);
$category_info = mysqli_fetch_assoc($query_result);


?>


	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Category Form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    
						<form class="form-horizontal" method="post" name="edit_manufacturer_form" action="manufacturer_update.php" >
						  <fieldset>
							<div class="control-group" >
							  <label class="control-label" style="font-size:13px; font-weight:900; font-style:italic, font-family:tahoma;" for="typeahead">Manufacturer Name </label>
							  <div class="controls">
								<input type="text"  name="manufacturer_name" value="<?php echo $category_info['manufacturer_name'];?>" required style="background-color: white; color:black; font-size:20px; width:70%"  class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<input type="hidden" class="span6 typeahead" name="manufacturer_id" value="<?php echo $category_info['manufacturer_id']?>" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
							  </div>
							</div>
		
							  <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2" style="font-size:13px; font-weight:900; font-style:italic, font-family:tahoma;">Manufacturer Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="manufacturer_description" id="textarea2" rows="3"><?php echo $category_info['product_description'];?></textarea>
							  </div>
							</div>
					       
                            <div class="control-group">
							  <label class="control-label" style="font-size:13px; font-weight:900; font-style:italic, font-family:tahoma;" for="typeahead">Publication Status </label>
							  <div class="controls">
								<select class="form-control"name="publication_status" id="">
                                    <option value=""> Publication Status</option>
                                    <option value=1 >Published</option>
                                    <option value=0 >Unpublished</option>
                                </select>
							  </div>
							</div>
							<div class="form-actions">
							  <button name="product_manufacturer" type="submit" class="btn btn-primary">Update Category</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>
              


</div>

</div>