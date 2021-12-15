
<?php
require '../admin/function.php';
$query_result = select_all_order_info();

?>

<div class="container">
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
                <h2 class="text-center text-primary"> Manage Customer Order </h2>
                
           
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> Order ID </th>
                            <th>Customer Name </th>
                            <th>Customer_email</th>
                            <th>Order Total</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Actions</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($rows = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            <td> <?php echo $rows['order_id'];?></td>
                            <td> <?php echo $rows['first_name'].' '.$rows['last_name'];?> </td>
                            <td><?php echo $rows['email_address'];?> </td>
                            <td><?php echo $rows['order_total'];?>  </td>
                            <td> <?php echo $rows['order_status'];?> </td>
                            <td> <?php echo $rows['payment_type'];?> </td>
                            <td> <?php echo $rows['payment_status'];?> </td>
                            <td class="center">
                                <a class="btn btn-info" href="edit_manufacturer.php?manufacturer_id=<?php ?>" title="Veiw Order">
								    <i class="halflings-icon white veiw"></i>  
                                </a>
                                <a class="btn btn-info" href="edit_manufacturer.php?manufacturer_id=<?php ?>" title="Veiw Order Invoice">
								    <i class="halflings-icon white veiw"></i> 
                                </a>
                           
                                <a class="btn btn-info" href="edit_manufacturer.php?manufacturer_id=<?php ?>" title="download Order Invoice">
								    <i class="halflings-icon white download"></i>  
                                </a>
                                <a class="btn btn-info" href="edit_manufacturer.php?manufacturer_id=<?php ?>" title="Edit">
									<i class="halflings-icon white edit"></i>  
								</a>
                                <a class="btn btn-danger" href="?p_status=deletion&manufacturer_id=<?php ?>" title="deleted"> 
									<i class="halflings-icon yellow trash"></i>  
                                </a>
                            </td>
                        </tr>
                            <?php } ?>
                    </tbody>
                 
                </table>
            </form>
        </div>
    </div>
</div>
</div>