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

<form action="insert_weekly_food.php"method="post">
    <div class="container">
        <h1>Insert blog post</h1>
        <p>Please fill in this form to insert new weekly food.</p>
        <hr>

        <label for="sys_name"><b>Sys name</b></label>
        <input type="text" placeholder="Enter sys name" name="sys_name" value="">

        <label for="display_name"><b>Display name</b></label>
        <input type="text" placeholder="Enter display name" name="display_name" value="">

        <label for="price"><b>Price</b></label>
        <input type="number" min="0.00" max="10000.00" step="0.01" placeholder="Enter price" name="price" value="">

        <label for="food_name"><b>Food name</b></label>
        <input type="text" placeholder="Enter food name" name="food_name" value="">

        <label for="description"><b>Description</b></label>
        <input type="text" placeholder="Enter description" name="description" value="">

        <label for="image"><b>Image</b></label><br><br>
        <input type="text" placeholder="Enter image path" name="image" value="">

        <button type="submit" name ="submit" class="registerbtn" value="Insert">Insert</button>
    </div>

</form>

</body>
</html>


