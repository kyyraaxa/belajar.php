<?php

function menghitungLuasPersegiPanjang(int $panjang, int $lebar) {
    $hasil = $panjang * $lebar;
    return $hasil;
}

$tangkapData = menghitungLuasPersegiPanjang(5, 3);
echo $tangkapData;