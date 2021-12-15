
  <?php
  require '../admin/function.php';
    $result = veiw_admin_info();
	

	?>
  
  
    <div class="container" style="height:700px">
   		
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

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
								  <th>user Name</th>
								  <th>user Email</th>
								  <th>user Phone</th>
								  <th>user Pass</th>
								  <th>user Address</th>
								  <th>user About</th>
								  <th>user Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<?php while ($rows=mysqli_fetch_assoc($result)){ ?>
								<td><?php echo $rows['user_name'];?></td>
								<td class="center"><?php echo $rows['user_name'];?></td>
								<td class="center"><?php echo $rows['user_email'];?></td>
								<td class="center"> <?php echo $rows['user_pass'];?> </td>
								<td class="center"> <?php echo $rows['user_address'];?> </td>
								<td class="center"> <?php echo $rows['user_about'];?> </td>
								<td class="center"> <img height="50px" width="50ps" src="../images/<?php echo $rows['picture'];?>" alt=""> </td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
									<?php }?>
						  </tbody>
					  </table>            
					</div>
				</div></span>
			
			
	</div>
        </main>
      </div>
    </div>
   
    
    </div>
  </body>
</html>