<?php 
include('../../conf/config.php');

// Tangkap data dari form dengan POST
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$pembayaran = $_POST['pembayaran'];
$keterangan = $_POST['keterangan'];
$tgl_bayar = $_POST['tgl_bayar'];

// Query untuk insert data ke database
$query = mysqli_query($connection, "INSERT INTO tb_pembayaran (id, nama, nim, pembayaran, keterangan, tgl_bayar) VALUES ('', '$nama', '$nim', '$pembayaran', '$keterangan', '$tgl_bayar')");

// Redirect kembali ke halaman utama setelah insert
header('Location: ../index.php?page=data-pembayaran');
?>