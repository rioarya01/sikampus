<?php 
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM tb_mahasiswa WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Ubah Data Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="update/update_data.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $view['nama']?>">
                            <input type="text" class="form-control" placeholder="Nama" name="id" value="<?= $view['id']?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>NIM</label>
                            <input type="text" class="form-control" placeholder="NIM" name="nim" value="<?= $view['nim']?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                            <label>Semester</label>
                            <select class="custom-select" id="inputGroupSelect01" name="semester">
                                <option value="<?= $view['semester']?>" selected><?= $view['semester']?></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Jenis Kelamin</label>
                            <select class="custom-select" id="inputGroupSelect02" name="jenis_kelamin">
                                <option value="<?= $view['jenis_kelamin']?>" selected><?= $view['jenis_kelamin']?></option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="customFile">Upload Foto</label>
                            <input type="file" name="foto" class="form-control-file" id="customFile" onchange="previewImage(event)">
                            <input type="hidden" name="foto_lama" value="<?= $view['foto']?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                    <div class="row">
                        <div class="col-sm-12">
                            <img id="imgPreview" src="./photo/mahasiswa/<?= $view['foto']?>" alt="Foto" width="200px" class="rounded float-right mt-2">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>

<script>
    function previewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    
    reader.onload = function(){
        var imgElement = document.getElementById('imgPreview');
        imgElement.src = reader.result; // Menampilkan gambar yang baru dipilih
    }
    
        reader.readAsDataURL(input.files[0]); // Membaca file dan menampilkan gambar sebagai URL
    }
</script>