<?php
    // practice 1
    function double($num){
        return $num * 2;
    }
    
    echo double(3);
    echo "\n";
    
    // practice 2
    function sum_two($a, $b){
        return $a + $b;        
    }
    echo sum_two(4, 6);
    echo "\n";
    
    // practice 3
    $arr = array(1,3,5,7,9);
    function sum_arr($arr){
        $sum = 1;
        foreach($arr as $num){
            $sum *= $num;
        }
        return $sum;
    }
    echo sum_arr($arr);
    echo "\n";
  
    // practice 4
    function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
        $max_number = $arr[0];
        foreach($arr as $a){
        //どうしたらいいかわからない・・・・
            if($a > $max_number){
                $max_number = $a;
            }
        }

         return $max_number;
    }
    echo max_array($arr);
    echo "\n";
    
    // practice 5
    // strip_tags
    $text_a = "<p>Test paragraph";
    echo strip_tags($text_a);
    echo "\n";
    
    // array_push
    $arr_b = array("orange", "apple");
    array_push($arr_b, "banana", "mango");
    print_r($arr_b);
    
    // array_merge
    $array1 = array("os" => "ios", 3, 5);
    $array2 = array("r", "l", "4", "os" => "android", "pc" => "mac");
    $arr_result = array_merge($array1, $array2);
    print_r($arr_result);
    echo "\n";

    // mktime, time, date
    echo date('c', mktime(0, 0, 0, 2, 1, 1999));
    echo "\n";
    
    echo date('r', time());
    echo "\n";

    
?>