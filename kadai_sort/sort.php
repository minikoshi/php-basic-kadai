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
          } else {
            rsort($array);
          }
          return $array;
        }
        $nums = [15, 4, 18, 23, 10];
        // 昇順
        echo '昇順にソートします。<br>';
        $sort = sort_2way($nums, true);
        foreach($sort as $num){
          echo $num . '<br>';
        }
        // 降順
        echo '降順にソートします。<br>';
        $rsort = sort_2way($nums, false);
        foreach($rsort as $num){
          echo $num . '<br>';
        }
        ?>
    </p>
</body>

</html>