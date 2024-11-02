  <!DOCTYPE html>
  <html lang="ja">
  
  <head>
      <meta charset="UTF-8">
      <title>PHP基礎編</title>
  </head>
  
  <body>
      <p>
          <?php
          // Food
          class Food {
            // Food」クラスには「name」「price」プロパティを定義
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;

            }
              // プロパティを取得するためのゲッターメソッド
              public function show_price(): int {
                return $this->price;
            }
          }
          // インスタンス化する
          $food = new Food('potato', 250);

          // インスタンス$foodの各プロパティの値を出力する
          print_r($food);

          echo '<br>';

          // Animal
          class Animal {
            // 「Animal」クラスには「name」「height」「weight」プロパティを定義
            private $name;
            private $height;
            private $weight;

             // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
            }

            // プロパティを取得するためのメソッド
            public function show_height(): int {
              return $this->height;
          }
          }
          // インスタンス化
          $animal = new Animal('dog', 60, 5000);

           // インスタンス$animalの各プロパティの値を出力する
          print_r($animal);

          echo '<br>';
          echo $food->show_price();
          echo '<br>';
          echo $animal->show_height();
          

          
          ?>
      </p>
      

      
  </body>
  
  </html>
