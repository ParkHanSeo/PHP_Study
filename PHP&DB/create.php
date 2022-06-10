<?php
$conn = mysqli_connect("127.0.0.1", "root", "system", "opentutorials");

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn,$sql);
$list = '';
while($row = mysqli_fetch_array($result)){
    //<a href=\"index2.php?id=19"\></a>
    $escaped_title = htmlspecialchars($row['title']);
    $list = $list."<li><a href=\"index2.php?id={$row['id']}\">{$escaped_title}</a></li>";
}

$article = array(
    'title' => 'Welcome',
    'description' => 'Hello, web'
);




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
    <form action="process_create.php" method="POST">
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea name="description" placeholder="description"></textarea></p>
        <p><input type="submit"></p>
    </form>
</body>
</html>