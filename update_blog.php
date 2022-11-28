<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

if (isset($_POST['submit'])){
    $update=$db->updateBlog($_POST['id'],$_POST['sys_name'],$_POST['display_name'],$_POST['author'],$_POST['image'],$_POST['image_blog_entries'],$_POST['text']);
    if($update){
        header("Location:admin.php");
    } else {echo "FATAL ERROR !!!";}

} else {header("Location: admin.php");}
