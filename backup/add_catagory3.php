
<?php
ob_start();
if(isset($_POST['save_category'])){
	require '../admin/function.php';
	save_category($_POST);
}


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
						<form class="form-horizontal" method="post" style="background-color: rgb(200, 206, 212); color:black; font-size:20px; padding-top:8px">
						  <fieldset>
							<div class="control-group" >
							  <label class="control-label" style="font-size:13px; font-weight:900; font-style:italic, font-family:tahoma;" for="typeahead">Category Name </label>
							  <div class="controls">
								<input type="text" required style="background-color: white; color:black; font-size:20px; width:70%" name="category_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								
							  </div>
							</div>
							<!--<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>-->
							         
							<div class="control-group hidden-phone">
							  <label class="control-label" style="font-size:13px;font-weight:900;  font-style:italic, font-family:tahoma;" for="textarea2">Product Description</label>
							  <div class="controls">
								<!--<textarea name="category_description" class="cleditor" id="textarea2" rows="3"></textarea>-->
								<textarea type="text" style="background-color: white; color:black; font-size:20px; width:70%" name="category_description" rows="10" cols="32" style="width:47%;" placeholder="Write Your category description"></textarea><br>
							  </div>
							</div>
                           <!-- <div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input  name="category_img"class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div> -->
                            <div class="control-group">
							  <label class="control-label" style="font-size:13px; font-weight:900; font-style:italic, font-family:tahoma;" for="typeahead">Publication Status </label>
							  <div class="controls">
								<select class="form-control"name="publication_status" id="">
                                    <option value=""> Publication Status</option>
                                    <option value="published">Published</option>
                                    <option value="unpublished">Unpublished</option>
                                </select>
							  </div>
							</div>
							<div class="form-actions">
							  <button name="save_category" type="submit" class="btn btn-primary">Save Category</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>
                </form>


<!--
<link rel="stylesheet" href="./css/catagory.css">
<div class="catagory">
<h1 > Welcome to add catagory</h1>
<hr><hr>

<div style="width:80% ; margin:10px auto;">
<div class="show"><a href="add_catagory.php">Add Catagory</a>  ||  <a href="veiw_catagory.php">View Catagory</a></div>


<form action="" method="post">
   <h1 style=" color:green; font-famaily:tahoma"> <?php  if(isset($done)){ echo $done;} ?></h1>
<table>
    <tr>
        <td>Catagory Name</td>
        <td><input style="width:100%" type="text" name="catagory_name" required></td>
    </tr>
    <tr>
        <td>Author Name</td>
        <td><input style="width:100%" type="text" name="author_name" value=""></td>
    </tr>
    <tr>
        <td>Catagory Description</td>
        <td><textarea style="width:100%" name="catagory_description" id="" cols="60" rows="10"></textarea></td>
    </tr>
    <tr>
        <td>Publication Status</td>
        <td>
            <select name="publication_status" id="">
                <option value="">Select publiscation status</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" name="btn" value="Save Catagory"></td>
    </tr>
</table>
</form>-->
</div>

</div>