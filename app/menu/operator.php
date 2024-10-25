<?php
// Jika 'page' tidak ada dalam URL, set default page ke 'dashboard' atau halaman lain
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link <?php echo ($page == 'dashboard' ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
        </li>

        <!-- Akademik Section -->
        <li class="nav-item <?php echo ($page == 'data-mahasiswa' || $page == 'data-pembayaran' || $page == 'data-mk' || $page == 'data-dosen' ? 'menu-open' : ''); ?>">
            <a href="#" class="nav-link <?php echo ($page == 'data-mahasiswa' || $page == 'data-pembayaran' || $page == 'data-mk' || $page == 'data-dosen' ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Akademik
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=data-mahasiswa" class="nav-link <?php echo ($page == 'data-mahasiswa' ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-pembayaran" class="nav-link <?php echo ($page == 'data-pembayaran' ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pembayaran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-mk" class="nav-link <?php echo ($page == 'data-mk' ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Mata Kuliah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-dosen" class="nav-link <?php echo ($page == 'data-dosen' ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Dosen</p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Logout -->
        <li class="nav-item">
            <a href="logout.php" class="nav-link text-red" id="logout-btn">
                <i class="nav-icon fas fa-power-off"></i>
                <p class="font-weight-bold">
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>

<script>
    // Tambahkan event listener untuk tombol logout
    document.getElementById('logout-btn').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default link

        // Tampilkan konfirmasi SweetAlert2
        Swal.fire({
            title: 'Yakin ingin keluar?',
            text: "Anda akan keluar dari sesi ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, keluar',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika dikonfirmasi, redirect ke halaman logout.php
                window.location.href = 'logout.php';
            }
        })
    });
</script>