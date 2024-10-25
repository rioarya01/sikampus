<?php 
include('../../conf/config.php');
$id =  $_GET['id'];

$query = mysqli_query($connection, "DELETE FROM tb_dosen WHERE id='$id'");
header('Location: ../index.php?page=data-dosen');
?>