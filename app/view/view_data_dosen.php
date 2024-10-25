<div class="row">
    <div class="col-lg-8">
        <h1 class="font-weight-bold text-primary"><span id="nama"><?= $_POST['nama'];?></span></h1>
        <h4 class="font-weight-bolder text-secondary">Nip : <span id="nip"><?= $_POST['nip'];?></span></h4>
        <h5 class="font-weight-bolder text-secondary">Program Studi : <span id="program_studi"><?= $_POST['program_studi'];?></span></h5>
        <h5 class="font-weight-bolder text-secondary">Jenis Kelamin : <span id="jenis_kelamin"><?= $_POST['jenis_kelamin'];?></span></h5>
        <h5 class="font-weight-bolder text-secondary">Tahun Mulai Mengajar : <span id="tahun_mulai_mengajar"><?= $_POST['tahun_mulai_mengajar'];?></span></h5>
    </div>
    <div class="col-lg-4">
        <img src="./photo/dosen/<?= $_POST['foto'];?>" alt="Foto" width="200px" class="rounded d-flex align-content-center">
    </div>
</div>