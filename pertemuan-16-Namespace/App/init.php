<?php

// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/produk.php';
// require_once 'Produk/sinetron.php';
// require_once 'Produk/drama.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';


spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});