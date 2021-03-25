<?php

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