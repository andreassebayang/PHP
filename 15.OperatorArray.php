<?php
// Di PHP array memiliki operator khusus
// Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi cara kerjanya seikit berbda

// |=====================================================================================================|
// | Contoh         |       Nama        |                   Keterangan                                   |
// |=====================================================================================================|
// | $a + $b        | Union             | Menggabungkan array $a dan $b                                  | 
// | $a == $b       | Equality          | True jika $a dan $b memiliki key-value sama                    | 
// | $a === $n      | Identity          | True jika $a dan %b memiliki key-value sama dengan posisi sama |
// | $a !- $b       | Inequality        | True jika $a dan $b tidak sama                                 |
// | $a <> $b       | Inequality        | True jika $a dan $b tidak sama                                 |
// | $a !== $b      | Nonidentity       | True jika $a dan $b tidak identik                              |
// |=====================================================================================================|

// Contoh Union
$awal = [
    "First_Name" => "Justin"
];

$akhir = [
    "Last_Name" => "Bieber"
];

$full = $awal + $akhir;
var_dump($full);

// Contoh Equality dan Identity

$first = [
    "First_Name" => "Cristiano",
    "Last_Name" => "Sugiano"
];

$last = [
    "Last_Name" => "Sugiano",
    "First_Name" => "Cristiano"
];


var_dump($first == $last); // akan menghasilkan true meskipun penempatan first name dana last dibalik karena mempunyai nilai key yang sama
var_dump($first === $last); // akan menghasilkan false karena identity  mengeck semua urutan dan kesamaan 