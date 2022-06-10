<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>function</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function basic(){
            print("lorem ipsum dolor1<br>");
            print("lorem ipsum dolor2<br>");
        }
        basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function sum($a, $b){
        print($a+$b).'<br>';
    }
    sum(2,4);
    sum(4,7);
    ?>
    <h2>return</h2>
    <?php
    function sum2($a, $b){
        return $a+$b;
    }
    print(sum2(2,4));
    file_put_contents('result.txt', sum2(2,4));
    ?>
</body>
</html>