<?php
// PHP mendunfkung gaya bahsa pemrograman C untuk menaikkan dan menurunkan data number sejumlah 1 angka
// Ini bisa mempersingkat ketika menaikkan data

// |=====================================================================================|
// | Contoh             | Name              |                   Efek                     |
// |=====================================================================================|
// | $a++               | Post increment    | Kembalikan $a lalu naikkan 1 angka         |
// | ++$a               | Pre increment     | Naikkan $a satu angka, lalu kembalikan $a  |
// | $a--               | Post decrement    | Keembalikan $a lalu turunkan 1 angka       |
// | --$a               | Pre decrement     | Turunkan $a satu angka, lalu kemablikan $a |
// |=====================================================================================|

$a = 10;
$a++;
var_dump($a);

++$a;
var_dump($a);

// atau bisa memanfaatkan variable lain untuk menyimpan data
$b = 20;
$c = $b++;
var_dump($c);

$e = 4;
$f = ++$e;

var_dump($f);