<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);
?>

<div>
    <br>
    <h4>Kode : <?= $produk['kode'] ?></h4>
    <h4>Nama : <?= $produk['nama'] ?></h4>
    <h4>Harga Beli : <?= $produk['harga_beli'] ?></h4>
    <h4>Harga Jual : <?= $produk['harga_jual'] ?></h4>
    <h4>Stok : <?= $produk['stok'] ?></h4>
    <h4>Minimal Stok : <?= $produk['min_stok'] ?></h4>
    <h4>Jenis Produk ID : <?= $produk['jenis_produk_id'] ?></h4>
</div>