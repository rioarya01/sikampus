<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title font-weight-bold">Data Dosen</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                    <i class="fas fa-plus fa-fw"></i>
                    Tambah Data
                    </button>
                    <br><br>
                    <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Program Studi</th>
                        <th>Tahun Mulai Mengajar</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 0;
                        $query = mysqli_query($connection, "SELECT * FROM tb_dosen");
                        while($dosen = mysqli_fetch_array($query)){
                        $no++;
                        ?>
                        <tr>
                            <td width="5%"><?= $no; ?></td>
                            <td><?= $dosen['nama']; ?></td>
                            <td><?= $dosen['nip']; ?></td>
                            <td><?= $dosen['program_studi']; ?></td>
                            <td><?= $dosen['tahun_mulai_mengajar']; ?></td>
                            <td><?= $dosen['jenis_kelamin']; ?></td>
                            <td>
                                <a onclick="delete_data(<?= $dosen['id']; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="index.php?page=edit-data-dosen&&id=<?= $dosen['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                <a class="view-data-dosen btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                                    data-nama="<?= $dosen['nama']; ?>"
                                    data-nip="<?= $dosen['nip']; ?>"
                                    data-prodi="<?= $dosen['program_studi']; ?>"
                                    data-tahun="<?= $dosen['tahun_mulai_mengajar']; ?>"
                                    data-jk="<?= $dosen['jenis_kelamin']; ?>"
                                    data-foto="<?= $dosen['foto']; ?>"
                                >
                                View Data
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- Modal Add Data -->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Tambah Data Dosen</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="GET" action="add/add_data_dosen.php">
            <div class="modal-body">
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="NIP" name="nip" required>
                </div>
                <div class="col">
                <select class="custom-select" id="inputGroupSelect01" name="program_studi" required>
                <option selected>Program Studi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Komputer">Sistem Komputer</option>
                </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col d-flex align-items-center">
                <select class="custom-select" id="inputGroupSelect02" name="jenis_kelamin" required>
                    <option selected>Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                </div>
                <div class="col d-flex align-items-center">
                <select class="custom-select" id="inputGroupSelect02" name="tahun_mulai_mengajar" required>
                    <option selected>Tahun Mulai Mengajar</option>
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
                <div class="col d-flex align-items-center">
                <div class="flex-column">
                    <label class="form-label" for="customFile">Upload Foto</label>
                    <input type="file" class="form-control-file" id="customFile" name="foto" required>
                </div>
                </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-info">Simpan Data</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add data -->

<!-- Modal View Data -->
<div class="modal fade" id="modal-view">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title font-weight-bold">Data Dosen</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="GET" action="add/add_data_dosen.php">
            <div class="modal-body" id="result-view-data">
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Tutup</button>
            </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal view data -->

<script>
    function delete_data(data_id){
        // alert('Data berhasil dihapus');
        // window.location=("delete/delete_data.php?id="+data_id);
        Swal.fire({
        title: "Apakah Data Ingin Dihapus?",
        text: "Data yang sudah dihapus tidak bisa dikembalikan",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Batal",
        confirmButtonColor: "#d33",
        confirmButtonText: "Ya, Hapus"
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
            title: "Terhapus",
            text: "Data berhasil dihapus",
            icon: "success"
            }).then(() => {
            // After the "Deleted" alert is confirmed, then reload the page
            window.location.href = "delete/delete_data_dosen.php?id=" + data_id;
            });
        }
        });
    }
</script>