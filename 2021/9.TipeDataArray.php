<?php
// Array adalah tipe data yang berisikan kosong atau banyak data
// Array di PHP bisa berisikan data dengan jenis berbeda-beda misal string, integer atau bahakan gabungan
// Array di PHP memiliki panjang dinamis, artinya bisa menambahkan data ke array sebanyak-banyajnya tidak dibatasi kapasitas
// Index pada PHP dimulai dari 0
// Untuk membuat array dapat memasukkan kata kunci array() atau langsung menggunakan []

$angka = array(1, 2, 3, 4, 5);
var_dump($angka);
echo "\n";

$nama = ["and, dre, as"];
var_dump($nama);
echo "\n";

$nilai = [10, 7, 8, 7.5, "an"];
var_dump($nilai);
echo "\n";

// =============================================================================================================================================
// Beberapa operasi array di PHP
// $array[index]            untuk mengakses data diarray pda nomor index
// $array[index] = value    untuk mengubah data diarray pada nomor index dengan value baru
// $array[] = vale          untuk menmbah data diarray pada posisi paling belakang
// unset($array[index])     untuk menghapus data diarray, index otomatis hilang dari array
// count($array)            untuk mengambil total data diarray

$nilai = [1, 2, 3, 4, 5];
// mengakses data
var_dump($nilai[2]);

// mengubah data
var_dump($nilai[4] = 8);
var_dump($nilai);

// menghapus data
unset($nilai[4]);
var_dump($nilai);

// menambahkan data
$nilai[] = 9;
var_dump($nilai);

// menghitung total data
var_dump(count($nilai));

// ==============================================================================================================================================
// Array sebagai Map
// Biasanya dikebanyakan bahasa pemrograman terdapat tipe data bernama Map, yaitu asosiasai antara key dan value
// Namun diPHP Map bisa dibuat menggunakan array
// Secara default array akan menggunakan index(number) sebagai key dan valuenya bebas memasukkan data ke dalam array
// Namun jika ingin bisa mengubah indexnya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misalnya
// Hal tersebut terlihat seperti Map dibahasa pemrograman lain

$data = array(
    "id" => "Div Network",
    "name" => "Andre",
    "age" => 22
);
var_dump($data["id"]);

$data2 = [
    "id" => "Div Network",
    "name" => "Andre",
    "age" => 22
];
var_dump($data2["id"]);

// ==============================================================================================================================================
// Array didalam Array
// Array diPHP bisa berisikan data apapun, sehingga bisa membuat aray didalam array jika memang dibutuhkan
$datapribadi = array(
    "id" => "Div Networking",
    "name" => "Justin Bieber",
    "age" => 17,
    "alamat" => array(
        "kota" => "salatiga",
        "kecamatan" => "Sidorejo",
        "negara" => "Indonesia"
    )
);

var_dump($datapribadi["alamat"]["negara"]);
?>