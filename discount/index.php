<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="display_discount.php" method="post">
        <input type="text" name="product" placeholder="Product Description">
        <input type="number" name="price" placeholder="List Price" min="1">
        <input type="number" name="discount" placeholder="Discount Percent" min="0" max="0.5" step=0.1>
        <input type="submit" value="Calculator">

    </form>


</body>
</html>