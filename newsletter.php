<?php
include_once "db_connect.php";


if(isset ($_GET['email'])){
    $db=$GLOBALS['db'];
    $insert =$db->insertNewsletter($_GET['email']);

    if($insert){
        header("Location:index.php");
    } else {echo "FATAL ERROR !!!";}


} else {
    header("Location: index.php");
}
