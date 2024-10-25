<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title font-weight-bold">Data Mata Kuliah Teknik Informatika</h3>

                        <div class="card-tools">
                            <!-- Input search yang akan memicu AJAX untuk pencarian -->
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" id="table_search_ti" class="form-control float-right" placeholder="Cari mata kuliah TI ...">

                                <!-- <div class="input-group-append">
                                    <button class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mata Kuliah</th>
                                    <th>Kode Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Jenis Mata Kuliah</th>
                                    <th>Semester</th>
                                </tr>
                            </thead>
                            <tbody id="table_body_ti">
                                <!-- Data akan diisi oleh AJAX -->
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title font-weight-bold">Data Mata Kuliah Sistem Komputer</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" id="table_search_sk" class="form-control float-right" placeholder="Cari mata kuliah SK ...">

                                <!-- <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Kode Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Jenis Mata Kuliah</th>
                            <th>Semester</th>
                            </tr>
                        </thead>
                        <tbody id="table_body_sk">
                            <!-- Data akan diisi oleh AJAX -->
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Fungsi untuk load data tabel 1
        function load_data_ti(query = '') {
            $.ajax({
                url: "../app/search/search_mk.php",
                method: "POST",
                data: {
                    search: query,
                    table_id: 1 // Kirimkan table_id 1 untuk tabel pertama
                },
                success: function(data) {
                    $('#table_body_ti').html(data);
                }
            });
        }

        // Fungsi untuk load data tabel 2
        function load_data_sk(query = '') {
            $.ajax({
                url: "../app/search/search_mk.php",
                method: "POST",
                data: {
                    search: query,
                    table_id: 2 // Kirimkan table_id 2 untuk tabel kedua
                },
                success: function(data) {
                    $('#table_body_sk').html(data);
                }
            });
        }

        // Event untuk tabel 1 saat mengetik di input search 1
        $('#table_search_ti').on('keyup', function() {
            var query = $(this).val();
            load_data_ti(query); // Panggil fungsi load_data_1
        });

        // Event untuk tabel 2 saat mengetik di input search 2
        $('#table_search_sk').on('keyup', function() {
            var query = $(this).val();
            console.log(query);
            load_data_sk(query); // Panggil fungsi load_data_2
        });

        // Panggil load data saat halaman pertama kali dibuka
        load_data_ti(); // Tabel 1
        load_data_sk(); // Tabel 2
    });
</script>
