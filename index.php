<?php 
    require_once __DIR__ . "/Models/Categories.php";
    require_once __DIR__ . "/Models/Products.php";
    require_once __DIR__ . "/Models/Foods.php";
    require_once __DIR__ . "/Models/Toys.php";
    require_once __DIR__ . "/Models/Beds.php";

    //categories
    $cane = new Categories("Cane");
    $gatto = new Categories("Gatto");

    //products - foods
    $food1 = new Foods("Trainer Manzo", 36, $cane, "crocchetta", "puppy", "maxxi", "12kg", 20);
    $food2 = new Foods("Purina Pollo", 3, $gatto, "scatoletta", "adult", "-", "200gr");

    //products - toys
    $toy1 = new Toys("Kong Red", 16, $cane, "Plastica");
    $toy2 = new Toys("Bastoncino con topolino", 10, $gatto, "plastica", 15);

    //products - beds
    $bed1 = new Beds("Cuccia tonda con cuscino", 40, $cane, "50cm (diametro)", "sintetico", true);
    $bed2 = new Beds("Cuccia da incasso", 50, $gatto, "40x50cm", "legno");

    //products array
    $prodArray = [$food2, $toy1, $toy2, $bed2, $food1, $bed1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>Layout croccante per appassionati di croccantini</h1>
    <div class="container">
        <?php foreach ($prodArray as $product) {?>
        <div class="CardProduct">
            <img src="<?= $product->image ?>" alt="">
            <div class="prod-header">
                <i class="<?= $product->category->icon ?>"></i>
                <span class="prod-name"><?= $product->name ?></span>
            </div>
            <div class="prod-price">
                <?php if ($product->getDiscount() === 0) {?>
                    <div><?= $product->getPrice() ?>€</div>
                <?php } else { ?>
                    <div>
                        <span class="old-price"><?= $product->getPrice() ?>€</span>
                        <span><?= $product->getDiscountedPrice() ?>€</span>
                        <span class="discount-perc"><?= $product->getDiscount() ?>%</span>
                    </div>
                <?php } ?>
            </div>
            <div class="prod-info">
                <?php if ($product->productType === "food") {?>
                    <div>Tipologia: <?= $product->type ?></div>
                    <div>Età: <?= $product->age ?></div>
                    <div>Taglia: <?= $product->size ?></div>
                    <div>Peso: <?= $product->weight ?></div>
                <?php } elseif ($product->productType === "toy") { ?>
                    <div>Materiale: <?= $product->material ?></div>
                <?php } elseif ($product->productType === "bed") { ?>
                    <div>Dimensioni: <?= $product->size ?></div>
                    <div>Materiale: <?= $product->material ?></div>
                    <div>Lavabile: <?= $product->washable ? "sì" : "no" ?></div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>