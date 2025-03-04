<?php
function analyzeNumber($number) {

    $digits = str_split((string)$number);

    $count = count($digits);
    

    $maxDigit = max($digits);
    $minDigit = min($digits);
    

    $sum = array_sum($digits);
    

    $average = $count ? $sum / $count : 0;


    echo "Исходное число: $number\n";
    echo "Количество цифр: $count\n";
    echo "Самая большая цифра: $maxDigit\n";
    echo "Самая маленькая цифра: $minDigit\n";
    echo "Сумма цифр: $sum\n";
    echo "Среднее значение цифр: " . number_format($average, 2) . "\n";
}


$number = 347689;
analyzeNumber($number);
?>