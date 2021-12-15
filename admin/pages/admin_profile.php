
  <?php
  function veiw_admin_info(){
        $connection = mysqli_connect('localhost','root','','user_info');
        if(!$connection){
        die("Database Not connected". mysqli_error()); 
            }

        $query = "SELECT * FROM admin_table";

        if(mysqli_query($connection, $query)){
            $query_result = mysqli_query($connection, $query);
            return $query_result;
        }else{
            die("query problem". mysqli_error($connection));
        }

    }
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
								  <th>Admin Name</th>
								  <th>Admin Email</th>
								  <th>Admin Phone</th>
								  <th>Admin Pass</th>
								  <th>Admin Address</th>
								  <th>Admin About</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<?php while ($rows=mysqli_fetch_assoc($result)){ ?>
								<td><?php echo $rows['admin_name'];?></td>
								<td class="center"><?php echo $rows['admin_email'];?></td>
								<td class="center"><?php echo $rows['admin_phone'];?></td>
								<td class="center"> <?php echo $rows['admin_pass'];?> </td>
								<td class="center"> <?php echo $rows['admin_address'];?> </td>
								<td class="center"> <?php echo $rows['admin_about'];?> </td>
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