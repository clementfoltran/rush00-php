<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
    <title>42 Shop</title>
</head>
<body>
    <?php include ('menu.php'); ?>
    <div class="hop">
    <?php
        include('model/products.php');
        $products = get_products();
        foreach ($products as $product) {
            if (($product['id_cat'] == get_category_by_id($_GET['filter'])) || !$_GET['filter']) {
            ?>
                <div class="shop">
                    <div class=logo-product">
                        <img class="img-product" src="img/<?= $product['photo']?>"> 
                    </div>
                    <div class="label"><?=$product['label']?><br>
                        <p><?=$product['pieces']?> en stock</p>
                        <a href="./controller/add_to_basket.php?id_prod=<?=$product['id_prod']?>"><?= $product['price'] ?> wallets</a>
                    </div>
                </div>
            <?php } } ?>
    </div>
    <?php include ('footer.php'); ?>
</body>
</html>