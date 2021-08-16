<?php
// Di PHP terdapat 2 jenis tipe data number yaitu 
// int (Bilangan bulat desimal (Base 10), Hexadecimal (Base 16), Octa (Base 8), Binary (Base 2))
// float (Bilangan Pecahan)

// diPHP bisa menambahkan _ (garis bawah) diangka, ini hanya agar mudah dibaca oleh manusia, dan saat dijalankan _ (garis bawah) tersebut akan di ignore atau tidak akan dibaca
// Untuk angka negatif bisa menggunakan tanda - (minus) didepan angka

// Contoh Tipe Data Integer
echo "Decimal : ";
var_dump(1234); // Var dump adalah perintah untuk ngedump atau mengecek sebuah data

echo "Octal: ";
var_dump(01234);

echo "Hexadecimal";
var_dump(0x1A);

echo "Binary: ";
var_dump(0b111111);

echo "Contoh Underscore: ";
var_dump(130_567_000);

// Contoh Tipe Data Floating
echo "FLoataing Point: ";
var_dump(1.435);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minu (7 x 0.001) : ";
var_dump(7e-3);

echo "Underscore di Floting Point : ";
var_dump(1_234.654);

?>