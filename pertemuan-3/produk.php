<?php
// property adalah sesuatu yang mirip variabel yang berada didalam object, ditambah visibility didepannya
// method adalah fungsi didalam object, ditambah visibility didepannya
class produk{
    public  $judul ="judul", 
            $penulis ="penulis",    
            $penerbit ="penerbit", 
            $harga =0; //mengisi secara manual isi dari property dengan nilai default sesuka kalian

    // // method
    // public function sayhello() {
    //     return "halo fikri!";
    // }

    p

}

// $produk1 = new produk();
// $produk1 -> judul ="FIKRI"; //bisa di timpa nama propertinya 
// var_dump($produk1);


// $produk2 = new produk();
// $produk2 -> judul = "fajri";
// $produk2 -> tambahproperty = "hahahahahaah";
// var_dump($produk2);

$produk3 = new produk();
$produk3 -> judul ="True Beauty";
$produk3 -> penulis = "Fira";
$produk3 -> penerbit = "erlangga";
$produk3 -> harga = 300000;

echo "Drakor : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayhello();

?>