-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 06:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freddy_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_presiden`
--

CREATE TABLE `calon_presiden` (
  `id` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `partai_pendukung` varchar(255) NOT NULL,
  `riwayat_pekerjaan` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prodi` int(11) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `email`, `prodi`, `asal_sekolah`, `no_hp`, `alamat`) VALUES
(1, 'Ardiyanto', 1657301049, 'Laki-laki', 'ardiyanto@alumni.pcr.ac.id', 2, 'Man 1 Rokan Hilir', 68537603, 'Umban Sari'),
(3, 'Uun Patrio', 1757301037, 'Laki-laki', 'uunsi@alumni.pcr.ac.id', 1, 'SMKN 1 Sumbar', 2245345, 'Umban Sari'),
(4, 'Davida', 2147483647, 'Laki-laki', 'david22ti@mahasiswa.pcr.ac.id', 1, 'Jambi', 478923749, 'Jalan Riau');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `akreditasi` varchar(15) NOT NULL,
  `nama_kaprodi` varchar(255) NOT NULL,
  `tahun_berdiri` int(10) NOT NULL,
  `output_lulusan` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`, `ruangan`, `jurusan`, `akreditasi`, `nama_kaprodi`, `tahun_berdiri`, `output_lulusan`, `gambar`) VALUES
(1, 'Teknik Informatika', '328', 'JTI', 'A', 'Kartina Diah Kesuma Wardhani, S.ST., M.T.', 2008, 'Multimedia', 'Cuplikan_layar_2023-03-30_105053.png'),
(2, 'Sistem Informasi', '310', 'JTI', 'A', 'Indah Lestari, S.ST., M.T.', 2008, 'Business', 'Cuplikan_layar_2023-03-30_1050531.png'),
(3, 'Teknik Rekayasa Komputer', '128', 'JTI', 'A', 'Uun', 2008, 'Security Analyst', '19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(1, '1', 'yey@mhs.id', '$2y$10$yfUyVzsLILzFYs.x/FuXIO0sZMM8HJMY18nfFD.A1xvyan7HPAHzi', 'default.jpg', 'Admin', 1696908243),
(2, '2', 'waw@mhs.id', '$2y$10$dSZ9BotCUbA2H.W1.WdP5uGIj921MoE49s0smet71fpFsktM61CyO', 'default.jpg', 'User', 1696908289),
(3, 'davin', 'davin@mhs.id', '$2y$10$rjgjG4z4eC.6AAn3Zz1f0..0vPXDmUlrCjuv8HkRoqQknrJ6ZPuCa', 'default.jpg', 'User', 1696910000),
(4, 'hsdjkalfghk', 'a@gmail.com', '$2y$10$zNhkI9aZft2z0bZCaCcPl.h6pOLHwJxRno4nHHbVx.mddYI/aLHO6', 'default.jpg', 'User', 1696915165);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_presiden`
--
ALTER TABLE `calon_presiden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi` (`prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_presiden`
--
ALTER TABLE `calon_presiden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `prodi` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
