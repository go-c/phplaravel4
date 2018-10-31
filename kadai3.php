<?php
function sum($max){
  $result = 0;
  for($i = 1; $i <= $max; $i++){
    $result = $i * 2;
  }
  return $result;
}

echo sum();
?>


<?php
function f($a,$b){
  $add = $a + $b;
  return $add;
}

echo f(2, 3);
?>


<?php
function sum($a,$b,$c,$d,$e){
  $sum = $a * $b * $c * $d *$e;
  return $sum;
}

echo sum(1,3,5,7,9);
?>


<?php
 function max_array($a,$b,$c,$d,$e,$f){
 $arr = max($a,$b,$c,$d,$e,$f);
 return $arr;
 }

 echo max_array(1,2,9,4,5,7);
?>

<!-- strip_tags — 文字列から HTML および PHP タグを取り除く -->
<?php
$string ='<p>今回は、テキストに含まれたHTMLタグの除去方法を解説。</p>
<p>なお、文字列の空白を取り除くことについては、「<a href="/php/remove-space-of-strings/">文字列中の空白（スペース・タブ）を除去</a>」を参照ください。</p>';

echo strip_tags($string);
?>

<!-- array_push — 一つ以上の要素を配列の最後に追加する -->
<?php
$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'peach');
print_r($fruits);

?>

<!-- array_merge — ひとつまたは複数の配列を結合する -->
<?php
$array1 = [1, 2, 3];
$array2 = [10, 20,30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2 ,$array3);
print_r ($array);
?>


<!-- time — 現在の Unix タイムスタンプを返す -->
<?php
 echo time();
?>


<!-- mktime — 日付を Unix のタイムスタンプとして取得する -->
<?php
echo mktime();
?>


<!-- date — ローカルの日付/時刻を書式化する -->
<?php
echo date('y/m/d');
?>
