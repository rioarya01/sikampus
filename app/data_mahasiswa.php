<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title font-weight-bold">Data Mahasiswa</h3>
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
                <th>NIM</th>
                <th>Semester</th>
                <th>Jenis Kelamin</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                $no = 0;
                $query = mysqli_query($connection, "SELECT * FROM tb_mahasiswa");
                while($mhs = mysqli_fetch_array($query)){
                  $no++;
                ?>
                  <tr>
                    <td width="5%"><?= $no; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['semester']; ?></td>
                    <td><?= $mhs['jenis_kelamin']; ?></td>
                    <td>
                      <a onclick="delete_data(<?= $mhs['id']; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data&&id=<?= $mhs['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                      <a class="view-data btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                        data-nama="<?= $mhs['nama']; ?>"
                        data-nim="<?= $mhs['nim']; ?>"
                        data-semester="<?= $mhs['semester']; ?>"
                        data-jk="<?= $mhs['jenis_kelamin']; ?>"
                        data-foto="<?= $mhs['foto']; ?>"
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
        <h4 class="modal-title">Tambah Data Mahasiswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="GET" action="add/add_data.php">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nama" name="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="NIM" name="nim" required>
            </div>
            <div class="col">
            <select class="custom-select" id="inputGroupSelect01" name="semester" required>
              <option selected>Semester</option>
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
          <div class="row mt-3">
            <div class="col d-flex align-items-center">
              <select class="custom-select" id="inputGroupSelect02" name="jenis_kelamin" required>
                <option selected>Jenis Kelamin</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
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
        <h4 class="modal-title font-weight-bold">Data Mahasiswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="GET" action="add/add_data.php">
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
          window.location.href = "delete/delete_data.php?id=" + data_id;
        });
      }
    });
  }
</script>