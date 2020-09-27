<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デイトラphp</title>
</head>
<body>
    <h1><?php echo 'Hello World'; ?></h1>
    <p>
        <?php
            function calcircleArea($radius) {
                $pai = 3.14;
                $area = $radius * $radius * $pai;
                return $area;
            }
            echo calcircleArea(6); #コメント化
            $score = 75;
            if ($score > 79) {
                echo '頑張ったね</br>';
            } else {
                echo 'あと少し</br>';
            }
            $scores = [89, 76, 35];
            foreach ($scores as $score) {
                echo $score;
                echo '</br>';
            }
            $scores = [
                "数学" => 89,
                "英語" => 65,
                "理科" => 76,
                "社会" => 58
            ];
            echo "数学は";
            echo $scores["数学"];
            echo "点でした。";
        ?>
    </p>
    
</body>
</html>