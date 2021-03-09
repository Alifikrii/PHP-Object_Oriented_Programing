<?php

class produk{
    public  $judul, 
            $penulis,    
            $penerbit, 
            $harga,
            $jumeps,
            $playtime;

     public function __construct( $judul="judul", $penulis="penulis", $penerbit ="penerbit", $harga =0, $jumeps = 0, $playtime = 0){
         $this->judul = $judul;
         $this->penulis = $penulis;
         $this->penerbit = $penerbit;
         $this->harga = $harga;
         $this->jumeps = $jumeps;
         $this->playtime = $playtime;
    }
    
    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getprice(){
        return "$this->harga";
    }
    public function infofull(){
        $str = "Utama : {$this->judul} | {$this->getlabel()} (Rp. {$this->getprice()})";
        return $str;
    }

        

}

// class CetakInfoProduk {
//     public function cetak(Produk $produk){
//         $string = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
//         return $string;
//     }
// } 

class drama extends produk 
{
    public function infofull(){
        $str =" DRAMA : {$this->judul} | {$this->getlabel()} (Rp. {$this->getprice()}) {$this->jumeps} episode.";
        return $str;
    }
   
}
class sinetron extends produk 
{
    public function infofull(){
        $str =" Sinetron : {$this->judul} | {$this->getlabel()} (Rp. {$this->getprice()}) {$this->playtime} jam.";
        return $str;
    }
    
}

$produk1 = new drama("Start_UP","Alfikri","TVN",16000, 16,0);
$produk2 = new drama("True Beauty","Sapira","TVN",16000,16,0);
$produk3 = new sinetron("Mr-Queen","Fajri","TVN",20000,0,20);
$produk4 = new sinetron("2D1N","Nanda","DBS",20000,0,68);


echo $produk1->infofull();
echo "<br>";
echo $produk2->infofull();
echo "<br>";
echo $produk3->infofull();
echo "<br>";
echo $produk4->infofull();

// echo "FIKRI : ".$produk1->getlabel();
// echo "<br>";
// echo "Judul dan Harga : ". $produk1->getprice();
// echo "<hr>";
// echo "FIRA : ".$produk2->getlabel();
// echo "<br>";
// echo "Judul dan Harga : ". $produk2->getprice();
// echo "<hr>";
// echo "FAJRI : ".$produk3->getlabel();
// echo "<br>";
// echo "Judul dan Harga : ". $produk3->getprice();
// echo "<hr>";
// echo "<br>";

// echo "Mencoba Object Type";
// echo "<br>";
// echo "<br>";
// $infoproduk1 = new CetakInfoProduk();
// echo $infoproduk1->cetak($produk1);
// echo "<br>";
// echo $infoproduk1->cetak($produk2);
// echo "<br>";
// echo $infoproduk1->cetak($produk3);
// echo "<hr>";

?>

