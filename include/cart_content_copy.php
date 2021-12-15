<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
        <script>
                    $(document).ready(function() {
                var table = $('#example').DataTable( {
                    lengthChange: false,
                    buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
                } );
            
                table.buttons().container()
                    .appendTo( '#example_wrapper .col-md-6:eq(0)' );
            } );
        </script>
<?php
if(isset($_GET['c_status'])){
    $product_id=$_GET['product_id'];
    $message = delete_product_quantity_info($product_id);
}
if(isset($_POST['update_product'])){
    $message = update_product_quantity_info($_POST);
}
$cart_query_result = product_add_cart();


?>
<link rel="stylesheet" href="css/cart1.css">

<div class="container">
    <?php 
    if(isset($_GET['$message'])){
        echo $message;
        unset($message);
       
    }
    ?>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th class="text-center"> Product ID </th>
                <th class="text-center" >Product Name</th>
                <th class="text-center" >Product Image</th>
                <th class="text-center" >Product Price</th>
                <th class="text-center" >Product Quantity</th>
                <th class="text-center" >Total</th>
                <th class="text-center" >Action</th>
            </tr>
        </thead>
        <tbody>
        <tbody class="table_body">
             <?php  $sum = 0;  while($rows = mysqli_fetch_assoc($cart_query_result)){?>
            <tr >
                <td class="text-center"><?php echo $rows['product_id'];?></td>
                <td style="font-family: tahoma; font-weight: 700;;"><?php echo $rows['product_name'];?></td>
                <td class="text-center"><img style="height:50px" src="admin/<?php echo $rows['product_image'];?>" alt=""></td>
                <td style="font-family: tahoma; font-weight: 500; text-align:right;" > BDT. <?php echo $rows['product_price'];?></td>
                <form action="" method="post">
                    <td class="text-center">
                        <input style="width:60px" type="number" name="product_quantity" value="<?php echo $rows['product_quantity'];?>"> 
                        <input type="hidden" name="product_id" value="<?php echo $rows['product_id'];?>">
                        <input type="submit" name="update_product" value="Update">
                    </td>
                </form>
                <td style="font-family: tahoma; font-weight: 700; text-align:right;"><?php $total= $rows['product_price']*$rows['product_quantity']; ?>
                        BDT. <?php echo $total;
                    ?> 
                </td>
                <td style="text-align:center; font-style:tahoma, color:green; font-weight:900;" >
                   <button> <a  href="?c_status=delete&product_id=<?php echo $rows['product_id'];?>" title="delete" confirm> delete
						
					</a></button>
                </td>
            </tr>
         
            <?php $sum = $sum+$total; } ?>
            <tr>
                <td colspan="8" ></td>
                
            </tr>
            
            <tr>
                <td colspan="5"  style="font-family: tahoma; font-weight: 700;">Sub Total</td>
                <td colspan="3" style="font-family: tahoma; font-weight: 700; text-align:right;">BDT. <?php echo $sum;?></td>
            </tr>
            <tr>
                <td colspan="5" style="font-family: tahoma; font-weight: 700;" >Vat Total </td>
                <td colspan="3" style="font-family: tahoma; font-weight: 700; text-align:right;">BDT. <?php $vat=$sum*.15; echo $vat;?></td>
            </tr>
            <tr>
                <td colspan="5" style="font-family: tahoma; font-weight: 700;" >Grand Total </td>
                <td colspan="3" style="font-family: tahoma; font-weight: 700; text-align:right;" > 
                BDT. <?php $g_total = $sum+$vat; echo $g_total; $_SESSION['g_total']=$g_total;?></td>
                
        </tbody>
          
        </tbody>
      
    </table>
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="checkout.php" class="btn btn-primary pull-right">Checkout</a>
                <a href="index.php" class="btn btn-primary">Continue Shopping</a>
            </div>
        </div>
    </div>
   
    </div>
  

  









