<?php
// 配列の要素を全てかけた結果を返す関数
function f($arr) {
    $result = 1;
    foreach($arr as $value) {
        $result *= $value; 
    }
    return $result;
}

$array = array(1,3,5,7,9);
echo f($array);

?>