<?php
$id = $_REQUEST['id'];
$model = new Pelanggan();
$pelanggan = $model->getPelanggan($id);
?>

<div>
    <br>
    <h4>Kode : <?= $pelanggan['kode'] ?></h4>
    <h4>Nama Pelanggan : <?= $pelanggan['nama_pelanggan'] ?></h4>
    <h4>Jenis Kelamin : <?= $pelanggan['jk'] ?></h4>
    <h4>Tempat Lahir : <?= $pelanggan['tmp_lahir'] ?></h4>
    <h4>Tanggal Lahir : <?= $pelanggan['tgl_lahir'] ?></h4>
    <h4>Email : <?= $pelanggan['email'] ?></h4>
    <h4>Kartu ID : <?= $pelanggan['kartu_id'] ?></h4>
</div>