<?php
session_start();


require "../application.php";
    $query_result = customer_invoice();
    $rows = mysqli_fetch_assoc($query_result) ;

    $query_result = customer_invoice2();
?>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/print.css" media="print">
<div class="container" style="padding-top:15px">
    <div class="row">
        <div class="col-md-12">
            <div class="wel">
               
                <table class="table table">
                    <thead>
                        <tr>
                            <td>
                            <button id="print-btn" onclick="window.print()" class="btn btn-primary" >Print</button>
                            <h1>INVOICE</h1>
                            </td>
                            <td>
                                <h3 class="text-right">Sender: TODAYSHOP </h3>
                                <h4 class="text-right" >Anower Complex, Mirsarai, Chattogram</h4>
                                <h4 class="text-right" >Phone : 01710429999</h4>
                                <h4 class="text-right" >Email : noipunno@gmail.com</h4>

                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wel">
              
                <table class="table ">
                    <thead>
                        <tr>
                            
                            <td>
                                <h3>invoice: 98658455</h3>
                                <h4>Date : 11/12/2021</h4>
                                <h4>Payment Due : 11/01/2022 </h4>
                            </td>
                            <td>
                                <h3 class="text-right">Receiver: <?php echo $rows['full_name'];?> </h3>
                                <h4 class="text-right" >Address : <?php echo $rows['address']. ' , '. $rows['country'];?></h4>
                                <h4 class="text-right" >Phone: <?php echo $rows['phone_number'];?></h4>
                                <h4 class="text-right" >Email : <?php echo $rows['email_address'];?></h4>

                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container" style="height:150px">
    <div class="row">
        <div class="col-md-12">
            <div class="wel">
                <table class="table table">
                    <thead>
                        <tr style="font-weight:900; font-family:tahoma; font-size:17px;">
                            <th class="text-left">Item Description</th>
                            <th class="text-center">Product Image</th>
                            <th class="text-right"  >Price (tk)</th>
                            <th class="text-right" >Quantity</th>
                            <th class="text-right" >Subtotal (tk) </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $sum = 0; while($rows = mysqli_fetch_assoc($query_result) ){ ?>
                        <tr style="font-weight:900; font-family:tahoma; font-size:15px;">
                            <td > <?php echo $rows['product_name'];?></td>
                            <td class="text-center"> <img style="height:50px" src="../admin/<?php echo $rows['product_image'];?>" alt=""></td>
                            <td class="text-right" > TK. <?php echo $rows['product_price'];?></td>
                            <td class="text-right" > <?php echo $rows['product_quantity'];?> </td>
                            <td class="text-right" >TK. <?php $total = $rows['product_price']*$rows['product_quantity']; echo $total;?></td>
                        </tr>
                        <?php $sum = $sum+$total; } ?>
                        <tr>
                            <td class="text-right" colspan="4" style="font-weight:900; font-family:tahoma; font-size:20px;"> Total</td>
                            <td class="text-right" style="font-weight:900; font-family:tahoma; font-size:20px;" >TK. <?php echo $sum;?></td>
                        </tr>
                        <tr>
                            <td class="text-right" colspan="4" style="font-weight:900; font-family:tahoma; font-size:20px;"> Payment Status</td>
                            <td class="text-right" style="font-weight:900; font-family:tahoma; font-size:20px;" ><?php echo $rows['product_name'];?></td>
                        </tr>
                        <tr>
                            <td colspan="5"> 
                                <h3 >Kindly Make Your Payment to us </h3>
                                <h4  >Bank: abc bank; A/C-452566522</h4>
                                <h4  >bkash/roket/nagod-01146416533</h4>
                                <h4  >Phone : 01710429999</h4>
                                <h4  >Email : noipunno@gmail.com</h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
