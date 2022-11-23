-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Nov 2022 pada 13.24
-- Versi server: 5.7.33
-- Versi PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id` char(36) NOT NULL,
  `file` varchar(255) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `tanggal_akreditasi` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` char(36) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `detail_fasilitas` text NOT NULL,
  `jenis_fasilitas` enum('Ruang Kelas','Workshop','Laboratorium Mekanik','Pnuematik dan Hidrolik','Mekanika Fluida') DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery_fasilitas`
--

CREATE TABLE `galery_fasilitas` (
  `id` char(36) NOT NULL,
  `id_fasilitas` char(36) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `injection`
--

CREATE TABLE `injection` (
  `id` char(36) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` char(36) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `kurikulum` int(6) DEFAULT NULL,
  `sks` int(1) DEFAULT NULL,
  `jenis_mk` int(1) DEFAULT NULL,
  `jam_teori` int(2) DEFAULT NULL,
  `jam_praktikum` int(2) DEFAULT NULL,
  `tiu` text,
  `bahasan` text,
  `referensi` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` char(36) NOT NULL,
  `nim` bigint(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun_masuk` int(4) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `ipk` varchar(10) NOT NULL,
  `nik` bigint(16) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Khatolik','Hindhu','Budha','Kong Hu Chu') DEFAULT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pedoman`
--

CREATE TABLE `pedoman` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_pedoman` enum('Pedoman Lab','Pedoman Bengkel','Pedoman Tugas Akhir') NOT NULL,
  `file_word` varchar(255) NOT NULL,
  `file_pdf` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pedoman`
--

