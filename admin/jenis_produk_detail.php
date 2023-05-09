<?php
$id = $_REQUEST['id'];
$model = new JenisProduk();
$jenis_produk = $model->getJenisProduk($id);
?>

<div>
    <br>
    <h4>Nama : <?= $jenis_produk['nama'] ?></h4>
    <h4>Keterangan : <?= $jenis_produk['ket'] ?></h4>
</div>