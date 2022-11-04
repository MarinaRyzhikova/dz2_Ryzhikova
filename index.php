<?php
echo "Введите целое цисло: ". PHP_EOL;
$a = trim(fgets(STDIN)); // читает одну строку из STDIN

if (is_numeric($a) === false) {
    $c = "неизвестен";
    exit( "Ошибка,ведите число"). PHP_EOL;
}
$a = +$a;
if (is_float($a)){
    $c = "неизвестен";
    exit("Ошибка! Введите целое число!" ) . PHP_EOL;
}



echo "Введите делитель: ";
$b = trim(fgets(STDIN));

if (is_numeric($b) === false) {
    $c = "неизвестен";
    exit ("Ошибка! Введите целое число!") . PHP_EOL;
}

$b = +$b;

if (is_float($b)){
    $c = "неизвестен";
    exit("Ошибка! Введите целые числа!" ) . PHP_EOL;
}

if ($b === 0) {
    $c = "неизвестен";
    exit("Ошибка, на 0 делить нельзя, введите целое число") . PHP_EOL;
}

if (is_int($a) && is_int($b)) {
    $c = $a /$b;
}

fwrite(STDERR, "Ответ: $c");



