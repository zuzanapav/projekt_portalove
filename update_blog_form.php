<?php
include_once "db_connect.php";
$db=$GLOBALS['db'];

$blogDetail=$db->getBlogDetail($_GET['id']);


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
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
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

<form action="update_blog.php" method="post">
    <div class="container">
        <h1>Update blog post</h1>
        <p>Form for updating blog post.</p>
        <hr>

        <label for="sys_name"><b>Sys name</b></label>
        <input type="text"  name="sys_name" value="<?php echo $blogDetail[0]['sys_name'];?>">

        <label for="display_name"><b>Display name</b></label>
        <input type="text"  name="display_name" value="<?php echo $blogDetail[0]['display_name'];?>">

        <label for="author"><b>Author</b></label>
        <input type="text"  name="author" value="<?php echo $blogDetail[0]['author'];?>">

        <label for="image_path"><b>Image path</b></label>
        <input type="text"  name="image" value="<?php echo $blogDetail[0]['image'];?>">

        <label for="image__blog_entries_path"><b>Image path for blog entry</b></label>
        <input type="text"  name="image_blog_entries" value="<?php echo $blogDetail[0]['image_blog_entries'];?>">

        <label for="text"><b>Text</b></label><br><br>
        <textarea name="text"><?php echo $blogDetail[0]['text'];?></textarea>
        <input type="hidden" name="id" value="<?php echo $blogDetail[0]['id'];?>"><br>
        <button type="submit" name ="submit" class="registerbtn" value="Update">Update</button>
    </div>

</form>

</body>
</html>
