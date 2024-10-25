<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">
                <?php
                // Definisikan array rute dan judul halaman
                $pages = [
                    'dashboard' => 'Dashboard',
                ];

                // Definisikan halaman yang termasuk dalam kategori 'Akademik'
                $akademikPages = ['data-mahasiswa', 'data-pembayaran', 'data-mk', 'data-dosen'];

                // Cek apakah parameter 'page' ada, dan tampilkan judul yang sesuai
                $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard'; // Default ke dashboard jika tidak ada page

                // Periksa apakah halaman termasuk dalam Akademik
                if (in_array($page, $akademikPages)) {
                    echo 'Akademik';
                } else {
                    // Tampilkan judul halaman sesuai rute atau Dashboard jika tidak ada di array
                    echo isset($pages[$page]) ? $pages[$page] : 'Dashboard';
                }
                ?>
            </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="index.php?page=dashboard">
                            Home
                        </a>
                    </li>
                    <?php
                    // Cek parameter 'page' pada URL
                    if (isset($_GET['page'])) {
                        // Breadcrumb sesuai halaman
                        switch ($_GET['page']) {
                            case 'data-mahasiswa':
                                echo '<li class="breadcrumb-item active">Akademik</li>';
                                echo '<li class="breadcrumb-item active">Data Mahasiswa</li>';
                                break;

                            case 'data-pembayaran':
                                echo '<li class="breadcrumb-item active">Akademik</li>';
                                echo '<li class="breadcrumb-item active">Data Pembayaran</li>';
                                break;

                            case 'data-mk':
                                echo '<li class="breadcrumb-item active">Akademik</li>';
                                echo '<li class="breadcrumb-item active">Data Mata Kuliah</li>';
                                break;

                            case 'data-dosen':
                                echo '<li class="breadcrumb-item active">Akademik</li>';
                                echo '<li class="breadcrumb-item active">Data Dosen</li>';
                                break;

                            default:
                                echo '<li class="breadcrumb-item active">Dashboard</li>';
                                break;
                        }
                    } else {
                        // Jika tidak ada page parameter, tampilkan Dashboard sebagai default
                        echo '<li class="breadcrumb-item active">Dashboard</li>';
                    }
                    ?>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>