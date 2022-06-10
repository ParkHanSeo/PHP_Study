<?php
require('../lib/print.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>   
        <?php
            print_title();
        ?>
    </title>
</head>
<body>
    <h1><a href="index2.php">WEB</a></h1>
    <ol>
        <?php
            print_list()
        ?>
    </ol>
    <h2>
        <?php
        echo $_GET['id'];
        ?>
    </h2>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="Description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>     
    </form>
</body>
</html>