INSERT INTO `pedoman` (`id`, `nama`, `jenis_pedoman`, `file_word`, `file_pdf`, `created_at`, `updated_at`) VALUES
('9753a2f1-32db-4322-a2a6-381d0bbe1eca', 'Tes Pedomann', 'Pedoman Lab', 'app/pedoman/1663854717-A4y9B.doc', 'app/pedoman/1663854717-FQGbK.pdf', '2022-09-22 14:00:05', '2022-09-22 07:00:05'),
('9753a351-40c4-4dd7-ba00-65109950a3cf', 'Tes Pedoman 1', 'Pedoman Bengkel', 'app/pedoman/1663854780-h903k.doc', 'app/pedoman/1663854780-P81ba.pdf', '2022-09-22 06:53:00', '2022-09-22 06:53:00'),
('9753a376-d87e-48b9-9b66-cb6e70db01e7', 'Tes Pedoman 2', 'Pedoman Tugas Akhir', 'app/pedoman/1663854805-zqbG4.doc', 'app/pedoman/1663854805-r9CKB.pdf', '2022-09-22 06:53:25', '2022-09-22 06:53:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` char(36) NOT NULL,
  `id_unit_kerja` char(36) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `nup` varchar(25) DEFAULT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` enum('Ketua Jurusan','Sekretaris Jurusan','Koordinator Program Studi','Kepala Laboratorium','Admin','Teknisi Laboratorium','Dosen Biasa') DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `gelar_belakang` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Khatolik','Budha','Hindu','Kong Hu Chu') DEFAULT NULL,
  `jabatan_fungsional` varchar(255) DEFAULT NULL,
  `biodata` text,
  `bidang_ilmu` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `id_unit_kerja`, `nip`, `nup`, `nik`, `nama`, `jabatan`, `tanggal_lahir`, `tempat_lahir`, `gelar_belakang`, `jenis_kelamin`, `agama`, `jabatan_fungsional`, `biodata`, `bidang_ilmu`, `foto`, `created_at`, `updated_at`) VALUES
('973f72df-f2e4-460a-9b8e-9ff55f516c12', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '197407222021211005', '-', '161180108053', 'Muh Anhar', 'Ketua Jurusan', '1974-07-22', 'BOYOLALI', 'S.T.,M.T', 'Laki-Laki', 'Islam', 'Lektor', '-', 'Teknik Mesin', 'app/pegawai/1669208996-xNbpD.jpg', '2022-11-23 13:10:24', '2022-11-23 06:10:24'),
('9753d47d-d49b-495a-b2d1-50f0ded4686b', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '19841207 201903 1 005', '-', '-', 'Munawar Kholil', 'Sekretaris Jurusan', '1984-12-07', 'Pamekasan', 'S.Si.,M.Pd', 'Laki-Laki', 'Islam', 'Asisten Ahli', '-', '-', 'app/pegawai/1663863030-NNSs4.jpg', '2022-11-23 13:10:43', '2022-11-23 06:10:43'),
('9753d560-d71d-4bc3-b97a-7de0122e7917', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '19860125 201803 1 001', '-', '16118 0108 068', 'Yusuf', 'Koordinator Program Studi', '1986-10-25', 'Ketapang', 'S.ST., M.T', 'Laki-Laki', 'Islam', 'Asisten Ahli', '-', 'Teknik Mesin', 'app/pegawai/1663863179-nqTWL.jpg', '2022-11-23 13:10:50', '2022-11-23 06:10:50'),
('9753d7ae-a752-4493-a0b1-37534d015085', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '-', '-', '16118 0108 055', 'Asep Ruchiyat', 'Kepala Laboratorium', '1978-05-10', 'Bengkayang', 'S.T., M.T', 'Laki-Laki', 'Islam', 'Lektor', '-', 'Teknik Mesin', 'app/pegawai/1663863566-5v7F5.jpg', '2022-11-23 13:10:56', '2022-11-23 06:10:56'),
('9755c689-d65e-4813-8420-cad7a1fab73c', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '19840105 202121 1 003', '-', '16118 0108 061', 'Epriyandi', 'Dosen Biasa', '1984-01-05', 'Ketapang', 'S.T.,M.T', 'Laki-Laki', 'Islam', 'Lektor', NULL, 'Teknik dan Manajemen Industri', 'app/pegawai/1663946589-kuMTV.jpg', '2022-09-23 15:31:07', '2022-09-23 15:31:07'),
('9755c7a7-59c3-47a2-9d62-207dfb4507e8', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '19770505 202121 1 007', '-', '16118 0108 057', 'Ismael Marjuki', 'Dosen Biasa', '1977-05-05', 'Ampalu Tinggi', 'S.T.,M.T', 'Laki-Laki', 'Islam', 'Lektor', NULL, 'Konversi Energi', 'app/pegawai/1663946776-6jYWc.jpg', '2022-09-23 15:31:09', '2022-09-23 15:31:09'),
('9755c83d-5564-4ba4-a700-5895a782369a', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '19780511 202121 1 003', '-', '16118 0108 056', 'Helanianto', 'Dosen Biasa', '1978-05-11', 'Randau', 'S.T.,M.T', 'Laki-Laki', 'Khatolik', 'Lektor', NULL, 'Teknik Mesin', 'app/pegawai/1663946874-FR2Fz.jpg', '2022-09-23 15:31:11', '2022-09-23 15:31:11'),
('9755c955-fdbf-4904-9d59-2f7cbdb97233', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '19920106 201903 2 015', '-', '-', 'Betti Ses Eka Polonia', 'Dosen Biasa', '1992-01-06', 'Lamongan', 'S.Pd.,M.Pd', 'Perempuan', 'Islam', 'Asisten Ahli', 'Betti Ses Eka Polonia lahir di Modo, Lamongan, Jawa Timur pada 6 Januari 1992. Pendidikan dasar ditempuh di SDN Mojorejo III, kemudian berlanjut ke SMPN 1 Modo, dan SMAN 2 Lamongan. Menyelesaikan pendidikan strata 1 tahun 2014 di Universitas Negeri Malang dan meneruskan studi S2 Universitas Negeri Malang lulus tahun 2016. \r\nMemulai karir sebagai dosen tahun 2017 di UIN Antasari Banjarmasin sebagai Dosen Tetap Bukan PNS pada Fakultas Tarbiyah dan Keguruan. Mengajar matakuliah fisika, matematika, pembelajaran IPA, pembelajaran fisika, pembelajaran matematika, Pancasila, Kewarganegaraan, dan lain-lain. Sejak Maret 2018 menjadi Asisten Ahli DMK Media Pembelajaran Fisika. Selain kegiatan utama sebagai dosen, ia juga menjadi staf kepegawaian bidang pengembangan pegawai UIN Antasari Banjarmasin.\r\nTahun 2019 menjadi titik balik, dengan mencoba berkarir menjadi dosen di Politeknik Negeri Ketapang, Kalimantan Barat. Menjadi dosen perempuan pada Jurusan Perawatan dan Perbaikan Mesin dan dipercaya mengampu mata kuliah Fisika, Kimia, Kinematika & Dinamika, Bahasa Inggris Teknik, Statistik, Ilmu Alamiah Dasar, Ilmu Sosial Budaya Dasar, Matematika, dan beberapa matakuliah lainnya.', 'Fisika, Pendidikan, Teknik', 'app/pegawai/1663947058-r0oZb.png', '2022-09-23 08:30:58', '2022-09-23 08:30:58'),
('9755cab5-c6ed-4cd4-a03f-e20fa58b76af', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '-', '-', '16118 0108 058', 'Hairian Rahmadi', 'Dosen Biasa', '1979-09-10', 'Sungai Jaga B', 'S.T.,M.T', 'Laki-Laki', 'Islam', 'Lektor', NULL, 'Konversi Energi', NULL, '2022-09-23 08:34:49', '2022-09-23 08:34:49'),
('9755cee9-84c0-494b-8ec6-9d1bd909c446', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '-', '19820601201602198', '16118 0216 198', 'Lusia Romana', 'Admin', '1982-06-01', 'Pantan', 'S.IP', 'Perempuan', 'Islam', '-', NULL, '-', 'app/pegawai/1663947994-3VWnF.jpg', '2022-10-01 02:56:35', '2022-09-30 19:56:35'),
('9755d010-6484-4e22-9917-a2ad5ca174b8', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '19890424 202121 1 002', '-', '16118 1211 105', 'Halimansyah', 'Teknisi Laboratorium', '1989-04-24', 'Kendawangan', 'A.Md', 'Laki-Laki', 'Islam', '-', NULL, '-', 'app/pegawai/1663948187-lZR25.jpg', '2022-09-23 08:49:47', '2022-09-23 08:49:47'),
('9755d0c0-b7a6-446c-985c-deb8a517f592', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '19890705 202121 1 002', '-', '16118 1211 104', 'M. Iwan Toro', 'Teknisi Laboratorium', '1989-07-05', 'Pebihingan', 'A.Md', 'Laki-Laki', 'Islam', '-', NULL, '-', 'app/pegawai/1663948303-cmt6A.jpg', '2022-09-23 08:51:43', '2022-09-23 08:51:43'),
('9755d125-5361-481a-b1f2-e35846ca14ff', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '-', '-', '16118 0712 118', 'Mustapa', 'Teknisi Laboratorium', '1986-06-10', 'Ketapang', 'A.Md', 'Laki-Laki', 'Islam', '-', NULL, '-', 'app/pegawai/1663948368-Vmzme.jpg', '2022-09-23 08:52:48', '2022-09-23 08:52:48'),
('9755d18b-fb66-430c-9dd8-127567d5fe07', '973990e4-2693-4560-8ee7-7f6fb71c0c39', '-', '-', '16118 0215 153', 'Arman', 'Teknisi Laboratorium', '1986-04-10', 'Ketapang', 'A.Md', 'Laki-Laki', 'Islam', '-', NULL, '-', 'app/pegawai/1663948436-uzmGF.jpg', '2022-09-23 08:53:56', '2022-09-23 08:53:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian`
--

CREATE TABLE `pengabdian` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ketua_peneliti` varchar(255) NOT NULL,
  `anggota_dosen` varchar(255) NOT NULL,
  `anggota_mahasiswa` varchar(255) NOT NULL,
  `skema` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian_mahasiswa`
--

CREATE TABLE `pengabdian_mahasiswa` (
  `id` char(36) NOT NULL,
  `pembimbing` varchar(255) NOT NULL,
  `ketua_peneliti` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `skema` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id`, `title`, `foto`, `created_at`, `updated_at`) VALUES
('973f8dfa-52f4-403e-9789-4e9f2aca7bc7', 'Coba', 'app/slide/1662992206-jje4W.jpg', '2022-09-13 14:48:23', '2022-09-13 07:48:23'),
('9755af56-c5a2-4108-ba9f-8402ed3c9d7b', 'Penutupan OP2LK POLITAP', 'app/slide/1663942697-EHGI3.jpg', '2022-09-23 07:18:17', '2022-09-23 07:18:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta`
--

CREATE TABLE `ta` (
  `id` char(36) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `judul` text NOT NULL,
  `file_ta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` char(36) NOT NULL,
  `kode_unit_kerja` varchar(20) NOT NULL,
  `nama_unit_kerja` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `kode_unit_kerja`, `nama_unit_kerja`, `created_at`, `updated_at`) VALUES
('973990e4-2693-4560-8ee7-7f6fb71c0c39', '301', 'DIII Pemeliharaan Mesin', '2022-09-22 16:02:23', '2022-09-22 09:02:23'),
('97399128-d5c8-4bff-92e2-ed270d504a45', '302', 'Teknik Pertambangan', '2022-09-09 17:15:15', '2022-09-09 10:15:15'),
('9753d1b4-08c8-4e53-9c00-5fb14601340e', '302', 'DIII Teknologi Pertambangan', '2022-09-22 09:02:43', '2022-09-22 09:02:43'),
('9753d1c7-16c4-4403-be92-f2846c3e9c2d', '303', 'DIII Teknologi Hasil Perkebunan', '2022-09-22 09:02:55', '2022-09-22 09:02:55'),
('9753d20b-1b73-4185-bfae-1c9606703a6e', '305', 'DIII Agro Industri', '2022-09-22 09:03:40', '2022-09-22 09:03:40'),
('9753d249-1e86-4262-a301-5f63b6d81de3', '306', 'DIV Teknologi Rekayasa Konstruksi Jalan dan Jembatan', '2022-09-22 09:04:20', '2022-09-22 09:04:20'),
('9753d25d-a820-4960-9720-e61e1142bc08', '307', 'DIV Teknologi Produksi Tanaman Perkebunan', '2022-09-22 09:04:34', '2022-09-22 09:04:34'),
('9753d26f-a3f3-49cd-b914-795f22f66104', '308', 'DIII Teknologi Listrik', '2022-09-22 09:04:46', '2022-09-22 09:04:46'),
('9753d292-a847-4721-9346-320deeb78e23', '304', 'DIII Teknologi Informasi', '2022-09-22 09:05:09', '2022-09-22 09:05:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confir_password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_pegawai`, `username`, `password`, `confir_password`, `email`, `foto`, `created_at`, `updated_at`) VALUES
('974371a0-ac73-422a-8ada-3d6364c0341d', '973f72df-f2e4-460a-9b8e-9ff55f516c12', 'ppm2022', '$2y$10$TRJa9R6dnjvgFXgsUMQI5OIY2wzsPtVoqXN9Eo2vfY5OTtYMhT13a', 'ppm2022', 'ppm@politap.ac.id', NULL, '2022-09-14 12:59:48', '2022-09-14 05:59:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE `visimisi` (
  `id` char(36) NOT NULL,
  `label` varchar(255) NOT NULL,
  `isi` text,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`id`, `label`, `isi`, `created_at`, `updated_at`) VALUES
('974196ae-03ab-48d0-a413-1f8a6154dc11', 'Visi', '“Menjadi pusat pendidikan dan penelitian terapan dalam bidang teknik mesin, khususnya perawatan dan perbaikan mesin, untuk menghasilkan lulusan yang memiliki keterampilan, akhlak dan tanggung jawab yang selaras dengan Visi Politeknik Negeri Ketapang”', '2022-11-23 12:56:57', '2022-11-23 05:56:57'),
('9755d79a-b1b5-4ebc-8b33-aa2ac5feca29', 'Misi', '“menyelenggarakan pendidikan vokasional dan penelitian terapan di bidang teknik mesin, khususnya perawatan dan perbaikan mesin, untuk menunjang pembangunan daerah guna meningkatkan kesejahteraan masyarakat; membina dan mengembangkan profesionalisme yang sehat dan dinamis; mengembangkan dan mendayagunakan ilmu pengetahuan dan teknologi untuk meningkatkan kesejahteraan masyarakat yang selaras dengan Misi Politeknik Negeri Ketapang”', '2022-09-23 09:10:52', '2022-09-23 09:10:52'),
('9755d869-b2f8-4775-85a4-730635629417', 'Tujuan', 'a. Menghasilkan lulusan Ahli Madya (A.Md.) yang berkualitas dan kompeten untuk memenuhi kebutuhan tenaga kerja profesional dalam bidang perawatan dan perbaikan mesin;\r\nb. Menghasilkan produk baik berupa barang maupun jasa sebagai hasil karya penelitian terapan yang bermanfaat untuk meningkatkan kesejahteraan masyarakat;\r\nc. Menjadi pusat pendidikan dan latihan dalam bidang perawatan dan perbaikan mesin untuk memfasilitasi dilaksanakannya program penelitian bagi tenaga kerja industri.', '2022-09-23 09:13:08', '2022-09-23 09:13:08'),
('9755d899-c1de-4b5a-8ae5-552f2d4616b6', 'Kompetensi Lulusan', 'Kompetensi Utama\r\nMemiliki kompetensi profesi di bidang perawatan dan perbaikan mesin yang meliputi dasar operasi, perawatan dan inspeksi serta dapat merancang sistem perawatan dan perbaikan mesin.\r\n\r\nKompetensi Penunjang\r\nMenguasai teknologi terapan dalam bidang perawatan dan perbaikan mesin yang mengacu pada kemutakhiran dan memiliki keunggulan bersaing.\r\n\r\nKompetensi yang diharapkan Industri\r\na. Menguasai dasar perawatan mesin;\r\nb. Menguasai dan dapat melakukan perawatan mesin;\r\nc. Menguasai dan dapat menganalisis kerusakan mesin;\r\nd. Menguasai dan dapat merancang sistem perawatan dan perbaikan mesin;\r\ne. Memiliki ketahanan mental dan etos kerja yang tinggi;\r\nf. Memiliki jiwa wirausaha dan kemampuan manajerial pada tingkat menengah.', '2022-09-23 09:13:39', '2022-09-23 09:13:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galery_fasilitas`
--
ALTER TABLE `galery_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `injection`
--
ALTER TABLE `injection`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pedoman`
--
ALTER TABLE `pedoman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian_mahasiswa`
--
ALTER TABLE `pengabdian_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
