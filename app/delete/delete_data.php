<?php 
include('../../conf/config.php');
$id =  $_GET['id'];

$query = mysqli_query($connection, "DELETE FROM tb_mahasiswa WHERE id='$id'");
header('Location: ../index.php?page=data-mahasiswa');
?>