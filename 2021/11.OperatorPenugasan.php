<?php
// Opearor penugasan di PHP sama seperi bahasa pemrograman lain, yaitu dengan menggnakan karakter = (sama dengan)
// Operator penugasan sudah sering kita gunakan, terutama ketika mengubah value sebuah variable
// Selain hal itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika

// |=============================|
// | Penugasan    |  Keterangan  |
// |=============================|
// | $a += $b     |  $a = $a + b |      
// | $a -= $b     |  $a = $a - b |
// | $a *= $b     |  $a = $a * b |
// | $a /= $b     |  $a = $a / b |
// | $a %= $b     |  $a = 5a % b |
// |=============================|
$total = 0;

$jus = 5000;
$kerupuk = 1000;
$gorengan = 500;

$total += $jus;
$total += $kerupuk;
$total += $gorengan;

var_dump($total);

?>