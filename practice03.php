<?php

//課題1

function w($a){
    return $a * 2;
}
echo w(50) . "\n";


//課題2

function c($a, $b) {
    return $a + $b;
}

$result = c(10, 10);

echo $result . "\n";


//課題3

$arr = array(1, 3, 5, 7, 9);
function f($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;    
}
echo f($arr) . "\n";

//課題４

function max_array($arr){
$max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
return $max_number;    
}
echo max_array($arr) . "\n";


//課題５

//strip_tags
$str = "<h1>techboost</h1>";
     echo strip_tags($str) . "\n";

//array_push
$fruit = array("apple", "orange");
array_push($fruit, "banana", "peach");
    echo $fruit[3] . "\n";
    
//array_merge
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$num = array_merge($array1, $array2, $array3);
    echo $num[3] . "\n";

//time,mktime,date
$timestamp = time();
    echo $timestamp . "\n";

$day = mktime(0, 0, 0, 1, 1, 2021);
    echo date("Y/m/d", $day);
    




     
