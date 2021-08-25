<?php
// Nilai NULL merepresentasikan sebuah variable tanpa nilai
// Saat membuat variable, lalu ingin menghapus data yang terdapat divariable tersebut bisa menggunakan NULL untuk mengosongkan variable tersebut
// Untuk membuat data NULL bisa menggunakan kata kunci NULL (case insensitive)

$name = "Andre";
$name = NULL;
$age = null;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;
echo "\n";

// Mengecek apakah sebuah data NULL
// Kadang kala ketika ingin tahu apakah sebuah data bernilai null atau tidak 
// Untuk mengecek apakah data bernilai null, bisa menggunakan function is_null($variable)
// jawabannya akan berbentuk boolean yaitu true or false, 1 = true dan 0 = false

// contoh bernilai salah
$name = "Messi";
echo "Apakah Name Null ? : ";
var_dump(is_null($name));
echo "\n";

// contoh bernilai benar
$name = null;
echo "Apakah Name Null ? : ";
var_dump(is_null($name));
echo "\n";

// Menghapus Variable
// Selalin mengubah menjadi NULL, diPHP juga bisa menghapus sebuah variable, caranya dengan mengunakan function unset($variable)
// Namun hati-hati ketika menghapus variable, tidak bisa lagi mengakses variable tersebut, bahkan function is_null($variable) pun akan menjadi error jika mengkases variable tersebut
// agar lebih aman bisa menggunakan function isset($variable) untuk mengecek apakah sebuah variable ada dan nilainnya tidak NULL

// unset
$contoh = "IniContoh";
unset($contoh);

// ketika diakses kembali sudah tidak bisa
echo $contoh;
echo "\n";

// isset
var_dump(isset($contoh));


?>