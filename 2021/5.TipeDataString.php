<?php
// Tipe data strubg adalah tipe data representasi dari teks
// String bisa mengandung kosong atau banyak karakter

//Menggunakan single quote ' '

echo 'Name : ';
echo 'Andreas';

//Menggunakan Double Quote " "
//Salah satu keuntungan menggunakan Double Quote adalah dapat menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER, \t untuk TAB, \" untuk double quote, dam lain-lain

echo "Name : ";
echo "Andreas";
echo "\n";

echo "Name : ";
echo "andreas\tSebayang";

//Menggunakan Multinline String

// 1.Heredoc adalah fitur untuk membuat string yang panjang, sehingga tidak perlu manual melakukan enter, tab dan yang lainnya secara manual

echo <<<Andre
Ini adalah contoh string yang sangat panjang, dan juga gak perlu ngetik ENTER secara manual. 
Fitur ini sangat mempermudah hanya perlu menambahkan <<< dan nama keterangan dan diakiri nama keterangan yang sama
Andre;


// 2.Nowdoc mirip seperti Heredoc, yang menjadi pembeda adalah pada Nowdoc tidak memiliki kemampuan parsing seperti di Heredoc atau Double quote. Masalah parsing akan dibahas pada materi Manipulasi String

echo <<<'contoh'
Ini adalah contoh string menggunakan Nowdoc hanya perlu menambhakan single qoute pada keterangan,
Harap dipahami
contoh;

?>