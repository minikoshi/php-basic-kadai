<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    class Food {
      // プロパティ
      private $name;
      private $price;
      // コンストラクタ
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
      // メソッド
      public function show_price() {
        return $this->price;
      }
    }
    
    class Animal {
      // プロパティ
      private $name;
      private $height;
      private $weight;
      // コンストラクタ
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      // メソッド
      public function show_height() {
        return $this->height;
      }
    }
    // インスタンス化
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);
    // 出力
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';
    // メソッド
    echo $food->show_price() . '<br>';
    echo $animal->show_height();
    ?>
  </p>
</body>

</html>