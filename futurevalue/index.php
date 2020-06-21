<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num" placeholder="Investment Amount" min="0">
        <input type="number" name="rate" placeholder="Yearly Interest Rate" min="0">
        <input type="number" name="year" placeholder="Number of years" min="0">
        <input type="submit" name="sbm" value ="Calculator">

    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $amount = $_POST['num'];
            $rate = $_POST['rate'];
            $year = $_POST['year'];
            
            $result = $amount * (1 + $rate/100) * $year;
            echo "Total is $result.";

        }

    
    ?>

</body>
</html>