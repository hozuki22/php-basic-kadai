<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order){ 
            if($order){
                sort($array);
                echo "昇順にソートします"."<br>";
            }else {
                arsort($array);
                echo "降順にソートします。"."<br>";
            }
            foreach($array as $sortarray){
                echo $sortarray.'<br>';
            }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        sort_2way($nums,true);
        sort_2way($nums,false);
        ?>
    </p>
</body>

</html>