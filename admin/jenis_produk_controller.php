<?php
include_once 'koneksi.php';
include_once 'models/Jenis_Produk.php';

// step pertama yaitu menangkap request form
$nama = $_POST['nama'];
$ket = $_POST['ket'];

// menangkap form diatas dijadikan array
$data = [
    $nama,
    $ket
];

$model = new JenisProduk();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    case 'ubah':
        $data[] = $_POST['idx']; $model->ubah($data); break;
    default:
    header('Location:index.php?url=jenis_produk');
    break;
}
header('Location:index.php?url=jenis_produk');
?>