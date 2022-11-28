<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

if (isset($_POST['submit'])){
    $update=$db->updateReservation($_POST['id'],$_POST['day'],$_POST['time'],$_POST['name'],$_POST['phone'],$_POST['number_of_people'],$_POST['status']);
    if($update){
        header("Location:admin.php");
    } else {echo "FATAL ERROR !!!";}

} else {header("Location: admin.php");}
