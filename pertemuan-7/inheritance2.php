<?php

class produk{
    public  $judul, 
            $penulis,    
            $penerbit, 
            $harga,
            $jumeps,
            $playtime,
            $tipe;

     public function __construct( $judul="judul", $penulis="penulis", $penerbit ="penerbit", $harga =0, $jumeps = 0, $playtime = 0, $tipe ){
         $this->judul = $judul;
         $this->penulis = $penulis;
         $this->penerbit = $penerbit;
         $this->harga = $harga;
         $this->jumeps = $jumeps;
         $this->playtime = $playtime;
         $this->tipe = $tipe;
    }
    
    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getprice(){
        return "$this->harga";
    }
    public function infofull(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->getprice()})";
        if ($this->tipe == "Drama") {       
            $str .= " - {$this->jumeps} Halaman.";
        }
        else if($this->tipe == "Game") {
            $str .= " ~ {$this->playtime} Jam.";
        }
        return $str;
    }

        

}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $string = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $string;
    }
} 



$produk1 = new produk("Start_UP","Alfikri","TVN","16000", 16, 0, "Drama");
$produk2 = new produk("True Beauty","Sapira","TVN","16000",16, 0, "Drama");
$produk3 = new produk("Mr-Queen","Fajri","TVN","20000",0,20, "Sinetron");



echo $produk1->infofull();
echo "<br>";
echo $produk2->infofull();
echo "<br>";
echo $produk3->infofull();


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

