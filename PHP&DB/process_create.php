<?php
$conn = mysqli_connect("127.0.0.1", "root", "system", "opentutorials");
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
}
echo $sql;
?>