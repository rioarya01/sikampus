<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- View Data Mahasiswa -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title font-weight-bold">Data Pembayaran Mahasiswa</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Semester</th>
                <th class="text-center">Action</th>
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
                    <td class="text-center">
                      <a 
                        class="view-pembayaran btn btn-sm btn-warning"
                        data-nama="<?= $mhs['nama']; ?>"
                        data-nim="<?= $mhs['nim']; ?>">
                        Lihat Pembayaran
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- End View Data Mahasiswa -->
        <!-- View Data Pembayaran -->
        <div id="result-view-pembayaran">

        </div>
        <?php // include('view/view_data_pembayaran.php'); ?>
        <!-- End View Data Pembayaran -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

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