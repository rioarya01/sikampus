<?php 
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM tb_dosen WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Ubah Data Dosen</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="update/update_data_dosen.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $view['nama']?>" required>
                            <input type="text" class="form-control" placeholder="Nama" name="id" value="<?= $view['id']?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" placeholder="NIP" name="nip" value="<?= $view['nip']?>" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Program Studi</label>
                            <select class="custom-select" id="inputGroupSelect01" name="program_studi" required>
                                <option value="<?= $view['program_studi']?>" selected><?= $view['program_studi']?></option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Komputer">Sistem Komputer</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                            <label>Tahun Mulai Mengajar</label>
                            <select class="custom-select" id="inputGroupSelect01" name="tahun_mulai_mengajar" required>
                                <option value="<?= $view['tahun_mulai_mengajar']?>" selected><?= $view['tahun_mulai_mengajar']?></option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Jenis Kelamin</label>
                            <select class="custom-select" id="inputGroupSelect02" name="jenis_kelamin" required>
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
                            <img id="imgPreview" src="./photo/dosen/<?= $view['foto']?>" alt="Foto" width="200px" class="rounded float-right mt-2">
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