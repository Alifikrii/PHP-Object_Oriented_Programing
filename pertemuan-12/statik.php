<?php
// cara menggunakan keyword dan method statik
// nilai statik akan selalu tetap
// digunakan untuk membuat fungsi bantuan // helper

class Contohstatic {
    public static $angka = 1;
    
    public static function halo(){
        return "halo." . self::$angka++ . "KALI";
    }
}

echo Contohstatic::$angka;
echo "<br>";
echo Contohstatic::halo();
echo "<br>";
echo Contohstatic::halo();
echo "<br>";
echo Contohstatic::halo();
echo "<br>";
echo Contohstatic::halo();
echo "<br>";
echo Contohstatic::halo();
echo "<br>";
echo Contohstatic::halo();
echo "<br>";
echo Contohstatic::halo();
echo "<br>";
echo Contohstatic::halo();
?>