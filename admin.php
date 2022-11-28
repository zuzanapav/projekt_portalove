<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];


$contacts=$db ->getAllContacts();
$reservations=$db ->getAllReservations();




    ?>
    <h2>Admin</h2>
    <ul>
        <li><a href="admin.php"> All emails</a></li>
        <li><a href="index.php"> Web page</a></li>
        <li><a href="menu.php"> Menu </a></li>
        <li><a href="blog.php"> Blog </a></li>
        <li><a href="contact.php"> Contact</a></li>
        <li><a href="insert_blog_form.php"> Insert blog post </a></li>


    </ul>
    <br><br><br>
    <h3>Emails :</h3>
    <ul>
        <?php
        foreach ($contacts as $email){
            echo "<li>Name : " .$email['name']." , From : ". $email['email'].", Phone :". $email['phone']." Message :".$email['message'] ." , Created at : ". $email['created_at']."</li>";
            echo '<li><a href="delete_contact.php?id='.$email['id'].'">Delete</a></li>';
            echo '<li><a href="update_contact_form.php?id='.$email['id'].'">Update</a></li>';
        }
        ?>
    </ul>
    <br>
    <h3>Reservations :</h3>
<ul>
    <?php
    foreach ($reservations as $reservation){
        echo "<li>Name : " .$reservation['name']." , Phone : ". $reservation['phone'].", Day :". $reservation['day']." ,Time :".$reservation['time'] ." , Number of people : ".$reservation['number_of_people'].", Created at : ". $reservation['created_at']." , Status : ".$reservation['status']."</li>";
        echo '<li><a href="delete_reservation.php?id='.$reservation['id'].'">Delete</a></li>';
        echo '<li><a href="update_reservation_form.php?id='.$reservation['id'].'">Update</a></li>';
    }
    ?>
</ul>
