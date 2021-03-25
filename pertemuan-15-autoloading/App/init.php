<?php

// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/produk.php';
// require_once 'Produk/sinetron.php';
// require_once 'Produk/drama.php';


spl_autoload_register(function($class){
    require_once __DIR__ . '/Produk/' . $class . '.php';
});