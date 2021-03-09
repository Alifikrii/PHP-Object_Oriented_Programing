<?php

// jadi overriding ini mengganti variabel yang dituliskan berulang yang sama dengan class parent dan child  sehingga lebih simpel yaitu dengan membuat dua duanya terpakai
class produk{
    public  $judul, 
            $penulis,    
            $penerbit, 
            $harga;
            

     public function __construct( $judul="judul", $penulis="penulis", $penerbit ="penerbit", $harga =0)
     {
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
    public function infofull(){
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->getprice()})";
        return $str;
    }

        

}


class drama extends produk 
{
    public $jumlah_eps;

    public function __construct($judul="judul", $penulis="penulis", $penerbit ="penerbit", $harga = 0, $jumlah_eps = 0) {
        parent::__construct($judul, $penulis, $penerbit , $harga);
        $this->jumlah_eps = $jumlah_eps;

    }

    public function infofull(){
        $str =" DRAMA : " . parent::infofull() . "{$this->jumlah_eps} episode.";    //untuk cara pertama
        return $str;
    }
   
}
class sinetron extends produk 
{
    public $jumlah_jam;

    public function __construct($judul="judul", $penulis="penulis", $penerbit ="penerbit", $harga = 0, $jumlah_jam = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlah_jam = $jumlah_jam;
    }
    public function infofull(){
        $str =" Sinetron : " . parent::infofull() . " {$this->jumlah_jam} jam.";   //untuk cara pertama
        return $str;
    }
    
}

$produk1 = new drama("Start_UP","Alfikri","TVN",16000,16);
$produk2 = new drama("True Beauty","Sapira","TVN",16000,16);
$produk3 = new sinetron("Mr-Queen","Fajri","TVN",20000,20);
$produk4 = new sinetron("2D1N","Nanda","DBS",20000,68);


echo $produk1->infofull();
echo "<br>";
echo $produk2->infofull();
echo "<br>";
echo $produk3->infofull();
echo "<br>";
echo $produk4->infofull();

?>

