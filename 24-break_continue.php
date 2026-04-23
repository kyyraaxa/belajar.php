<?php

$number = 0;

// break
while ($number <= 10){
    echo "Mahasiswa nomor - $number" . PHP_EOL;
    $number++;

    if ($number == 5){
        break;
    }
}

// continue
for ($number = 1; $number <= 10; $number++){
    if ($number % 2 == 0){
        continue;
    }
    echo "Mahasiswa nomor $number" . PHP_EOL;
}