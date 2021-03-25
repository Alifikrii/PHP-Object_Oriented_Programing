<?php
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