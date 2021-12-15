<?php
try{
$db = new PDO('mysql:host=localhost;dbname=user_info;charse=utf8','root',''); 
}
catch(PDOException $e){
    die($e->getMessage());
}
?>