<?php

// jadi overriding ini mengganti variabel yang dituliskan berulang yang sama dengan class parent dan child  sehingga lebih simpel yaitu dengan membuat dua duanya terpakai

// ini namanya kelas (temptlate dari objek)'


interface InfoProduk
{
   public function infofull();
}


abstract class produk{
    // ini namanya property
    protected $judul, 
            $penulis,    
            $penerbit,
             $diskon=0;

    private $harga;
    //  set private jika properti cuman boleh dipakai di klass nya tertyentu    
    //  set protected jika properti cuman boleh dipakai tidak sembarangan diubah hanya boleh digunakan di kelas dan turunannya     

    // ini namanya method
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
        return $this->harga - ( $this->harga * $this->diskon/100);
    }
    
    
    abstract public function getInfo();
    
// celah keamanan
    //bikin getter
    public function getjudul(){
    return $this->judul;
    }

    // bikin setter
    public function setjudul($judul){
        $this->judul = $judul;
    }

    // ini DISOKONNNN bisa di protected jika disimpan di turunannya 
    public function set_diskon($diskon){
        $this->diskon = $diskon;
    }
    public function getdiskon( )    {
        return $this->diskon;
    }

}
// bisa ditambahkan untuk atribut yang lain


class drama extends produk implements InfoProduk
{
    public $jumlah_eps;

    public function __construct($judul="judul", $penulis="penulis", $penerbit ="penerbit", $harga = 0, $jumlah_eps = 0) {
        parent::__construct($judul, $penulis, $penerbit , $harga);
        $this->jumlah_eps = $jumlah_eps;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->getprice()})";
        return $str;
    }

    public function infofull()
    {
        $str =" DRAMA : " . $this->getInfo() . "{$this->jumlah_eps} episode.";    //untuk cara pertama
        return $str;
    }
   
}
class sinetron extends produk implements InfoProduk
{
    public $jumlah_jam;

    public function __construct($judul="judul", $penulis="penulis", $penerbit ="penerbit", $harga = 0, $jumlah_jam = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlah_jam = $jumlah_jam;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->getprice()})";
        return $str;
    }

    public function infofull(){
        $str =" Sinetron : " . $this->getInfo() . " {$this->jumlah_jam} jam.";   //untuk cara pertama
        return $str;
    }
}

class CetakInfoProduk{
    public $daftarProduk = array();

    public function tambahProduk (produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str ="Daftar Movie : <br>";

        foreach( $this->daftarProduk as $p){
            $str .= "- {$p->infofull()} <br>";
        }

    return $str;
    }




}


// ini nmanya objek 

$produk1 = new drama("Start_UP","Alfikri","TVN",16000,16);
$produk2 = new drama("True Beauty","Sapira","TVN",16000,16);
$produk3 = new sinetron("Mr-Queen","Fajri","TVN",20000,20);
$produk4 = new sinetron("2D1N","Nanda","DBS",20000,68);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();





















































// echo $produk1->infofull();
// echo "<br>";
// echo $produk2->infofull();
// echo "<br>";
// echo $produk3->infofull();
// echo "<br>";
// echo $produk4->infofull();
// echo "<hr>";

// // $produk2->harga=2000;
// // membaca dan mengubah isi properti yang protected
// $produk3->set_diskon(20);
// echo "harga termasuk diskon = ";
// echo $produk2->getprice();

// echo"<hr>";

// // bida di set sesuka hati
// // bisa diubah judulna gais
// $produk1 -> setjudul("AISYAH2020");
// // terus keluarannya dibawah ini
// echo $produk1-> getjudul();
// // bisa diopakai untuk yang lain juga atribut yang lain maksudnya males aja backspace kelamaan hehehe jadi terus aja nulis
?>

