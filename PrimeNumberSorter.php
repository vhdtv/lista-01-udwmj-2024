<?php
function isPrime($num) {
    if ($num <= 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }
    return true;
}

function sortArray(&$arr) {
    sort($arr);
}

function processNumbers($numbers) {
    sortArray($numbers);
    
    echo "Números em ordem crescente:\n";
    foreach ($numbers as $number) {
        echo $number . "\n";
    }
    
    echo "\nVerificação de números primos:\n";
    foreach ($numbers as $number) {
        if (isPrime($number)) {
            echo $number . " é um número primo.\n";
        } else {
            echo $number . " não é um número primo.\n";
        }
    }
}

$numbers = [29, 15, 23, 4, 19, 11, 8];
processNumbers($numbers);
?>
