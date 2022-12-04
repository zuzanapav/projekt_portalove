<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

$weekly_food_detail=$db->getWeeklyFoodDetail($_GET['id']);


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
        input[type=text], input[type=password],input[type=number] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus,input[type=number]:focus {
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

<form action="update_weekly_food.php" method="post">
    <div class="container">
        <h1>Update weekly food</h1>
        <p>Form for updating weekly food.</p>
        <hr>

        <label for="sys_name"><b>Sys name</b></label>
        <input type="text"  name="sys_name" value="<?php echo $weekly_food_detail[0]['sys_name'];?>">

        <label for="display_name"><b>Display name</b></label>
        <input type="text" name="display_name" value="<?php echo $weekly_food_detail[0]['display_name'];?>">

        <label for="price"><b>Price</b></label>
        <input type="number" min="0.00" max="10000.00" step="0.01"  name="price" value="<?php echo $weekly_food_detail[0]['price'];?>">

        <label for="food_name"><b>Food name</b></label>
        <input type="text"  name="food_name" value="<?php echo $weekly_food_detail[0]['food_name'];?>">

        <label for="description"><b>Description</b></label>
        <input type="text"  name="description" value="<?php echo $weekly_food_detail[0]['description'];?>">

        <label for="image"><b>Image</b></label><br><br>
        <input type="text"  name="image" value="<?php echo $weekly_food_detail[0]['image'];?>">

        <input type="hidden" name="id" value="<?php echo $weekly_food_detail[0]['id'];?>"><br>
        <button type="submit" name ="submit" class="registerbtn" value="Update">Update</button>
    </div>

</form>

</body>
</html>

