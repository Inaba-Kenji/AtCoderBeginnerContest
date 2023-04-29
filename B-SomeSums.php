<?php

// 問題文1以上N以下の整数のうち、10進法での各桁の和がA以上B以下であるものの総和を求めてください。

// 入力は以下の形式で標準入力から与えられる。
// N A B

// 入力例 1
// 20 2 5

// 出力例 1
// 84

// 各桁の和を計算する関数
function sumOfDigits($i) {
  $sum = 0;
  while ($i > 0) {
    // 桁の数を取得
    $sum += $i % 10;
    // 桁数を減らしていく
    $i /= 10;
  }
  return $sum;
}

// 標準入力を受け取る
list($n, $a, $b) = explode(' ',fgets(STDIN));
// 1からNまでの値を判定する
$total = 0;
for ($i = 1; $i <= $n; $i++) {
  // 各桁の和を計算する
  $sum = sumOfDigits($i);
  // 各桁の和がA以上B以下であることを判定
  if ($sum >= $a && $sum <= $b) {
    $total += $i;
  }
}
echo $total;
