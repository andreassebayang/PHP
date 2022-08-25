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



// Secara default, kapasitas di PHP ada batasnya, 2147483647 untuk sitem operasi 32 bit
// 9223372036854775807 untuk sistem operasi 64 bit
// Jika membuat number integer yang melebihi dari nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point

// Pembuktian
echo "Integer Overflow 32 bit : ";
var_dump(2147483658);

echo "Integer Overflow 664 bit : ";
var_dump(9223372036854775809);

?>