<?php
    // 入力された底辺と高さを受け取り、三角形の面積を計算する。
$base=$_POST['base'];
$height=$_POST['height'];

echo "底辺は{$base}<br>";
echo "高さは{$height}<br>";

$area=($base*$height)/2;

echo "三角形の面積は{$area}<br>";