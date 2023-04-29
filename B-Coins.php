<?php

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
$x = trim(fgets(STDIN));

$result = 0;

for($i = 0; $i <= $a; $i++) {
  for($j = 0; $j <= $b; $j++) {
    for($k= 0; $k <= $c; $k++) {
      if (500 * $i + 100 * $j + 50 * $k == $x) {
        $result++;
      }
    }
  }
}
echo $result;



// 例: 入力例が2 2 2 100の場合
// 下記のように全ての組み合わせをfor文３回で表している。

// 0-0-0
// 0-0-1
// 0-0-2

// 0-1-0
// 0-1-1
// 0-1-2

// 0-2-0
// 0-2-1
// 0-2-2

// 1-0-0
// 1-0-1
// 1-0-2

// 1-1-0
// 1-1-1
// 1-1-2

// 1-2-0
// 1-2-1
// 1-2-2

// 2-0-0
// 2-0-1
// 2-0-2

// 2-1-0
// 2-1-1
// 2-1-2

// 2-2-0
// 2-2-1
// 2-2-2