<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: /PHP_Study/Type/index2.php?id='.$_POST['title']);
?>
