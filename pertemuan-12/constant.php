<?php
//constanta adalah sebuah variabel untuk menyimpan nilai yang tidak akan berubah
// bisa digunakan keyword define() dan keyword const

define('PI', 3.14);
echo PI;

echo "<br>";

const TglLhir = "21-05-01";
echo TglLhir;

// perbedaannya adalah ketika mau menggunakan object oriented 
// -define tidak bisa disimpan kedalam kelas harus sebagai konstanta global
// - const dapat disimpan kedalam kelas

// contoh

class COBA {
    const NAMA ='AM ALIFIKRI';
}
echo "<br>";
echo COBA::NAMA;

// // ada juga magic costant
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__
// dll
echo "<br>";

echo __LINE__;
echo __FILE__;


?>