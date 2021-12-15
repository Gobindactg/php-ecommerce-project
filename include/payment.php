<?php
    if(isset($_POST['btn'])){
        save_order_info($_POST);
    }

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="well">
                <h4 class="text-center text-success"> Welcome Mr. <span style="font-famaly:tahoma; font-weight:900; color:green;"><?php echo $_SESSION['customer_name']?><span> <br> <h4>Please select your payment method</h4> </h4>
                <h4 class="text-center text-success"> <?php if(isset($message1)){ echo $message1; } ?> </h4>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                <table class="table">
                    <tr>
                        <td> Cash On delivery </td>
                        <td><input type="radio" name="payment_type" value="cash_on_delivery"></td>
                    </tr>
                    <tr>
                        <td> Online Option </td>
                        <td>
                        <input type="radio" name="payment_type" value="bkash"> Bkash
                        <input type="radio" name="payment_type" value="rocket"> Rocket
                        <input type="radio" name="payment_type" value="nagod"> Nagod                    
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td><input type="submit" name="btn" class="btn btn-success btn-block" value="Confirm Order"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>