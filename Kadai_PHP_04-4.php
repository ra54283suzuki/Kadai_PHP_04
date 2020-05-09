<?php
// 配列の中で最大値を返す関数
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    if($a > $max_number)
    $max_number = $a;
 }

 return $max_number;
 }
 
 $array = array(100,200,500,300,700,50);
 echo max_array($array);
 
 ?>