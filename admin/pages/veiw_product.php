<?php
require '../admin/function.php';
$product_id =$_GET['product_id'];
$query_result = select_product_info($product_id);
$product_info = mysqli_fetch_assoc($query_result);
?>

<table class="table table-bordered">
    <tr class="table-dark">
        <th>Product ID </th>
        <th> <?php echo $product_info['product_id'];?> </th>
    </tr>
    <tr>
        <th>Product Name </th>
        <th> <?php echo $product_info['product_name']?> </th>
    </tr>
    <tr>
        <th>Category Name </th>
        <th> <?php echo  $product_info['content_name']?> </th>
    </tr>
    <tr>
        <th>Manufacturer Name </th>
        <th> <?php echo $product_info['manufacturer_name']?> </th>
    </tr>
    <tr>
        <th>Product Price</th>
        <th> <?php echo $product_info['product_price']?> </th>
    </tr>
    <tr>
        <th>Product Quantity </th>
        <th> <?php echo $product_info['product_quantity']?> </th>
    </tr>
    <tr>
        <th>Product Sku </th>
        <th> <?php echo $product_info['product_sku']?> </th>
    </tr>
    <tr>
        <th>Product Short Description </th>
        <th> <?php echo $product_info['product_short_description']?> </th>
    </tr>
    <tr>
        <th>Product Long Description </th>
        <th> <?php echo $product_info['product_long_description']?> </th>
    </tr>
    <tr>
        <th>Product Image </th>
        <th> <img style="width:250px;" src="<?php echo $product_info['product_image']?>" alt=""></th>
        
    </tr>
    <tr>
        <th>Publication_status </th>
        <th> 
        <h3 style="color:green;"> <?php if($product_info['publication_status']==1){
										echo "<h3 style='color:green;'>Published</h3>";
									}?>
									<?php if ($product_info['publication_status']==0){
									 echo "<h3 style='color:red;'>Unpublished </h3>"; 	
									}

									?> 
        </th>
    </tr>
    
</table>
<div>
    <img src="product_image/<?php echo $product_info['product_image'];?>" alt="">

</div>