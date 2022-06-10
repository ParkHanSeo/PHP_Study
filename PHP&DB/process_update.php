<?php
$conn = mysqli_connect("127.0.0.1", "root", "system", "opentutorials");
settype($_POST['id'], 'integer'); //settype 에 담겨있는 데이터는 정수가 된다.
$filtered = array(
    'id' => mysqli_real_escape_string($conn, $_POST['id']),
    'title' => mysqli_real_escape_string($conn,$_POST['title']),
    'description' => mysqli_real_escape_string($conn, $_POST['description'])
);

$sql = "
    UPDATE topic
    SET
     title = '{$_POST['title']}',
     description = '{$_POST['description']}'
    WHERE
     id = {$_POST['id']}
";

$result = mysqli_query($conn,$sql);
if($result == false){
    echo "저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요";
    error_log(mysqli_errno($conn));
}else{
    echo "성공했습니다. <a href='index2.php'>돌아가기</a>";
}

?>