<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mini_calculator.css">
    <title>Document</title>
</head>
<body>

<?php

            if(isset($_POST['btn'])){
                $first_number= $_POST['first_name'];
                $last_number = $_POST['last_name'];
                $btn = $_POST['btn'];

            }

           if($btn=="+"){
                $result = $first_number + $last_number;
            }elseif($btn=="-"){
                $result = $first_number - $last_number;
            }elseif($btn=="*"){
                $result = $first_number * $last_number;
            }elseif($btn=="/"){
                $result = $first_number / $last_number;
            }



            
?>



<div class="cal">
    <form action="?" method="post">
        <table>
            <tr class="cal1">
                <td> First Number</td>
                <td><input style="width: 100px;" type="number" name="first_name" value="<?php echo $first_number; ?>"></td>
            </tr>
            <tr>
                <td> Last Number</td>
                <td><input type="number" name="last_name" value="<?php echo $last_number; ?>"></td>
            </tr>
            <tr>
                <td> Calculate Result</td>
                <td><input type="text" name="result" value=" <?php echo $result;?> "></td>
            </tr>
            <tr>
                
                <td><input type="submit" name="btn" value="+"></td>
                <td><input type="submit" name="btn" value="-"></td>
                <td><input type="submit" name="btn" value="*"></td>
                <td><input type="submit" name="btn" value="/"></td>
                
            </tr>
        </table>
        
    </form>
<?php

?>
</div>
</body>
</html>
