<?php
// Variable di PHP sifatnya mutable (bisa dirubah)
// Jika ingin membuat variable yang immutable (tidak bisa dirubah) bisa dilakukan juga pada PHP
// Sebagai gantinya, terdapat fitur yang namanya constant
// Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah dideklarasikan
// Untuk membbuat constant kita bisa menggunakan function define()
// Best practice pembuatan nama constant adalah menggunakan UPPER_CASE

define("AUTHOR", "Andreas Sebayang");
define("APP_VERSION", 1);

echo "Author : ";
echo AUTHOR;
echo "\n";
echo "APP Version : ";
echo APP_VERSION;
echo "\n";

?>