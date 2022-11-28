<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

if (isset($_POST['submit'])){
    $update=$db->updateContact($_POST['id'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']);
    if($update){
        header("Location:admin.php");
    } else {echo "FATAL ERROR !!!";}

} else {header("Location: admin.php");}
