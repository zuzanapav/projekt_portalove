<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

$reservationDetail=$db->getReservationDetail($_GET['id']);


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text], input[type=password],input[type=phone],input[type=time],input[type=number]{
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password],input[type=phone],input[type=time],input[type=number]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #1a9aaf;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>

<form action="update_reservation.php" method="post">
    <div class="container">
        <h1>Update reservation</h1>
        <p>Form for updating reservation.</p>
        <hr>

        <label for="from"><b>Name</b></label>
        <input type="text"  name="name" value="<?php echo $reservationDetail[0]['name'];?>">

        <label for="phone"><b>Phone</b></label>
        <input type="phone"  name="phone" value="<?php echo $reservationDetail[0]['phone'];?>">

        <label for="day"><b>Day</b></label>
        <input type="text"  name="day" value="<?php echo $reservationDetail[0]['day'];?>">

        <label for="time"><b>Time</b></label>
        <input type="time"  name="time" value="<?php echo $reservationDetail[0]['time'];?>">

        <label for="number_of_people"><b>Number of people</b></label>
        <input type="number"  name="number_of_people" value="<?php echo $reservationDetail[0]['number_of_people'];?>">

        <label for="status" id="status"><b>Status</b></label><br><br>
        <select name="status" id="status" >
            <option value="<?php echo $reservationDetail[0]['status']; ?>" selected><?php echo $reservationDetail[0]['status'];?></option>
            <option value="confirmed">confirmed</option>
            <option value="new">new</option>
            <option value="banned">banned</option>
            <option value="to_change">to change</option>
        </select>
        <input type="hidden" name="id" value="<?php echo $reservationDetail[0]['id'];?>"><br>
        <button type="submit" name ="submit" class="registerbtn" value="Update">Update</button>
    </div>

</form>

</body>
</html>
