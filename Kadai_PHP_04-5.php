<?php
// strip_tags:文字列からHTMLおよびPHPタグを取り除き、処理後の文字列を返す
$text = '<a>Test paragraph.</a><p>Hello world.</p>';
echo strip_tags($text);
echo "\n";

// array_push:1つ以上の要素を配列の最後に追加し、追加後の要素の数を返す
$array1 = array("HTML","CSS","PHP");
echo array_push($array1,"Javascript");
echo "\n";

// array_merge:複数の配列をマージする
$array2 = array("Ruby","Java","C");
$array3 = array("Python","SQL","Go");
$result = array_merge($array1,$array2,$array3);
print_r($result);
echo "\n";

// time:現在時刻をUnixエポック(1970年1月1日00:00:00 GMT)からの通算秒として返す
// mktime:指定した日時のnixエポック(1970年1月1日00:00:00 GMT)からの通算秒として返す
echo time();
echo "\n";
echo mktime(0,0,0,1,1,1971);
echo "\n";

//date:ローカルの日付/時刻を書式化する
echo date("l",mktime(0,0,0,1,1,1970));
echo "\n";

?>