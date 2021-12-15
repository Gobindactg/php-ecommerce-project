<?php
if(isset($_POST['btn'])){
    save_shipping_info($_POST);
}
if(isset($_SESSION['customer_email'])){
    $query_result = select_shipping_info();
    $rows = mysqli_fetch_assoc($query_result);
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <?php if(isset($_GET['email_exit'])){
                        echo "Your Email Already exit.";
                    }?>
                <h4 class="text-center text-success"> Hellow <span style="font-famaly:tahoma; font-weight:900; color:green;"><?php echo $_SESSION['customer_name']?><span><h4> You have to give us product shipping address to complete your valuable order </h4></h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <form class="form-horizontal" role="form" action="" method="post" name="update_shipping_info">
                <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                        <h3 class="text-success">Shipping Form</h3>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" name="full_name" value="<?php echo $rows['full_name']?>" class="form-control">
                        </div>
                    </div>
                  
                    <div class="form-group">
                    <label class="control-label col-md-3">Email Address </label>
                        <div class="col-md-9">
                            <input type="email" name="email_address" value="<?php echo $rows['email_address']?>" class="form-control">
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="control-label col-md-3">Address</label>
                        <div class="col-md-9">
                        <textarea name="address" id="" cols="30" rows="10" class="form-control"> <?php echo $rows['address']?> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Phone Number</label>
                        <div class="col-md-9">
                            <input type="number" name="phone_number"  value="<?php echo $rows['phone_number']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">City</label>
                        <div class="col-md-9">
                            <input type="text" name="city"  value="<?php echo $rows['city']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Country</label>
                        <div class="col-md-9">
                            <select name="country" id="">
                                <option value="">--Select Your Country--</option>
                                <option value="bangladesh">Bangladesh</option>
                                <option value="india">India</option>
                                <option value="america">America</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <span  class="btn btn-primary text-white "><a href="payment.php">Skip</a></span> <input type="submit" name="btn" class="btn btn-primary " value="Save Shipping Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
                document.forms['update_shipping_info'].elements['country'].value='<?php echo $rows['country'];?>';
            </script>