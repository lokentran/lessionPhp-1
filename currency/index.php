<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="moneyUsd" placeholder="USD">
        <input type="submit" value="Convert">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $moneyUsd = $_POST['moneyUsd'];
            $result = $moneyUsd * 23000;

            echo "Quy doi ra tien viet la: $result vnd";

        }
    
    
    ?>

</body>
</html>