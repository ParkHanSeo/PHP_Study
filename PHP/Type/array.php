<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $coworkers = array(
        'egoing', 'leezche', 'duru', 'taeho'
    );
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';
    //var_dump(count($coworkers));
    array_push($coworkers, 'graphittie');


    for($i = 0; $i < count($coworkers); $i++){
        echo $coworkers[$i].'<br>';
    }
    ?>
</body>
</html>