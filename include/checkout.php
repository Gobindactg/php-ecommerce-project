
<?php
if(isset($_POST['btn'])){
    save_customer_info($_POST);
}
if(isset($_POST['btn_login'])){
    customer_login_check($_POST);
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <h4 class="text-center text-success"> You have to login to complete your valuable order. If you are not registered then please register </h4>
                <h4 class="text-center text-success"> <?php if(isset($message1)){ echo $message1; } ?> </h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well">
                <form class="form-horizontal" role="form" action="" method="post">
                <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                        
                        <h3 class="text-success">Registation Form</h3>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Frist Name</label>
                        <div class="col-md-9">
                            <input type="text" name="first_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" name="last_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3">Email Address </label>
                        <div class="col-md-9">
                            <input type="email" name="email_address" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Address</label>
                        <div class="col-md-9">
                        <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Phone Number</label>
                        <div class="col-md-9">
                            <input type="number" name="phone_number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">City</label>
                        <div class="col-md-9">
                            <input type="text" name="city" class="form-control">
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
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Registation">
                        </div>
                    </div>
                </form>
            </div>
        </div>
 <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well">
            <h4 class="text-center text-success"> <?php if(isset($message)){ echo $message; unset($message);} ?> </h4>
                <form class="form-horizontal" role="form" action="" method="post">
                <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                        <h3 class="text-success">Login Form</h3>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3">Email Address </label>
                        <div class="col-md-9">
                            <input type="email" name="email_address" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" name="btn_login" class="btn btn-success btn-block" value="Login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
       