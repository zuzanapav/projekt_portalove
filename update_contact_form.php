<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

$contactDetail=$db->getContactDetail($_GET['id']);


?>


<form action="update_contact.php" method="post">
    From:<br>
    <input type="text" name="name" value="<?php echo $contactDetail[0]['name'];?>" /><br>
    Email:<br>
    <input type="email" name="email" value="<?php echo $contactDetail[0]['email'];?>" /><br>
    Phone:<br>
    <input type="phone" name="phone" value="<?php echo $contactDetail[0]['phone'];?>" /><br>
    Content:<br>
    <textarea name="message"><?php echo $contactDetail[0]['message'];?></textarea><br>
    <input type="hidden" name="id" value="<?php echo $contactDetail[0]['id'];?>"><br>
    <input type="submit" name="submit" value="Update">
</form>
