<?php 
include('../../conf/config.php');
$nama =  $_GET['nama']; // This is the name of the input field in the form (add_data.php)
$nim = $_GET['nim']; // This is the name of the input field in the form (add_data.php)
$smt =  $_GET['semester']; // This is the name of the input field in the form (add_data.php)
$jk = $_GET['jenis_kelamin']; // This is the name of the input field in the form (add_data.php)
$foto = $_GET['foto']; // This is the name of the input field in the form (add_data.php)
$query = mysqli_query($connection, "INSERT INTO tb_mahasiswa (id, nama, nim, semester, jenis_kelamin, foto) VALUES ('', '$nama', '$nim', '$smt', '$jk', '$foto')");
header('Location: ../index.php?page=data-mahasiswa');
?>