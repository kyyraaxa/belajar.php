<?php

// without for each
$students = ["Alice", "Bob", "Charlie", "David", "Eve"];

for ($number = 0; $number < count($students); $number++) {
    echo "Mahasiswa: " . $students[$number] . PHP_EOL;
}

// with for each
foreach ($students as $student) {
    echo "Mahasiswa: " . $student . PHP_EOL;
}

// with for each and key
foreach ($students as $index => $student) {
    echo "Mahasiswa nomor " . ($index + 1) . ": " . $student . PHP_EOL;
}
