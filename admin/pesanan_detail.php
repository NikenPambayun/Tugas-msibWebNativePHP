<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);
?>

<div>
    <br>
    <h4>Tanggal : <?= $pesanan['tanggal'] ?></h4>
    <h4>Total : <?= $pesanan['total'] ?></h4>
    <h4>Pelanggan ID :<?= $pesanan['pelanggan_id'] ?></h4>
</div>