<?php
  require '../admin/function.php';
    $result = veiw_catagory_info();
 


  
   if(isset($_GET['p_status'])){
	   $content_id=$_GET['content_id'];
	

	if($_GET['p_status'] == 'unpublished'){
		$message = unpublished_category_info($content_id);
	}
	else if($_GET['p_status'] == 'published'){
		$message = published_category_info($content_id);
	}
	if($_GET['p_status'] == 'active'){
		$message = active_category_info($content_id);
	}
	else if($_GET['p_status'] == 'deletion'){
		$message = deletion_category_info($content_id);
	}
   }
?>




<link rel="stylesheet" href="./css/veiw_catagory.css">
<div style="width:100% ; margin:10px auto;">
<div><a href="content_category.php">Add Catagory</a>  ||  <a href="veiw_catagory.php">View Catagory</a></div>


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
								  <th>Category ID</th>
								  <th>Username</th>
								  <th>Category Name</th>
								  <th>Category Description</th>
								  <th>Publication Status</th>
								  <th>deletion_status</th>
								
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php while ($rows=mysqli_fetch_assoc($result)){ ?>
								<td class="center"><?php echo $rows['content_id'];?></td>
								<td class="center"><?php echo $rows['user_name'];?></td>
								<td class="center"><?php echo $rows['content_name'];?></td>
								<td class="center"><?php echo $rows['content_description'];?></td>
								<td class="center">
									
								<h3 style="color:green;"> <?php if($rows['publication_status']==1){
										echo 'Published';
									}?></h3>
									<h3 style="color:red;"><?php if ($rows['publication_status']==0){
									 echo 'Unpublished'; 	
									}

									?> </h3></td>

								<td class="center">
									
								<h3 style="color:green;"> <?php if($rows['deletion_status']==1){
										echo 'Actived';
									}?></h3>
									<h3 style="color:red;"><?php if ($rows['deletion_status']==0){
									 echo 'Deleted'; 	
									}

									?> </h3></td>
								
								<td class="center">
									
								<h3 style="color:green;"> <?php if($rows['publication_status']==1){
										echo 'Actived';
									}?></h3>
									<h3 style="color:red;"><?php if ($rows['publication_status']==0){
									 echo 'Deactived'; 	
									}

									?> </h3></td>

								<td class="center">
								<?php if($rows['publication_status'] ==1){?>
									<a class="btn btn-success" href="?p_status=unpublished&content_id=<?php echo $rows['content_id'];?>"  title="Published">
										<i class="halflings-icon white arrow-up"></i>  
									</a>
									<?php }else {?>
										<a class="btn btn-danger" href="?p_status=published&content_id=<?php echo $rows['content_id'];?>" title="Unpublished"> 
										<i class="halflings-icon white arrow-down"></i>  
									</a>

									<?php }?>
									<a class="btn btn-info" href="edit_category.php?content_id=<?php echo $rows['content_id']?>" title="Edit">
										<i class="halflings-icon white edit"></i>  
									</a>
									
									<?php if($rows['deletion_status'] ==1){?>
									<a class="btn btn-success" href="?p_status=active&content_id=<?php echo $rows['content_id'];?>" onclick="return check_delete();" title="active">
										<i class="halflings-icon white trash"></i>  
									</a>
									<?php }else {?>
										<a class="btn btn-danger" href="?p_status=deletion&content_id=<?php echo $rows['content_id'];?>" onclick="return check_delete();" title="deleted"> 
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