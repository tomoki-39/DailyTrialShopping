<?php require_once 'products.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>デイトラ php</title>
</head>
<body>
    <div class="container">
        <div class="app-container">
            
            <h1 class="title">DailyTrial Shopping</h1>

            <form id="cart" method="post" action="./cart.php">
                <div class="carts-container">
                    <?php foreach($products as $product): ?>
                    <div class="card-item">
                        <!-- インスタンスからメソッドを実行----------------------------------------------------------------------- -->
                        <!-- インスタンスは products.php で生成------------------------------------------------------------------ -->
                        <img class="card-item-img" src="<?php echo $product->getImage(); ?>" alt="">
                        <p class="card-title"><?php echo $product->getName(); ?></p>
                            <div class="card-item-detail">
                                <p class="card-price"><?php echo $product->displayPrice(); ?></p>
                                <input name="<?php echo $product->getID(); ?>" class="item-number" type="number" min="0" value="0">
                            </div>
                        <!-- //--------------------------------------------------------------------------------------------------- -->
                    </div>
                    <?php endforeach; ?>
                </div>
            </form>
            
            <div class="btn-footer">
                <input form="cart" type="submit" class="card-btn" name="submit" value="カートに追加" />
            </div>
        </div>
    </div>
</body>
</html>