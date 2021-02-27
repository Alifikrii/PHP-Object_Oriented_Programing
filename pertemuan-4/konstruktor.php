<?php

class produk{
    public  $judul ="judul", 
            $penulis ="penulis",    
            $penerbit ="penerbit", 
            $harga =0; 
      
    //         // mencoba constructor
    // public function __construct( ){
    //     echo "halo fikri!!"; 
    // }

     public function __construct( $judul, $penulis, $penerbit, $harga ){
         $this->judul = $judul;
         $this->penulis = $penulis;
         $this->penerbit = $penerbit;
         $this->harga = $harga;
    }
    
    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getprice(){
        return "$this->judul, $this->harga";
    }
        

}

// jadi dari inisialisasi objek yqng ribet pada pertemuan tiga dapat kita sederhanakan dengan menggunakan konstruktor yang terlah di inisialisasi didalam class dan implementaasinya seperti dibawah ini
$produk1 = new produk("Start_UP","Alfikri","TVN","16000");
$produk2 = new produk("True Beauty","Sapira","TVN","16000");
$produk3 = new produk("Mr-Queen","Fajri","TVN","20000");

echo "FIKRI : ".$produk1->getlabel();
echo "<br>";
echo "Judul dan Harga : ". $produk1->getprice();
echo "<hr>";
echo "FIRA : ".$produk2->getlabel();
echo "<br>";
echo "Judul dan Harga : ". $produk2->getprice();
echo "<hr>";
echo "FAJRI : ".$produk3->getlabel();
echo "<br>";
echo "Judul dan Harga : ". $produk3->getprice();
echo "<hr>";
?>