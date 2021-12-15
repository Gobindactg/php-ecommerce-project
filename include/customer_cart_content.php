
<?php

$customer_query_result = customer_cart_content();


?>
<link rel="stylesheet" href="css/cart1.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
            <h4 class="text-center text-success"> Welcome Mr. <span style="font-famaly:tahoma; font-weight:900; color:green;"><?php echo $_SESSION['customer_name']?><span> <br> <h4>Your All Purchase List Here</h4> </h4>
                
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr class="table_head">
                        <th class="text-center"> Product ID </th>
                        <th class="text-center" >Product Name</th>
                        <th class="text-center" >Product Image</th>
                        <th class="text-center" >Product Price</th>
                        <th class="text-center" >Product Quantity</th>
                        <th class="text-center" >Total</th>
                        
                    </tr>
                </thead>
                <tbody class="table_body">
                    <?php  $sum = 0;  while($rows = mysqli_fetch_assoc($customer_query_result)){?>
                    <tr >
                        <td class="text-center"><?php echo $rows['product_id'];?></td>
                        <td style="font-family: tahoma; font-weight: 700;;"><?php echo $rows['product_name'];?></td>
                        <td class="text-center"><img style="height:50px" src="admin/<?php echo $rows['product_image'];?>" alt=""></td>
                        <td style="font-family: tahoma; font-weight: 500; text-align:right;" > BDT. <?php echo $rows['product_price'];?></td>
                        <td style="font-family: tahoma; font-weight: 700;;"><?php echo $rows['product_name'];?></td>
                        <td style="font-family: tahoma; font-weight: 700; text-align:right;"><?php $total= $rows['product_price']*$rows['product_quantity']; ?>
                                BDT. <?php echo $total;
                            ?> 
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
            </table>
   
    </div>
    </div>
</div>
  
