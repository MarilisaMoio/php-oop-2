<?php 
    require_once __DIR__ . "/Models/Categories.php";
    require_once __DIR__ . "/Models/Products.php";

    $cane = new Categories("Cane");
    var_dump(new Products("Alimento a Caso", 42, $cane));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>Layout croccante per appassionati di croccantini</h1>
</body>
</html>