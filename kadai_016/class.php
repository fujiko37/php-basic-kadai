<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>kadai_011</title>
</head>
<body>
  <p>
    <?php

//クラス
class Food {
    //プロパティ
    private $name;
    private $price;

     //メソッド
    public function show_price(){
     echo $this->price;
  } 
    
    //コンストラクタ
    public function __construct(string $name, int $price) {
     $this->name = $name;
     $this->price = $price;
}

}

//インスタンス
  $food = new Food('potato', 250);
  print_r($food);
  echo '<br>';

?>


<?php
class Animal{
    //プロパティ
    private $name;
    private $height;
    private $weight;

    //メソッド
    public function show_height(){
    echo $this->height;
    }
  
    //コンストラクタ
    public function __construct(string $name, int $height, int $weight) {
     $this->name = $name;
     $this->height = $height;
     $this->weight = $weight;
}

}
  //インスタンス
  $animal = new Animal('dog', 60, 5000);
  print_r($animal);
  echo '<br>';

?>

<?php  
//メソッド実行
  $food->show_price();
  echo '<br>';
  $animal->show_height();
?>