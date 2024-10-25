<?php 
include('../../conf/config.php');
$id =  $_POST['id']; 
$nama =  $_POST['nama']; 
$nip = $_POST['nip']; 
$prodi =  $_POST['program_studi']; 
$th_mulai_mengajar =  $_POST['tahun_mulai_mengajar']; 
$jk = $_POST['jenis_kelamin'];

// Cek apakah ada file foto yang diupload
if ($_FILES['foto']['name'] != '') {
    // Jika ada file baru diupload
    $file_name = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp, '../photo/dosen/'.$file_name);
} else {
    // Jika tidak ada file baru, tetap gunakan foto lama
    $file_name = $_POST['foto_lama'];
}

// Update query dengan data yang baru
$query = mysqli_query($connection, "UPDATE tb_dosen SET nama='$nama',nip='$nip',program_studi='$prodi',tahun_mulai_mengajar='$th_mulai_mengajar',jenis_kelamin='$jk', foto='$file_name' WHERE id='$id'");

header('Location: ../index.php?page=data-dosen');
?>