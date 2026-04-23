<?php

include "rumus.php";
include "format_name.php";

$luasPersegiPanjang = hitungLuasPersegiPanjang(9, 5);
echo $luasPersegiPanjang . PHP_EOL;

$nama = namaLengkap("Joko", "Wiwito");
echo $nama . PHP_EOL;