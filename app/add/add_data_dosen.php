<?php 
include('../../conf/config.php');
$nama =  $_GET['nama']; 
$nip = $_GET['nip']; 
$prodi =  $_GET['program_studi']; 
$th_awal_mengajar =  $_GET['tahun_mulai_mengajar']; 
$jk = $_GET['jenis_kelamin']; 
$foto = $_GET['foto']; 
$query = mysqli_query($connection, "INSERT INTO tb_dosen (id, nama, nip, program_studi, tahun_mulai_mengajar, jenis_kelamin, foto) VALUES ('', '$nama', '$nip', '$prodi', '$th_awal_mengajar', '$jk', '$foto')");
header('Location: ../index.php?page=data-dosen');
?>