<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	<link rel="stylesheet" href="css/basket.css" type="text/css">
    <title>42 Shop</title>
</head>
    <body>
        <?php include('menu.php');
            $total = 0;
            $line = 0;
            foreach ($_SESSION['basket'] as $article) {
                $line++;
                $stuff = $article[0];
                $total += $stuff['price'];
        ?>
                <div class="basket">
                  <?php echo " Article : " . $stuff['label'] . "\t\tPrix : " . $stuff['price']; ?> Wallets <a style="float:right;" href="/controller/del_to_basket.php?line=<?=$line?>">Supprimer l'article</a>
                </div>
        <?php } ?> 
        <div class="pricetot"> prix total : <?php echo $total . " Wallets" ?> </div>
        <a href="controller/order.php">Valider le panier</a>
        <?php include('footer.php'); ?>
        
    </body>
</html>