<?php

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