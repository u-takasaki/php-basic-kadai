<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
      // $orderの論理によって昇降を決定する関数。使った関数はarray_reverse
      function sort_2way($order) {
        $array = ['A','B','C','D','E'];
        if($order){
          echo "昇順にソートします。<br>";
          for($i = 0; $i < count($array); $i++){
            echo "{$array[$i]}<br>";
          }
        } else{
          echo "降順にソートします。<br>";
          for($i = 0; $i < count($array); $i++){
            $reversed = array_reverse($array);
            echo "{$reversed[$i]}<br>";
          }
        }
      }
      $order = true;
      sort_2way($order);
      $order = false;
      sort_2way($order);
    ?>
  </p>
</body>
</html>