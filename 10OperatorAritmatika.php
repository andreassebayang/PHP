<?php
// Untuk membbuat sebuah variable menjadi positif dapat menambahakan tanda plus didepan variable +$variable
// Untuk membuat sebuah variable menjadi negatif dapat menambahkan tanda minus didepan variable -$variable
// $vaiable + $variable      = Penjumlahan
// $variable - $variable     = Pengurangan
// $variable * $variable     = Perkalian
// $variable / $variable     = Pembagian
// $variable % $vraiable     = Sisa bagi
// $vairable ** $variable    = Perpangkatan

$a = 10;
$b = 10;

$penjumlahan = $a + $b;
var_dump($penjumlahan);

$pengurangan = $a - $b;
var_dump($pengurangan);

$KonversiNegatif = -$penjumlahan;
var_dump($KonversiNegatif);

$c = -4;
$KonversiPositif = +$c;
var_dump($KonversiPositif);

$perkalian = $a * $b;
var_dump($perkalian);

$pembagian = $a / $b;
var_dump($pembagian);

$modulo = 100 % 3;
var_dump($modulo);

$perpangkatan = 2 ** 2;
var_dump($perpangkatan);
?>