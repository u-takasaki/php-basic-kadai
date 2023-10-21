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
      class Food {
        private $name;
        private $price;

        public function __construct(string $name, int $price){
          $this->name = $name;
          $this->price = $price;
        }
        public function show_price(){
          echo $this->price . '<br>';
        }
      }

      // ぽてーとのインスタンス化、オブジェクトの出力
      $potato = new Food('potato', 250);
      print_r($potato);
      echo '<br>';
      class Animal {
        private $name;
        private $height;
        private $weight;
        public function __construct(string $name, int $height, int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        public function show_height(){
          echo $this->height . '<br>';
        }
      }

    // いっぬのインスタンス化、オブジェクトの出力
      $dog = new Animal('dog', 60, 5000);
      print_r($dog);
      echo '<br>';
    // それぞれのメソッドの実行
      $potato->show_price();
      $dog->show_height();
    ?>
  </p>
</body>
</html>