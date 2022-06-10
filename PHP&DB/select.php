<?php
$conn = mysqli_connect("127.0.0.1", "root", "system", "opentutorials");

// 1 row
echo "<h1>Single row</h1>";
$sql = "SELECT * FROM topic WHERE id = 7";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];//컬럼 이름으로 해당 데이터를 가지고 올 수 있다.


// all row
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];//컬럼 이름으로 해당 데이터를 가지고 올 수 있다.
}

?>