<?php

$names = ["rian", "cuki", "pita", "dayat"];

$status = array("jomblo", "taken", "menikah");

$names[1] = "lila";

// menambahkan sebuah data ke array yang lama
$names[] = "kuyra";


// halo nama saya paris, status saya sekarang jomblo

echo "halo nama saya $names[4], status saya sekarang $status[0]\njumlah data ada " . count($names) . " orang";

// jumlah data status adalah 3
echo "jumlah data status adalah : ". count($status);