<div class="row">
    <div class="col-lg-8">
        <h1 class="font-weight-bold text-primary"><span id="nama"><?= $_POST['nama'];?></span></h1>
        <h4 class="font-weight-bolder text-secondary">Nim : <span id="nim"><?= $_POST['nim'];?></span></h4>
        <h5 class="font-weight-bolder text-secondary">Semester : <span id="semester"><?= $_POST['semester'];?></span></h5>
        <h5 class="font-weight-bolder text-secondary">Jenis Kelamin : <span id="jenis_kelamin"><?= $_POST['jenis_kelamin'];?></span></h5>
    </div>
    <div class="col-lg-4">
        <img src="./photo/mahasiswa/<?= $_POST['foto'];?>" alt="Foto" width="200px" class="rounded d-flex align-content-center">
    </div>
</div>