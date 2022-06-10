<!DOCTYPE html>
<html>
    <body>
        <?php
        echo htmlspecialchars('<script>alert</script>');

        //htmlspecialchars 해당 기능으로 스크립트나 이딴 것들을 그대로 출력하게 할 수 있으므로
        //보안성을 높일 수 있다.
        ?>
    </body>
</html>