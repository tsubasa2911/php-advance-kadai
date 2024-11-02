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

            // メソッドを定義する
            public function show_price(int $price) {
              $this->price = $price;
            }
          
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;

            }
              // プロパティを取得するためのゲッターメソッド
              public function getPrice(): int {
                return $this->price;
            }
          }
          // インスタンス化する
          $food = new Food('potato', 250);

          // インスタンス$userの各プロパティの値を出力する
          print_r($food);

          echo '<br>';

          // Animal
          class Animal {
            // 「Animal」クラスには「name」「height」「weight」プロパティを定義
            private $name;
            private $height;
            private $weight;

            // メソッドを定義
            public function show_weight(int $weight) {
              $this->weight =$weight;
            }
             // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
            }

            // プロパティを取得するためのゲッターメソッド
            public function getHeight(): int {
              return $this->height;
          }
          }
          // インスタンス化
          $animal = new Animal('dog', 60, 5000);

           // インスタンス$userの各プロパティの値を出力する
          print_r($animal);

          echo '<br>';
          echo $food->getPrice();
          echo '<br>';
          echo $animal->getHeight();
          

          
          ?>
      </p>
      

      
  </body>
  
  </html>
