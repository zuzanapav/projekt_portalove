<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

if (isset($_POST['submit'])){
    $insert=$db->insertWeeklyFood($_POST['sys_name'],$_POST['display_name'],$_POST['price'],$_POST['food_name'],$_POST['description'],$_POST['image']);
    if($insert){
        header("Location:admin.php");
    } else {echo "FATAL ERROR !!!";}

} else {header("Location: admin.php");}
