<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

?>

<form action="insert_blog.php" method="post">
    Sys_name:<br>
    <input type="text" name="sys_name" value=""/><br>
    Display_name:<br>
    <input type="text" name="display_name" value="" /><br>
    Author :<br>
    <input type="text" name="author" value="" /><br>
    Image path:<br>
    <input type="text" name="image" value="" /><br>
    Image for blog entry path:<br>
    <input type="text" name="image_blog_entries" value="" /><br>
    Text : <br>
    <textarea name="text"></textarea><br>

    <input type="submit" name="submit" value="Insert">
</form>
