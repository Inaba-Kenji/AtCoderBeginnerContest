<?php

// 問題文
// 黒板にN 個の正の整数A1​,...,AN​が書かれています．すぬけ君は，黒板に書かれている整数がすべて偶数であるとき，次の操作を行うことができます．黒板に書かれている整数すべてを，2で割ったものに置き換える．すぬけ君は最大で何回操作を行うことができるかを求めてください．

$N = trim(fgets(STDIN));
$input = trim(fgets(STDIN));

$array = explode(' ', $input);
$isEven = true;
$count = 0;

// 偶数かどうかを確認
while ($isEven) {
  for ($i = 0; $i < $N; $i++) {
    if ($array[$i] % 2 == 0) {
      $array[$i] = $array[$i] / 2;
    } else {
      $isEven = false;
      echo $count;
      return;
    }
  }
  $count ++;
}
