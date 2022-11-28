<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

$reservationDetail=$db->getReservationDetail($_GET['id']);


?>


<form action="update_reservation.php" method="post">
    From:<br>
    <input type="text" name="name" value="<?php echo $reservationDetail[0]['name'];?>" /><br>
    Phone:<br>
    <input type="phone" name="phone" value="<?php echo $reservationDetail[0]['phone'];?>" /><br>
    Day:<br>
    <input type="text" name="day" value="<?php echo $reservationDetail[0]['day'];?>" /><br>
    Time:<br>
    <input type="time" name="time" value="<?php echo $reservationDetail[0]['time'];?>" /><br>
    Number of people:<br>
    <input type="number" name="number_of_people" value="<?php echo $reservationDetail[0]['number_of_people'];?>" /><br>
    Status:<br>
    <input type="text" name="status" value="<?php echo $reservationDetail[0]['status'];?>" /><br>
    <input type="hidden" name="id" value="<?php echo $reservationDetail[0]['id'];?>"><br>
    <input type="submit" name="submit" value="Update">
</form>
