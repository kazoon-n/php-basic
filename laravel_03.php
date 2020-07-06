<?php
    // practice 1
    $name = "Kazuki";
    if($name == "Kazuki"){
        echo "私は あなたの名前 です\n";
    }else{
        echo "あなたの名前ではありません\n";
    }
    
    // practice 2
    for($i = 1; $i <= 10000; $i++){
        $i += $i;
    }
    echo $i."\n";

    // practice 3
    $fruits = array("apple", "banana", "durian", "orange", "mango");
    foreach($fruits as $fruit){
        echo $fruit;
        echo "\n";
    }
    // practice 4
    /* for文の始めの値を定義する */
    $start = 1;
    /* for文の終わりの値を定義する */
    $end = 100;

    for($i = $start; $i <= $end; $i++){

      // 5で割り切れたら{}内を実行する
        if($i % 5 == 0){
            echo $i;
            echo "\n";
        }
    }





?>