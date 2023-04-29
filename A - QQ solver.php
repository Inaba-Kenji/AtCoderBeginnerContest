<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input = trim(fgets(STDIN));
    $input = explode(" ",$input);
    $count = count($input);
    for ($i = 0; $i < $count; $i++) {
         if ($i != $count-1 ) {
             echo($input[$i].",");
         }else {
             echo($input[$i]."\n");
         }
    }
?>


<?php
for ($i = 0; $i < 10; $i++) {
    $input = trim(fgets(STDIN));
    echo($input);
    if ($i != 9 ) {
        echo(" | ");
    } else {
        echo("\n");
    }
}
?>

<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input = trim(fgets(STDIN));
    $input = number_format($input);
    echo($input);

?>

<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $Array = str_split(trim(fgets(STDIN)));
    $Array_length = count($Array);
    $count = 0;
    foreach ($Array as $value) {
        echo($value);
        $count++;
        if ($count % 3 == 0 && $Array_length != $count) {
            echo(",");
        }

    }
?>
