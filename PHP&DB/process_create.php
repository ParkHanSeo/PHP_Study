<?php
$conn = mysqli_connect("127.0.0.1", "root", "system", "opentutorials");

$filtered = array(
    'title' =>mysqli_real_escape_string($conn,$_POST['title']),
    'description' =>mysqli_real_escape_string($conn, $_POST['description'])
);

$sql = "
    INSERT INTO topic
    (title, description, created)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
    )
";

$result = mysqli_query($conn,$sql);
if($result == false){
    echo "저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요";
    error_log(mysqli_errno($conn));
}else{
    echo "성공했습니다. <a href='index2.php'>돌아가기</a>";
}

?>