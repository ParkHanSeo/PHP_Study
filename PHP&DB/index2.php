<?php
$conn = mysqli_connect("127.0.0.1", "root", "system", "opentutorials");

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn,$sql);
$list = '';
while($row = mysqli_fetch_array($result)){
    //<a href=\"index2.php?id=19"\></a>
    $list = $list."<li><a href=\"index2.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array(
    'title' => 'Welcome',
    'description' => 'Hello, web'
);

if(isset($_GET['id'])){
    $sql = "SELECT * FROM topic WHERE id = {$_GET['id']}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = $row['title'];
    $article['description'] = $row['description'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><a href="index2.php">WEB</a></title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <?=$list?>
    </ol>
    <a href="create.php">create</a>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
</body>
</html>