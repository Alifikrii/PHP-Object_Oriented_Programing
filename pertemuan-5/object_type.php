<?php

class produk{
    public  $judul ="judul", 
            $penulis ="penulis",    
            $penerbit ="penerbit", 
            $harga =0; 

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
        return "$this->harga";
    }
        

}


// membuat sebuah objek menjadi tipe data sendiri yang bisa kita gunakan pada kelas, 
// ini bisa kita gunakan untuk optimalisasi agar data yang ditampilkan lebih rapih dan lebih spesifik
class CetakInfoProduk {
    public function cetak(Produk $produk){
        $string = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $string;
    }
} 



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
echo "<br>";

echo "Mencoba Object Type";
echo "<br>";
echo "<br>";
$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);
echo "<br>";
echo $infoproduk1->cetak($produk2);
echo "<br>";
echo $infoproduk1->cetak($produk3);
echo "<hr>";

?>

