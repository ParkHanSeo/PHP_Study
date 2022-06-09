<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
        }else{
            echo "Welcome";
        }
    }
    function print_description(){

    }

    function print_list(){
        $list = scandir('data');
        for($i = 0; $i < count($list); $i++){
            if($list[$i] != '.'){
                if($list[$i] != '..'){
                    ?>
                    <li><a href="index2.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                    <?php
                }
            }
        }
    }
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