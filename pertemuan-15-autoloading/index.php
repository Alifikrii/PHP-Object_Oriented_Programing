<?php

require_once 'App/init.php';

$produk1 = new drama("Start_UP","Alfikri","TVN",16000,16);
$produk2 = new drama("True Beauty","Sapira","TVN",16000,16);
$produk3 = new sinetron("Mr-Queen","Fajri","TVN",20000,20);
$produk4 = new sinetron("2D1N","Nanda","DBS",20000,68);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();