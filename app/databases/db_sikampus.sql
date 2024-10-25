-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 04:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `program_studi` varchar(35) DEFAULT NULL,
  `tahun_mulai_mengajar` year(4) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama`, `nip`, `program_studi`, `tahun_mulai_mengajar`, `jenis_kelamin`, `foto`) VALUES
(1, 'Ara Mitako', '1020120219', 'Teknik Informatika', '2008', 'laki-laki', 'dosen (1).jpg'),
(2, 'Marlowe Cluff', '5654440047', 'Sistem Komputer', '2019', 'laki-laki', 'dosen (2).jpg'),
(3, 'Garner Ivanikhin', '2962327036', 'Teknik Informatika', '2005', 'perempuan', 'dosen (3).jpg'),
(4, 'Denys Sheather', '3299060015', 'Teknik Informatika', '2020', 'perempuan', 'dosen (4).jpg'),
(5, 'Krysna Lindner', '5116712575', 'Sistem Komputer', '2012', 'laki-laki', 'dosen (5).jpg'),
(6, 'Jemie Hamman', '5247950275', 'Teknik Informatika', '2015', 'laki-laki', 'dosen (6).jpg'),
(7, 'Fifi Trayton', '1771624000', 'Teknik Informatika', '2008', 'perempuan', 'dosen (7).jpg'),
(8, 'Raphael Kitteringham', '0304674575', 'Sistem Komputer', '2010', 'perempuan', 'dosen (8).jpg'),
(9, 'Lula Oyley', '9838278300', 'Sistem Komputer', '2012', 'perempuan', ''),
(11, 'Margo Ference', '6154974094', 'Teknik Informatika', '2005', 'laki-laki', ''),
(12, 'Josey Panons', '4856910043', 'Sistem Komputer', '2015', 'laki-laki', ''),
(13, 'Morris Gee', '9304060125', 'Sistem Komputer', '2020', 'laki-laki', ''),
(14, 'Prentiss Jerman', '2983884538', 'Teknik Informatika', '2010', 'perempuan', ''),
(15, 'Mignon Dunton', '7002406302', 'Teknik Informatika', '2014', 'perempuan', ''),
(16, 'Herc Jermy', '0809228165', 'Sistem Komputer', '2008', 'perempuan', ''),
(17, 'Petr Strangwood', '0334949572', 'Sistem Komputer', '2019', 'perempuan', ''),
(18, 'Simeon Callaby', '8954230830', 'Sistem Komputer', '2015', 'perempuan', ''),
(19, 'Curran Stranio', '9335283053', 'Sistem Komputer', '2012', 'perempuan', ''),
(20, 'Llewellyn Raraty', '9336918788', 'Teknik Informatika', '2008', 'perempuan', ''),
(21, 'Elfie Eliassen', '4752334356', 'Teknik Informatika', '2017', 'perempuan', ''),
(22, 'Ruthi Deluze', '7104803653', 'Sistem Komputer', '2020', 'laki-laki', ''),
(23, 'Torre Pogosian', '1955668302', 'Teknik Informatika', '2015', 'perempuan', ''),
(24, 'Tristan Peaseman', '0905847520', 'Teknik Informatika', '2019', 'laki-laki', ''),
(25, 'Tandy Scorah', '8093877819', 'Teknik Informatika', '2007', 'laki-laki', ''),
(26, 'Freda Blazek', '1252643608', 'Sistem Komputer', '2008', 'perempuan', ''),
(27, 'Jonathon Fitchell', '2695988338', 'Teknik Informatika', '2007', 'laki-laki', ''),
(28, 'Bernetta Burlingham', '4965795210', 'Teknik Informatika', '2014', 'perempuan', ''),
(29, 'Garold Chartres', '5400003427', 'Teknik Informatika', '2010', 'laki-laki', ''),
(30, 'Ritchie Critch', '6000040377', 'Sistem Komputer', '2005', 'perempuan', ''),
(31, 'Skipper Knoton', '5241626506', 'Teknik Informatika', '2010', 'perempuan', ''),
(32, 'Taylor Treasaden', '9399667812', 'Sistem Komputer', '2019', 'laki-laki', ''),
(33, 'Artemis O\' Kelleher', '5741960235', 'Sistem Komputer', '2015', 'laki-laki', ''),
(34, 'Lyn Giacobini', '5405723142', 'Sistem Komputer', '2005', 'laki-laki', ''),
(35, 'Sydelle Haddacks', '5801934022', 'Teknik Informatika', '2014', 'laki-laki', ''),
(36, 'Delinda Gibbon', '6497170103', 'Teknik Informatika', '2015', 'laki-laki', ''),
(37, 'Matty Siebart', '2473862680', 'Sistem Komputer', '2019', 'laki-laki', ''),
(38, 'Carter Bakhrushin', '8214842247', 'Sistem Komputer', '2008', 'perempuan', ''),
(39, 'Sawyer Deere', '4445609757', 'Teknik Informatika', '2007', 'laki-laki', ''),
(40, 'Farlie Spitaro', '1657927911', 'Sistem Komputer', '2010', 'laki-laki', ''),
(41, 'Eka Mitaka', '1020120219', 'Teknik Informatika', '2014', 'perempuan', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `semester` int(3) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nim`, `semester`, `jenis_kelamin`, `foto`) VALUES
(1, 'Lira Tole', '4261421267', 7, 'perempuan', 'mahasiswa (1).jpg'),
(2, 'Arlana Hassekl', '1515127036', 7, 'laki-laki', 'mahasiswa (2).jpg'),
(3, 'Annalise Agass', '0204570549', 6, 'perempuan', 'mahasiswa (3).jpg'),
(4, 'Derry Borris', '8891568376', 1, 'perempuan', 'mahasiswa (4).jpg'),
(5, 'Isidor Verbruggen', '9419263320', 8, 'perempuan', 'mahasiswa (5).jpg'),
(6, 'Arnuad Gilfether', '3127525257', 5, 'perempuan', 'mahasiswa (6).jpg'),
(7, 'Curt Grinston', '8897275508', 3, 'laki-laki', 'mahasiswa (7).jpg'),
(8, 'Norene Ousby', '8289812752', 7, 'perempuan', 'mahasiswa (8).jpg'),
(9, 'Lucie Temprell', '9546051489', 3, 'perempuan', 'mahasiswa (9).jpg'),
(11, 'Pattie Battisson', '1371081433', 3, 'perempuan', 'mahasiswa (10).jpg'),
(12, 'Findlay Dewan', '2850112593', 7, 'perempuan', 'mahasiswa (11).jpg'),
(13, 'Harmonie Alchin', '2620429528', 3, 'laki-laki', 'mahasiswa (12).jpg'),
(14, 'Hunter Fanshawe', '0032772459', 5, 'laki-laki', 'mahasiswa (13).jpg'),
(15, 'Alvina Fielden', '7486396424', 8, 'perempuan', ''),
(16, 'Isacco Athey', '0698381017', 3, 'perempuan', ''),
(17, 'Jaymee Juckes', '2096002001', 4, 'laki-laki', ''),
(18, 'Hildagard Cunningham', '2247940676', 2, 'perempuan', ''),
(19, 'Burnaby Nore', '3267675979', 4, 'laki-laki', ''),
(21, 'Asa Mitaka', '20103290', 6, 'perempuan', ''),
(22, 'Asa Metafora', '20103290', 7, 'laki-laki', ''),
(24, 'Asa Mitaka', '20103290', 4, 'perempuan', ''),
(25, 'Eka Mitaka', '20103130', 0, 'perempuan', ''),
(26, 'Dwi Mitaka', '20103131', 0, 'perempuan', ''),
(27, 'Tri Matako', '890766780', 8, 'laki-laki', 'mahasiswa (12).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mk_sk`
--

CREATE TABLE `tb_mk_sk` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mk_sk`
--

INSERT INTO `tb_mk_sk` (`id`, `kode`, `nama`, `sks`, `jenis`, `semester`) VALUES
(1, 'MK006', 'Machine Learning', 3, 'pilihan', 5),
(2, 'MK008', 'Artificial Intelligence', 2, 'wajib', 3),
(3, 'MK003', 'Cloud Computing', 3, 'pilihan', 4),
(4, 'MK023', 'Big Data Analytics', 3, 'wajib', 6),
(5, 'MK023', 'Big Data Analytics', 2, 'wajib', 2),
(6, 'MK007', 'Software Engineering', 3, 'pilihan', 8),
(7, 'MK012', 'Mobile App Development', 2, 'pilihan', 8),
(8, 'MK016', 'Programming Languages', 3, 'wajib', 7),
(9, 'MK008', 'IoT Systems', 2, 'pilihan', 5),
(10, 'MK019', 'Software Engineering', 3, 'wajib', 3),
(11, 'MK016', 'Network Security', 2, 'pilihan', 8),
(12, 'MK024', 'Information Security', 2, 'wajib', 6),
(13, 'MK021', 'Computer Vision', 3, 'wajib', 4),
(14, 'MK021', 'Virtual Reality', 2, 'pilihan', 2),
(15, 'MK011', 'Machine Learning', 2, 'pilihan', 6),
(16, 'MK023', 'Computer Vision', 3, 'wajib', 6),
(17, 'MK014', 'Cybersecurity', 2, 'pilihan', 7),
(18, 'MK011', 'Cloud Computing', 2, 'pilihan', 3),
(19, 'MK007', 'Machine Learning', 2, 'pilihan', 5),
(20, 'MK001', 'Digital Forensics', 2, 'wajib', 5),
(21, 'MK018', 'Software Engineering', 3, 'pilihan', 2),
(22, 'MK021', 'Cybersecurity', 3, 'wajib', 3),
(23, 'MK002', 'Human-Computer Interaction', 2, 'pilihan', 7),
(24, 'MK011', 'Digital Forensics', 3, 'pilihan', 4),
(25, 'MK025', 'Data Structures', 3, 'wajib', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mk_ti`
--

CREATE TABLE `tb_mk_ti` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mk_ti`
--

INSERT INTO `tb_mk_ti` (`id`, `kode`, `nama`, `sks`, `jenis`, `semester`) VALUES
(1, 'MK023', 'Desain Antarmuka Pengguna', 3, 'pilihan', 3),
(2, 'MK006', 'Keamanan Informasi', 3, 'pilihan', 8),
(3, 'MK002', 'Sistem Pendukung Keputusan', 2, 'pilihan', 3),
(4, 'MK002', 'Pemrograman Mobile', 3, 'wajib', 4),
(5, 'MK007', 'Pemrograman Logika', 3, 'wajib', 1),
(6, 'MK009', 'Sistem Informasi Geografis', 2, 'pilihan', 6),
(7, 'MK025', 'Pemrograman Logika', 2, 'wajib', 7),
(8, 'MK017', 'Robotika', 3, 'pilihan', 4),
(9, 'MK020', 'Manajemen Proyek', 2, 'pilihan', 4),
(10, 'MK018', 'Internet of Things', 3, 'wajib', 3),
(11, 'MK012', 'Pemrograman Fungsional', 3, 'pilihan', 2),
(12, 'MK010', 'Pemrograman Game', 2, 'wajib', 5),
(13, 'MK006', 'Pemrograman Mobile', 3, 'wajib', 6),
(14, 'MK015', 'Big Data', 2, 'wajib', 8),
(15, 'MK005', 'Kecerdasan Buatan', 2, 'wajib', 7),
(16, 'MK021', 'Rekayasa Perangkat Lunak', 3, 'wajib', 1),
(17, 'MK017', 'Kecerdasan Buatan', 2, 'pilihan', 4),
(18, 'MK008', 'Sistem Informasi', 3, 'wajib', 7),
(19, 'MK021', 'Grafika Komputer', 3, 'pilihan', 3),
(20, 'MK017', 'Pemrograman Game', 3, 'pilihan', 7),
(21, 'MK021', 'Big Data', 3, 'wajib', 3),
(22, 'MK005', 'Grafika Komputer', 2, 'pilihan', 8),
(23, 'MK012', 'Sistem Basis Data', 3, 'pilihan', 2),
(24, 'MK010', 'Pemrograman Dasar', 2, 'pilihan', 8),
(25, 'MK025', 'Pemrograman Mobile', 2, 'wajib', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id` int(3) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_bayar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id`, `nim`, `nama`, `pembayaran`, `keterangan`, `tgl_bayar`) VALUES
(1, '8891568376', 'Derry Borris', 6598884, 'Regristrasi Awal', '2023-10-10'),
(2, '1515127036', 'Arlana Hassekl', 2610352, 'Pembayaran KRS SP', '2024-07-11'),
(3, '0204570549', 'Annalise Agass', 6892137, 'Pembayaran KRS SP', '2023-12-10'),
(4, '4261421267', 'Lira Tole', 6271524, 'Pembayaran KRS SP', '2023-11-11'),
(5, '1515127036', 'Arlana Hassekl', 6509650, 'Pembayaran KRS SP', '2024-09-30'),
(6, '1566849209', 'Ricky Gianninotti', 7179458, 'Pembayaran KRS SP', '2024-04-28'),
(7, '8891568376', 'Derry Borris', 4686603, 'Regristrasi Awal', '2024-06-18'),
(8, '1566849209', 'Ricky Gianninotti', 4241418, 'Pembayaran KRS SP', '2023-11-08'),
(9, '1515127036', 'Arlana Hassekl', 4835373, 'Pembayaran KRS', '2024-01-09'),
(10, '1566849209', 'Ricky Gianninotti', 3270115, 'Pembayaran KRS', '2023-10-31'),
(11, '1515127036', 'Arlana Hassekl', 7669398, 'Pembayaran KRS', '2024-06-19'),
(12, '0204570549', 'Annalise Agass', 7395884, 'Pembayaran KRS SP', '2024-05-15'),
(13, '9546051489', 'Lucie Temprell', 5031461, 'Regristrasi Awal', '2023-11-03'),
(14, '0204570549', 'Annalise Agass', 7348237, 'Regristrasi Awal', '2023-10-24'),
(15, '8891568376', 'Derry Borris', 5429010, 'Pembayaran KRS', '2024-01-16'),
(16, '1515127036', 'Arlana Hassekl', 3336030, 'Pembayaran KRS SP', '2024-03-17'),
(17, '4261421267', 'Lira Tole', 7576223, 'Pembayaran KRS SP', '2024-06-01'),
(18, '1566849209', 'Ricky Gianninotti', 6307427, 'Regristrasi Awal', '2024-09-24'),
(19, '4261421267', 'Lira Tole', 5307862, 'Regristrasi Awal', '2024-09-28'),
(20, '1566849209', 'Ricky Gianninotti', 7375026, 'Regristrasi Awal', '2024-05-17'),
(21, '4261421267', 'Lira Tole', 11100000, 'Pembayaran KRS', '2024-10-25'),
(22, '890766780', 'Tri Matako', 7270500, 'Regristrasi Awal', '2024-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('superadmin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'ayu', 'admin', '12345', 'superadmin'),
(2, 'hime', 'op1', '12345', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mk_sk`
--
ALTER TABLE `tb_mk_sk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mk_ti`
--
ALTER TABLE `tb_mk_ti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_mk_sk`
--
ALTER TABLE `tb_mk_sk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_mk_ti`
--
ALTER TABLE `tb_mk_ti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
