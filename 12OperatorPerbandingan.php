<?php
// Operator perbandingan seperti namanya digunakan untuk membandingkan dua buah variable
// Hasil dari operator perbandingan adalah boolean, true jija perbandingannya benar, false jika perbandingannya salah

// |=========================================================================================================================| 
// | Operator     |             Nama            |                           Keterangan                                       |
// |==============|=============================|============================================================================|
// | $a == $b     | Sama dengan                 | True jika $a sama dengan $b setelah dilakukan konversi tipe data           |
// | $a === $b    | Identik                     | True jika $a sama dengan $b dan memiliki tipe data yang sama               |
// | $a != $b     | Tidak sama dengan           | True jika $a sama dengan $n dan memiliki tipe data yang sama               | 
// | $a <> $b     | Tidak sama dengan           | True jika $a tidak sama dengan $b setelah dilakukan konversi tipe data     |
// | $a !== $b    | Tidak identik               | True jika $a tidak sama dengan $b atau tidak sama tipe data                |
// | $a < $b      | Kurang dari                 | True jika $a kurang dari $b                                                |
// | $a <= $b     | Kurang dari tau sama dengan | True jika $a kurang dari atau sama denga $b                                |
// | $a > $b      | Lebih dari                  | True jika $a lebih dari $a                                                 |
// | $a >= $b     | Lebih dari sama dendan      | True jika $a leih dari atau sama denga $b                                  |
// |=========================================================================================================================|

var_dump("5" == 5);     //Hasilnya true 
var_dump("5" === 5);    //Hasilnya false 
var_dump(10 < 20);      //Hasilnya true 
var_dump(9 >= 9);       //Hasilnya true 


?>