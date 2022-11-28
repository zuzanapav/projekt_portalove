<?php
include_once "db_connect.php";


if(isset ($_POST['name'])){
    $db=$GLOBALS['db'];
    $insert =$db->insertContact($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']);

    if($insert){
        header("Location:index.php");
    } else {echo "FATAL ERROR !!!";}


} else {
    header("Location: index.php");
}
