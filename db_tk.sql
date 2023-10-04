-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2023 pada 17.22
-- Versi server: 10.4.21-MariaDB-log
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `role`) VALUES
(2, 'admin@siatkkb.com', '$2a$10$3bHOM.ML4AGmNuHl8xbbXuxFfTu21SphjjnoAyBMwftwo8v3RPpVu', 'admin'),
(4, 'reisha@gmail.com', '$2y$10$tCA3/MPtZl07Uj4Xo6I3uOtetqsEvjf4wsRO4twcEo3pFgomhC3xO', 'wali_murid'),
(5, 'a@gmail.com', '$2y$10$m7WWq9od.6J8ZJWVSCnrVunXK0aNA73awpNFGmAWzrpMILFMBuCm6', 'wali_murid'),
(6, 'pengurus@zdd.com', '$2y$10$0ajnpLxo.tk4JwtiFqMdcuxbm.4LCVQ87j2R3MlrzsrV9yR3Z9G2q', 'wali_murid'),
(7, 'pengurus@zdd.com', '$2y$10$8oXWxMah6UMhlpnuEot8yOYhYxWSg5Vbj5qODtuNV8wlNUKLuvGA2', 'wali_murid'),
(8, '12345', '$2y$10$m7WWq9od.6J8ZJWVSCnrVunXK0aNA73awpNFGmAWzrpMILFMBuCm6', 'guru'),
(9, 'Reiki', '$2y$10$VXbAP4guP25JXQDUJ1KkFOy0h2HqrplJfD5kiwf5XldQOfHKLBn1G', 'wali_murid'),
(10, 'budi', '$2y$10$q9dDuQf8MznvMYfObR049ucSGd2IaRwfbhZLnSlJx4H0QfZ.nV2P6', 'wali_murid'),
(11, 'muhammad', '$2y$10$tlMQlGAM4RE.h.yn93wcYeToqs8zeA1Ev3o5uwrkpcybVaApQ7c.C', 'wali_murid'),
(12, 'test', '$2y$10$DAW3nz17DdRcmBh7KgTnzeejoJxYuZ6V9RPqjVriZfW.gGR8JZRve', 'wali_murid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nip`, `jabatan`, `kelas`) VALUES
(1, 'Adiwijaya Satria Nusantara', '12345', 'Wali Kelas', 'A'),
(2, 'Budi', '123', 'Wali Kelas', 'B'),
(4, 'Budi', '12345', 'Wali Kelas', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `hari` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
(1, 'Berhitung'),
(2, 'Membaca'),
(4, 'Menggambar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `id_mapel`, `id_siswa`, `nilai`) VALUES
(2, 1, 5, '1'),
(3, 2, 6, '2'),
(4, 1, 6, '3'),
(5, 2, 5, '1'),
(6, 1, 5, '1'),
(7, 1, 5, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `username`, `nama`, `tanggal_lahir`, `jk`, `nama_ayah`, `nama_ibu`, `agama`, `alamat`, `status`) VALUES
(1, '', 'Tes', '2016-01-04', 'Laki-Laki', '', '', '', '', ''),
(2, '', 'Tes2', '2018-06-05', 'Laki-Laki', 'andi', 'i', 'Konghucu', 'tanggamus', ''),
(3, '', 'adi', '2018-06-05', 'Laki-Laki', 'ayah', 'ibu', 'Islam', 'gisting', ''),
(4, '', 'Budi', '2018-06-05', 'Laki-Laki', 'ayah', 'ibu', 'Islam', 'g', ''),
(5, '', 'Tes2', '2018-06-05', 'Laki-Laki', 'a', 'i', 'Konghucu', 'tanggamus', ''),
(6, '', 'Tes', '2018-06-05', 'Laki-Laki', 'ayah', 'ibu', 'Islam', 'Lampung', ''),
(7, '', 'Reiki Savian', '2018-06-11', 'Laki-Laki', 'ayah', 'ibu', 'Islam', 'Bandar Lampung', ''),
(8, 'budi', 'Budi Satrio', '2018-06-10', 'Laki-Laki', 'ayah baru', 'ibu', 'Islam', 'Bandar Lampung', ''),
(9, 'muhammad', 'Muhammad Bayu', '2018-06-11', 'Laki-Laki', 'ayah', 'ibu', 'Islam', 'Bandar Lampung', 'Menunggu Pengumuman Kelas'),
(10, 'test', 'test', '0001-01-01', 'Laki-Laki', 'test', 'test', 'Islam', 'test', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `wali` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `username`, `nama`, `status`, `kelas`, `wali`, `no_hp`) VALUES
(5, '', 'Budi', 'Aktif', 'A', 'Agus', '1234567890'),
(6, '', 'Budi Satrio', 'Aktif', 'A', 'Agus', '2313131231312');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`,`id_guru`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `id_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
