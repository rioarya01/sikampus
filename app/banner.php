<?php 
include("../conf/config.php");

// Query untuk menghitung jumlah mahasiswa laki-laki dan perempuan
$query_mahasiswa = mysqli_query($connection, "SELECT id, 
    (SELECT count(id) FROM tb_mahasiswa WHERE jenis_kelamin='laki-laki') AS laki_laki_mahasiswa,
    (SELECT count(id) FROM tb_mahasiswa WHERE jenis_kelamin='perempuan') AS perempuan_mahasiswa
    FROM tb_mahasiswa");

// Query untuk menghitung jumlah dosen laki-laki dan perempuan
$query_dosen = mysqli_query($connection, "SELECT id,
    (SELECT count(id) FROM tb_dosen WHERE jenis_kelamin='laki-laki') AS laki_laki_dosen,
    (SELECT count(id) FROM tb_dosen WHERE jenis_kelamin='perempuan') AS perempuan_dosen
    FROM tb_dosen");

$view_mahasiswa = mysqli_fetch_array($query_mahasiswa);
$view_dosen = mysqli_fetch_array($query_dosen);

?>


<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
    <div class="inner">
        <h3><?= $view_mahasiswa['laki_laki_mahasiswa'];?></h3>

        <p>Jumlah Mahasiswa Laki-laki</p>
    </div>
    <div class="icon">
        <i class="ion ion-bag"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
    <div class="inner">
        <h3><?= $view_mahasiswa['perempuan_mahasiswa'];?></h3>

        <p>Jumlah Mahasiswa Perempuan</p>
    </div>
    <div class="icon">
        <i class="ion ion-stats-bars"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
    <div class="inner">
        <h3><?= $view_dosen['laki_laki_dosen'];?></h3>

        <p>Jumlah Dosen Laki-laki</p>
    </div>
    <div class="icon">
        <i class="ion ion-person-add"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
    <div class="inner">
        <h3><?= $view_dosen['perempuan_dosen'];?></h3>

        <p>Jumlah Dosen Perempuan</p>
    </div>
    <div class="icon">
        <i class="ion ion-pie-graph"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->