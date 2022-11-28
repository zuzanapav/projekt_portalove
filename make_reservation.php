<?php
include_once "db_connect.php";


if(isset ($_GET['day'])){
    $db=$GLOBALS['db'];
    $insert =$db->insertReservation($_GET['day'],$_GET['hour'],$_GET['name'],$_GET['phone'],$_GET['persons']);

    if($insert){
        header("Location:index.php");
    } else {echo "FATAL ERROR !!!";}


} else {
    header("Location: index.php");
}
