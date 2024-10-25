<?php include('../../conf/config.php');?>

<!-- Tabel View Data Pembayaran -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">Data Pembayaran : <?= $_POST['nama']; ?> (<?= $_POST['nim']; ?>)</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-lg">
        <i class="fas fa-plus fa-fw"></i>
        Tambah Data Pembayaran
    </button>
    <br><br>
    <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th class="text-right">Pembayaran</th>
            <th>Keterangan</th>
            <th>Tanggal Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 0;
            $total = 0;
            $nim = $_POST['nim'];
            $query = mysqli_query($connection, "SELECT * FROM tb_pembayaran WHERE nim = '$nim'");
            while($mhs = mysqli_fetch_array($query)){
                $no++;
            ?>
                <tr>
                    <td width="5%"><?= $no; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td class="text-right"><?= number_format($mhs['pembayaran']).',-'; ?></td>
                    <td><?= $mhs['keterangan']; ?></td>
                    <td><?= $mhs['tgl_bayar']; ?></td>
                </tr>
            <?php 
            $total += $mhs['pembayaran'];
            } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan=3 class="text-center h5 font-weight-bold">Jumlah</th>
                <th class="text-right h5 font-weight-bold"><?= 'Rp. '.number_format($total).',-'; ?></th>
                <th colspan=2></th>
            </tr>
        </tfoot>
    </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /. tabel view data pembayaran -->

<!-- Modal Input Data Pembayaran -->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <!-- Horizontal Form -->
        <div class="modal-content card card-warning">
            <div class="card-header">
                <h3 class="card-title">Input Data Pembayaran</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="add/add_data_pembayaran.php" class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="nama" value="<?= $_POST['nama']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="nim" value="<?= $_POST['nim']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPembayaran" class="col-sm-2 col-form-label">Pembayaran KRS</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control inputPembayaran" required placeholder="Rp. 0">
                                <small class="form-text text-muted">Berikan rincian pembayaran di keterangan</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-muted">Pembayaran KRS SP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" name="" placeholder="Rp. 0" disabled>
                                <small class="form-text text-danger">Maaf periode KRS Semester Pendek belum dibuka</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>PPN 11%</label>
                                    <div class="">
                                        <input type="text" class="form-control bg-white inputPPN" value="Rp. 0" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Tanggal Bayar</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" name="tgl_bayar" required data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" required rows="3"></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><h4 class="font-weight-bold">Total</h4></div>
                            <div class="col-sm-10">
                                <h4 id="totalInput" class="font-weight-bold">Rp. </h4>
                                <!-- Input hidden untuk menyimpan total pembayaran -->
                                <input type="hidden" id="totalHiddenInput" name="pembayaran" value="0">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" id="submit_data_pembayaran" class="btn btn-warning">Bayar</button>
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Batal</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
                <!-- /.form end -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal input data pembayaran -->

<script>
    // Fungsi untuk memformat angka dengan pemisah ribuan
    function formatRupiah(angka) {
        let number_string = angka.replace(/[^,\d]/g, '').toString(), // Menghapus karakter selain angka
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // Tambahkan titik jika angka sudah ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah; // Menambahkan koma jika ada pecahan
        return 'Rp. ' + rupiah;
    }

    // Fungsi untuk menghitung PPN 11%
    function hitungPPN(pembayaran) {
        return pembayaran * 0.11; // Kalkulasi PPN 11%
    }

    // Fungsi untuk menghitung total pembayaran
    function hitungTotal(pembayaran, ppn) {
        return pembayaran + ppn;
    }

    // Event listener untuk memantau input pada setiap elemen dengan class 'inputPembayaran'
    document.querySelectorAll('.inputPembayaran').forEach(function(input) {
        input.addEventListener('input', function(e) {
            // Ambil nilai asli input tanpa format
            let angkaAsli = e.target.value.replace(/[Rp.\s,-]/g, '');

            // Jika ada input, lakukan kalkulasi PPN dan Total
            if (angkaAsli !== "") {
                // Konversi nilai asli ke number
                let pembayaran = parseFloat(angkaAsli) || 0;

                // Kalkulasi PPN
                let ppn = hitungPPN(pembayaran);

                // Kalkulasi Total Pembayaran
                let total = hitungTotal(pembayaran, ppn);

                // Tampilkan hasil PPN dan Total
                document.querySelector('.inputPPN').value = formatRupiah(ppn.toString());
                document.getElementById('totalInput').innerHTML = formatRupiah(total.toString());

                // Update nilai total pembayaran di input hidden agar dikirim ke server
                document.getElementById('totalHiddenInput').value = total;
            } else {
                // Jika input kosong, set nilai PPN dan Total ke 0
                document.querySelector('.inputPPN').value = 'Rp. 0,-';
                document.getElementById('totalInput').innerHTML = 'Rp. 0,-';

                // Set nilai input hidden ke 0
                document.getElementById('totalHiddenInput').value = 0;
            }

            // Format nilai pembayaran dengan rupiah
            e.target.value = formatRupiah(angkaAsli);
        });
    });

    // Fungsi untuk mengecek apakah semua input form sudah terisi
    function validasiForm() {
        const nama = document.querySelector('input[name="nama"]').value.trim();
        const nim = document.querySelector('input[name="nim"]').value.trim();
        const pembayaran = document.querySelector('input[name="pembayaran"]').value.trim();
        const keterangan = document.querySelector('textarea[name="keterangan"]').value.trim();
        const tgl_bayar = document.querySelector('input[name="tgl_bayar"]').value.trim();

        // Cek apakah semua field terisi
        if (!nama || !nim || !pembayaran || !keterangan || !tgl_bayar) {
            // Jika ada yang belum diisi, tampilkan alert
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Semua field harus diisi sebelum submit!'
            });
            return false; // Jangan submit form
        }
        return true; // Semua field sudah terisi, lanjutkan
    }

    // Event listener untuk submit form
    document.getElementById('submit_data_pembayaran').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah submit langsung

        // SweetAlert konfirmasi jika form valid
        if (validasiForm()) {
            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Data akan disimpan ke dalam database!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, simpan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit form setelah konfirmasi
                    document.querySelector('.form-horizontal').submit();
                }
            });
        }
    });



    
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'YYYY-MM-DD'
    });
</script>