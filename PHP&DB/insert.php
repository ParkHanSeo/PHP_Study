<?php
$conn = mysqli_connect("127.0.0.1", "root", "system", "opentutorials");
$sql = "INSERT INTO topic
        (title, description, created)
        VALUE(
            'MYSQL',
            'MYSQL ...',
            NOW()
        )";

$result = mysqli_query($conn, $sql); //커넥션을 하고 쿼리문 날림
if($result == false){
    echo mysqli_error($conn); //어떤 에러인지 알려줌    
}


?>