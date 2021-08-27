<?php
// Variable adalah tempat untuk menyimpan data hingga bisa digunakan lagi di kode program selanjutnya
// Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
// Untuk membuat variable bisa menggunakan tanda $ (dolar) diikuti dengan nama variablenya
// Penamaan varibale tidak boleh mengandung spasi

$name = "Andre";
$age = 22;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;
echo "\n";


// Variable variables
// PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
// Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan untuk tidak menggunakan firut ini kecuali memang diperlukan
// Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengan nama varibalenya

$contoh ="Justin";
$$contoh ="Bieber";

echo "contoh : ";
echo $contoh;
echo "\n";

echo "Justin : ";
echo $Justin;
echo "\n"
?>