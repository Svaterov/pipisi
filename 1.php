<?php

$randomNumbers = [];
for ($i = 0; $i < 100; $i++) {
    $randomNumbers[] = rand(1, 100); 
}


echo "Сгенерированные числа: " . implode(", ", $randomNumbers) . "\n";


$maxNumber = max($randomNumbers);
$minNumber = min($randomNumbers);


echo "Максимальное число: $maxNumber\n";
echo "Минимальное число: $minNumber\n";
?>