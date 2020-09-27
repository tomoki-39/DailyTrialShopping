<?php 
    require_once 'products.php'; 
    require_once 'classes/cart.php';
    // Cart にアイテムと個数を入力
    foreach($products as $product) {
        Cart::add($product, $_POST[$product->getID()]);
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/reset.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css" >
  <title>デイトラ PHP</title>
</head>
<body>
  <div class="container">
    <div class="app-container">
      <h1 class="title">Shopping Cart</h1>
      <div class="carts-container">

        <?php foreach($products as $product): ?>
        <?php if ($_POST[$product->getID()] > 0): ?>
        <div class="cart-item">
          <div class="flex">
            <img class="cart-item-img" src="<?php echo $product->getImage(); ?>">
            <div class="cart-item-detail">
              <p class="cart-item-title"><?php echo $product->getName(); ?></p>
              <!-- inputで指定したnameが連想配列でpost送信される -->
              <p><?php echo $_POST[$product->getID()]; ?> × <?php echo $product->getPriceIncludedTax(); ?></p>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
        
      </div>
      <div class="btn-footer">
        <input class="checkout-btn" type="submit" value="<?php echo Cart::calTotalPrice()."円を決済する" ?>">
      </div>
    </div>
  </div>
</body>
</html>