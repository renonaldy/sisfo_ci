-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Bulan Mei 2022 pada 09.56
-- Versi server: 10.3.29-MariaDB-log
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(200) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `nama_dosen` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `program_studi` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `pangkat` varchar(200) NOT NULL,
  `no_sertifikasi` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nik`, `nama_dosen`, `jenis_kelamin`, `program_studi`, `jabatan`, `pangkat`, `no_sertifikasi`, `photo`) VALUES
(10, '1016038802', '202106725', 'Ade Fitri Rahmadani, S.Pd., M.Pd.T', 'Perempuan', 'Pendidikan Teknik Informatika dan Komputer', 'Asisten Ahli', 'Penata Muda Gol. III/a', '18110100100100', 'DSCN0181.JPG'),
(11, '1006067703', '201204662', 'Ashabul Khairi, S.T., M.Kom', 'Laki-laki', 'Pendidikan Teknik Informatika dan Komputer', 'Lektor (200 kum)', 'Penata Gol. III/c', '150010410012', 'DSCN0191.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(3, 'Aziz', 'aziz@aziz.com', 'Hallo reno');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `judul_website` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `judul_website`, `alamat`, `email`, `telp`) VALUES
(1, 'SISTEM INFORMASI AKADEMIK PRODI PTIK', 'Jl. Bagindo Aziz Chan By Pass Aie Pacah Padang, Sumatera Barat', 'ptik@gmail.com', '0216767677');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `isi_informasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `icon`, `judul_informasi`, `isi_informasi`) VALUES
(1, 'fas fa-university', 'Tentang Prodi', 'PTIK'),
(2, 'fas fa-calendar', 'Kalender Akademik', 'Informasi'),
(3, 'fas fa-user-graduate', 'Jadwal Wisuda', 'Jadwal pelaksanaan wisuda mahasiswa ptik'),
(5, 'fas fa-book', 'Judul Skripsi Mahasiswa PTIK', 'judul skripsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(30) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'IK', 'Ilmu Komputer'),
(8, 'EB', 'Ekonomi dan Bisinis'),
(9, 'KB', 'Komunikasi dan Bahasa'),
(10, 'PTIK', 'Pendidikan Teknik Informatika dan Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `id_thn_akad` int(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nilai` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id_krs`, `id_thn_akad`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(2, 2, '12171353', 'MKU04', 'A'),
(3, 2, '12171355', 'MKU04', 'C'),
(4, 1, '12171301', 'MKB1', 'A'),
(5, 1, '12171301', 'MKB2', 'A'),
(6, 1, '12171301', 'MKB3', 'A'),
(7, 1, '12171301', 'MKB4', 'A'),
(8, 1, '12171301', 'MKB6', 'A'),
(9, 1, '12171301', 'MKB3', ''),
(10, 1, '12171302', 'MKB1', 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id_kurikulum` int(14) NOT NULL,
  `kurikulum` varchar(200) NOT NULL,
  `status` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kurikulum`
--

INSERT INTO `kurikulum` (`id_kurikulum`, `kurikulum`, `status`) VALUES
(12, 'KBK-KKNI', 'Tidak Aktif'),
(25, 'Kurikulum Default', 'Tidak Aktif'),
(26, 'Kurikulum NoAktif', 'Tidak Aktif'),
(27, 'Revolusi Industri 4.0', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_kkn`
--

CREATE TABLE `laporan_kkn` (
  `id_laporan` int(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `dpl` varchar(200) NOT NULL,
  `bukti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `laporan_kkn`
--

INSERT INTO `laporan_kkn` (`id_laporan`, `nama`, `tahun`, `lokasi`, `dpl`, `bukti`) VALUES
(1, 'Renonaldy Pratama Diasno', '2020', 'Gunung Sarik', 'Buk Wirnita', 'cover_bukU.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_plp`
--

CREATE TABLE `laporan_plp` (
  `id_plp` int(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `pembimbing` varchar(200) NOT NULL,
  `bukti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `laporan_plp`
--

INSERT INTO `laporan_plp` (`id_plp`, `nama`, `tahun`, `lokasi`, `pembimbing`, `bukti`) VALUES
(1, 'Renonaldy', '2021', 'SMA Negeri 6 Padang', 'Buk Rini', 'cover_bukU.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_prakerin`
--

CREATE TABLE `laporan_prakerin` (
  `id_prakerin` int(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `pembimbing` varchar(200) NOT NULL,
  `bukti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `laporan_prakerin`
--

INSERT INTO `laporan_prakerin` (`id_prakerin`, `nama`, `tahun`, `lokasi`, `pembimbing`, `bukti`) VALUES
(1, 'Renonaldy', '2022', 'Diskominfo Kota Padang', 'Pak Gufron', 'cover_bukU.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tempat_lahir` varchar(120) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `angkatan` varchar(120) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `npm`, `nama_lengkap`, `alamat`, `email`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `angkatan`, `photo`) VALUES
(8, '18100132310', 'Renonaldy', 'Maransi', 'konyetnyet28@gmail.com', '0812', 'bengkl', '2022-03-16', 'Laki-laki', 'Sastra Inggris', 'DSCN0111.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` int(10) NOT NULL,
  `kurikulum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `semester`, `kurikulum`) VALUES
('0001911201', 'Agama', 2, 1, 'Revolusi Industri 4.'),
('0001911202', 'Pancasila', 2, 1, 'Revolusi Industri 4.'),
('0002111207', 'Pendidikan Karakter', 0, 1, 'Revolusi Industri 4.'),
('0031921210', 'Dasar - Dasar Ilmu Pendidikan', 2, 1, 'Revolusi Industri 4.'),
('3231931226', 'Pengantar Teknologi Informasi', 2, 1, 'Revolusi Industri 4.'),
('3231931244', 'Struktur Data', 2, 1, 'Revolusi Industri 4.'),
('3231931322', 'Matematika Dasar', 3, 1, 'Revolusi Industri 4.'),
('3231931325', 'Dasar Elektronika', 3, 1, 'Revolusi Industri 4.'),
('3231931328', 'Disain Grafis dan Fotografi', 3, 1, 'Revolusi Industri 4.'),
('0001912203', 'Kewarganegaraan', 2, 2, 'Revolusi Industri 4.'),
('3231922218', 'Telaah Kurikulum', 2, 2, 'Revolusi Industri 4.'),
('3231922317', 'Media dan Sumber Pembelajaran', 3, 2, 'Revolusi Industri 4.'),
('3231932227', 'Algoritma dan Pemrograman 1', 2, 2, 'Revolusi Industri 4.'),
('3231932233', 'Pemodelan dan Simulasi', 2, 2, 'Revolusi Industri 4.'),
('3231932236', 'Komunikasi Data', 2, 2, 'Revolusi Industri 4.'),
('3231932239', 'Organisasi dan Arsitektur Komputer', 2, 2, 'Revolusi Industri 4.'),
('3231932323', 'Matematika Diskrit', 3, 2, 'Revolusi Industri 4.'),
('3231932329', 'Simulasi Digital', 3, 2, 'Revolusi Industri 4.'),
('0001913204', 'Bahasa Indonesia', 2, 3, 'Revolusi Industri 4.'),
('0001913205', 'Ke-bung-hatta-an', 2, 3, 'Revolusi Industri 4.'),
('3231923314', 'Perencanaan Pembelajaran Komputer', 3, 3, 'Revolusi Industri 4.'),
('3231923316', 'Evaluasi Pembelajaran Komputer', 3, 3, 'Revolusi Industri 4.'),
('3231933332', 'Algoritma dan Pemrograman 2', 3, 3, 'Revolusi Industri 4.'),
('3231933335', 'Jaringan Komputer', 3, 3, 'Revolusi Industri 4.'),
('3231933342', 'Sistem Basis Data', 3, 3, 'Revolusi Industri 4.'),
('3231933345', 'Desain Animasi', 3, 3, 'Revolusi Industri 4.'),
('0001914206', 'Percakapan Bahasa Inggris I', 2, 4, 'Revolusi Industri 4.'),
('0031924311', 'Psikologi Pendidikan', 3, 4, 'Revolusi Industri 4.'),
('3231924315', 'Strategi Pembelajaran Komputer', 3, 4, 'Revolusi Industri 4.'),
('3231933356', 'Problemika Pendidikan Vokasi*', 3, 4, 'Revolusi Industri 4.'),
('3231934234', 'Perakitan dan Instalasi Komputer', 2, 4, 'Revolusi Industri 4.'),
('3231934247', 'Teknologi Multimedia', 2, 4, 'Revolusi Industri 4.'),
('3231934337', 'Pemrograman Berbasis Web', 3, 4, 'Revolusi Industri 4.'),
('3231934346', 'Pemrograman Berorientasi Objek', 3, 4, 'Revolusi Industri 4.'),
('3231934353', 'E-learning*', 3, 4, 'Revolusi Industri 4.'),
('0001915207', 'Percakapan Bahasa Inggris II', 2, 5, 'Revolusi Industri 4.'),
('0001915409', 'KKN', 4, 5, 'Revolusi Industri 4.'),
('0031915213', 'Bimbingan Konseling', 2, 5, 'Revolusi Industri 4.'),
('3231934357', 'Pengembangan Aplikasi Mobile**', 3, 5, 'Revolusi Industri 4.'),
('3231935224', 'Statistika Pendidikan', 2, 5, 'Revolusi Industri 4.'),
('3231935243', 'Interaksi Manusia dan Komputer', 2, 5, 'Revolusi Industri 4.'),
('3231935330', 'Sistem Operasi', 3, 5, 'Revolusi Industri 4.'),
('3231935354', 'Sistem Informasi Geografis**', 3, 5, 'Revolusi Industri 4.'),
('3231937355', 'Pemrograman Web Lanjut***', 3, 5, 'Revolusi Industri 4.'),
('0001916208', 'Persiapan Toefl', 2, 6, 'Revolusi Industri 4.'),
('0031926312', 'Pengelolaan Pendidikan dan Kepemimpinan', 3, 6, 'Revolusi Industri 4.'),
('3231926219', 'Pengajaran Mikro', 2, 6, 'Revolusi Industri 4.'),
('3231935340', 'Jaringan Komputer Lanjut', 3, 6, 'Revolusi Industri 4.'),
('3231936250', 'Manajemen Proyek', 2, 6, 'Revolusi Industri 4.'),
('3231936338', 'Rekayasa Perangkat Lunak', 3, 6, 'Revolusi Industri 4.'),
('3231936341', 'Sistem Pakar', 3, 6, 'Revolusi Industri 4.'),
('3231936351', 'Metodologi Penelitian', 3, 6, 'Revolusi Industri 4.'),
('3231927420', 'Pengenalan Lapangan Persekolahan', 4, 7, 'Revolusi Industri 4.'),
('3231934357', 'Pengembangan Aplikasi Mobile***', 3, 7, 'Revolusi Industri 4.'),
('3231937248', 'Kewirausahaan', 2, 7, 'Revolusi Industri 4.'),
('3231937249', 'Kapita Selekta SMK', 2, 7, 'Revolusi Industri 4.'),
('3231937331', 'Sistim Informasi Manajemen', 3, 7, 'Revolusi Industri 4.'),
('3231926421', 'Praktek Industri dan Seminar', 4, 8, 'Revolusi Industri 4.'),
('3231938652', 'Skripsi', 6, 8, 'Revolusi Industri 4.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `nama`, `judul`, `tahun`, `bukti`) VALUES
(1, 'reno', 'Strategi Pembelajaran', '2020', 'forest-3840x2160-sunset-artwork-4k-200351.jpg'),
(2, 'rendi', 'raja ', '2121', 'pexels-sanaan-mazhar-3075993.jpg'),
(3, 'asfda', '123', 'ae2', 'Soal_3.docx'),
(4, 'Karmila Suryani', 'Pengembangan E-Modul', '2022', 'cover_bukU.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id_penghargaan` int(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nama_penghargaan` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `bukti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penghargaan`
--

INSERT INTO `penghargaan` (`id_penghargaan`, `nama`, `nama_penghargaan`, `tahun`, `bukti`) VALUES
(1, 'reno', 'Microsoft ', '2022', 'cover_bukU.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(10) NOT NULL,
  `nama_prestasi` varchar(300) NOT NULL,
  `kategori_prestasi` varchar(300) NOT NULL,
  `bukti` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `kategori_prestasi`, `bukti`) VALUES
(1, 'juara 1', 'Prestasi Akademik', 'cover_bukU.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `nama_jurusan`) VALUES
(1, 'MI', 'Manajemen Informatika', 'Ilmu Komputer'),
(3, 'AK', 'Akutansi', 'Ekonomi dan Bisinis'),
(4, 'SI', 'Sastra Inggris', 'Komunikasi dan Bahasa'),
(5, 'SI', 'Sistem Informasi', 'Ilmu Komputer'),
(6, 'PTIK', 'Pendidikan Teknik Informa', 'Pendidikan Teknik Informa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasi`
--

CREATE TABLE `publikasi` (
  `id_publikasi` int(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nama_jurnal` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `bukti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `publikasi`
--

INSERT INTO `publikasi` (`id_publikasi`, `nama`, `nama_jurnal`, `kategori`, `bukti`) VALUES
(1, 'reno', 'pengembangan modul', 'Jurnal Internasional', 'cover_bukU.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_thn_akad` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_thn_akad`, `tahun_akademik`, `semester`, `status`) VALUES
(1, '2018/2019', 'Ganjil', 'Aktif'),
(2, '2018/2019', 'Genap', 'Aktif'),
(4, '2020/2021', 'Ganjil', 'Aktif'),
(5, '2021/2022', 'Genap', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kampus`
--

CREATE TABLE `tentang_kampus` (
  `id` int(11) NOT NULL,
  `sejarah` varchar(1000) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang_kampus`
--

INSERT INTO `tentang_kampus` (`id`, `sejarah`, `visi`, `misi`) VALUES
(1, 'PTIK Bung Hatta ialah sebuah jurusan yang mempelajari tentang Ilmu Pendidikan yang berbasih Komputer , didalam PTIK Bung Hatta teman teman juga dapat mengikuti Pelatihan Penggunaan Aplikasi Komputer Microsoft Office . yang mana setelah lulus nanti anda akan mendapatkan gelar ganda yakni S,Pd.MTA . lebih menguntungkan bukan jika kita mendapatkan langsung 2 gelar setelah lulus nanti . Didalam PTIK Bung Hatta juga mempelajari tentang Pemrograman , Jaringan , Desain Animasi dan lebih banyak lagi . ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae nisi nulla cupiditate similique rem sed ad dicta. Quod dolorum numquam tenetur quaerat, quis nam beatae perspiciatis ipsam ullam, assumenda dicta! Lorem ipsum dolor sit amet consect');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transkrip_nilai`
--

CREATE TABLE `transkrip_nilai` (
  `id_transkrip` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `kode_matakuliah` varchar(15) NOT NULL,
  `nilai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transkrip_nilai`
--

INSERT INTO `transkrip_nilai` (`id_transkrip`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(1, '12171353', 'MKU04', 'A'),
(2, '12171301', 'MKB1', 'A'),
(3, '12171301', 'MKB2', 'A'),
(4, '12171301', 'MKB3', ''),
(5, '12171301', 'MKB4', 'A'),
(6, '12171301', 'MKB6', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_session`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@contoh.com', 'admin', 'N', ''),
(10, 'reno', '1eb02016a9d78a6c2f1e69229152db77', 'konyetnyet28@gmail.com', 'admin', 'N', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indeks untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`) USING BTREE;

--
-- Indeks untuk tabel `laporan_kkn`
--
ALTER TABLE `laporan_kkn`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `laporan_plp`
--
ALTER TABLE `laporan_plp`
  ADD PRIMARY KEY (`id_plp`);

--
-- Indeks untuk tabel `laporan_prakerin`
--
ALTER TABLE `laporan_prakerin`
  ADD PRIMARY KEY (`id_prakerin`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indeks untuk tabel `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id_penghargaan`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indeks untuk tabel `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thn_akad`);

--
-- Indeks untuk tabel `tentang_kampus`
--
ALTER TABLE `tentang_kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  ADD PRIMARY KEY (`id_transkrip`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id_kurikulum` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `laporan_kkn`
--
ALTER TABLE `laporan_kkn`
  MODIFY `id_laporan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laporan_plp`
--
ALTER TABLE `laporan_plp`
  MODIFY `id_plp` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laporan_prakerin`
--
ALTER TABLE `laporan_prakerin`
  MODIFY `id_prakerin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penghargaan`
--
ALTER TABLE `penghargaan`
  MODIFY `id_penghargaan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id_publikasi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_thn_akad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tentang_kampus`
--
ALTER TABLE `tentang_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  MODIFY `id_transkrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
