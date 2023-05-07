<?php

// カードの枚数
fscanf(STDIN, '%d', $n);
// 与えられる数字
$a = explode(' ', trim(fgets(STDIN)));
// 最初にカードを引く
$alice = 0;
// 後にカードを引く
$bob = 0;
// 大きい順にする
rsort($a);

for ($i = 0; $i < $n; $i++) {
  // 先手は偶数、後手は奇数でカードを引く
  if ($i % 2 == 0) {
    $alice += $a[$i];
  } else {
    $bob += $a[$i];
  }
}

echo $alice - $bob;
