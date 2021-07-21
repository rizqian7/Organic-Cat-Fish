-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jul 2021 pada 04.26
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_user` int(150) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_user`, `nama_user`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-08 10:23:27', '2018-10-08 10:23:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_driver`
--

CREATE TABLE `tbl_driver` (
  `id_driver` int(11) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_driver`
--

INSERT INTO `tbl_driver` (`id_driver`, `no_ktp`, `nama_lengkap`, `no_hp`, `alamat`, `username`, `password`) VALUES
(2, '1344512341212341', 'Rizky Brama', '08109093434', 'Madiun', 'rizkybrama', '$2y$10$Tw9FR06X8u881u/LY.pZM.YkfonOiRZCiqkeTOugVvV2F.T0yzhLS'),
(3, '6948518284187198', 'Wisnu Galih Pradipta', '085123234345', 'Lampung', 'wisnugp', '$2y$10$UnljyRQUtjemtSm4jBI4fOeWgoLCZrK5aIW3Q2rqYuYcW7oMvc4Bm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_harga`
--

CREATE TABLE `tbl_harga` (
  `id_harga` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_harga`
--

INSERT INTO `tbl_harga` (`id_harga`, `harga_beli`, `harga_jual`) VALUES
(1, 55000, 70000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_panen`
--

CREATE TABLE `tbl_panen` (
  `id_panen` int(11) NOT NULL,
  `id_peternak` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `waktu_panen` text NOT NULL,
  `berat_panen` int(11) NOT NULL,
  `jumlah_kolam` int(11) NOT NULL,
  `jenis_pakan` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_panen`
--

INSERT INTO `tbl_panen` (`id_panen`, `id_peternak`, `id_driver`, `waktu_panen`, `berat_panen`, `jumlah_kolam`, `jenis_pakan`, `status`) VALUES
(12, 6, 3, '07/07/2021', 500, 7, 'pelet', ''),
(13, 11, 2, '07/08/2021', 2000, 10, 'Pelet', ''),
(14, 12, 3, '07/12/2021', 1500, 7, 'Pelet', ''),
(15, 7, 0, '07/12/2021', 700, 5, 'pelet', ''),
(16, 8, 0, '07/15/2021', 500, 3, 'pelet', ''),
(17, 1, 0, '07/11/2021', 600, 5, 'pelet', ''),
(18, 7, 0, '07/11/2021', 300, 5, 'pelet', ''),
(19, 3, 0, '07/19/2021', 400, 2, 'pelet', ''),
(20, 5, 0, '07/27/2021', 800, 6, 'pelet', ''),
(21, 9, 0, '07/30/2021', 200, 2, 'pelet', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_rumahmakan` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `waktu_pesan` text NOT NULL,
  `berat_pesan` float NOT NULL,
  `jenis_ukuran` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id_pemesanan`, `id_rumahmakan`, `id_driver`, `waktu_pesan`, `berat_pesan`, `jenis_ukuran`, `status`) VALUES
(4, 11, 3, '07/11/2021', 30, 'Kecil', ''),
(5, 12, 0, '07/18/2021', 20, 'Besar', ''),
(6, 14, 0, '07/15/2021', 25, 'Besar', ''),
(7, 15, 0, '07/10/2021', 30, 'Sedang', ''),
(8, 16, 0, '07/12/2021', 40, 'Kecil', ''),
(9, 17, 0, '07/11/2021', 15, 'Besar', ''),
(10, 17, 0, '07/13/2021', 15, 'Sedang', ''),
(11, 18, 0, '07/13/2021', 20, 'Sedang', ''),
(12, 19, 0, '07/14/2021', 25, 'Kecil', ''),
(13, 20, 0, '07/21/2021', 30, 'Kecil', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peternaklele`
--

CREATE TABLE `tbl_peternaklele` (
  `id_peternaklele` int(100) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `jumlah_kolam` int(11) NOT NULL,
  `jumlah_produksi` int(11) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peternaklele`
--

INSERT INTO `tbl_peternaklele` (`id_peternaklele`, `no_ktp`, `nama_lengkap`, `no_hp`, `alamat`, `nama_usaha`, `jumlah_kolam`, `jumlah_produksi`, `latitude`, `longitude`, `username`, `password`) VALUES
(1, '871827381273817', 'Muhammad Yahya', '0857914701313', 'Malang', 'Ternak Jaya', 6, 2000, '0.00000000', '0.00000000', 'muhammad', '$2y$10$tEnHrHVWurdAs/mdkWnApu.jvBi.kPjYjV1vQTDMD7pOIafWS2FhG'),
(3, '35040508640012', 'Melati Tanjung', '085444000999', 'Karangploso, Malang', 'Lele Abadi', 10, 2000, '0.00000000', '0.00000000', 'melati', '$2y$10$KidxsOFo6rDa4bBZ2.aYS.8tbxsCyVLJf.opIGr/aqOmkCtLC0KGq'),
(4, '3504050508720003', 'Sri Patmiati', '081343478898', 'Bumiaji, Malang', 'Amanah Ibu', 8, 1000, '0.00000000', '0.00000000', 'patmiati', '$2y$10$36qLGj8U/cQeRDEhvcdoYugfIhMfQ.Rt5xsgf.frfodS2M4Qagu9C'),
(5, '3504050608310010', 'Irwin Deriansyah', '081123344556', 'Junrego, Malang', 'Mempesona Lele', 9, 1400, '0.00000000', '0.00000000', 'irwind', '$2y$10$xmTgb5MhITGVeSJzWSA.FOhQSuHENnwPz3ejEk.h1QWJntOTsNeF.'),
(6, '3504050704210007', 'Kartika Dyah A.', '085678345126', 'Oro-Oro Ombo, Malang', 'Anugerah Karya Bangsa', 10, 2500, '0.00000000', '0.00000000', 'kartika', '$2y$10$wq6mD/t7sRdKcSZBi3s3uOUdCSihmiDZEebn1wlS/ALlsIqexv7Im'),
(7, '3504050508210003', 'Lona Chinsia A.', '085456783124', 'Ngantru, Tulungagung', 'Ngantru Perkasa Lele', 8, 700, '0.00000000', '0.00000000', 'chinsia', '$2y$10$nb2U9KxyQIxWqGpJz7tR8ela1ZuGbpggTQ1.9Uv8yoRevaRG8C9rq'),
(8, '3504050508710012', 'Virgiawan Prakoso', '085567342897', 'Jombang', 'Jombang Lele', 15, 2300, '0.00000000', '0.00000000', 'virgiawan', '$2y$10$zOfwlkGSS38P8q4MA9hBF.TiJb5l1NwXHOgtozywIUjSZphlXFngO'),
(9, '3504050508960012', 'Sofyan Syahri', '085666777888', 'Jatinagor Jember', 'Jember Barokah Lele', 15, 3000, '0.00000000', '0.00000000', 'sofyan', '$2y$10$RttdsVVlgDGBd1hJwxdPtuzwiRfeQUQRcpXJVCbIBaplnVF9rN.SK'),
(10, '3506050508970004', 'Fibriyan Adi Masbida', '086777333444', 'Bocek, Karangploso, Malang', 'Bocek Sentosa Lele', 15, 3000, '0.00000000', '0.00000000', 'fibriyan', '$2y$10$ZjeHRPzHyzX0WbrbmX0WyuyoP4/Ru/hRuXQWY6hGgKz4PWvRLdsXC'),
(11, '3504060708950005', 'Sri Manggala Wijaya', '086789234567', 'Pare Kediri', 'Wijaya Lele Kediri', 15, 3000, '0.00000000', '0.00000000', 'wijaya', '$2y$10$sYHzFKJhuH26qK9EcTaGWepCpFXJaNlDyt1AqQebaGBkkscwJck6q'),
(12, '3506070802984455', 'Faqih Syarif', '085679345678', 'Tulungagung', 'Lele Enak Mantap', 12, 2000, '0.00000000', '0.00000000', 'faqihsyarif', '$2y$10$ptVP54L86aZSbrRAg8DAB.bS1KyRyG6vvXFgNdRmEzaH9.cLtcS.e'),
(13, '1234567812345678', 'Bima Arya', '082345678234', 'Gedangan Malang', 'Bima lele', 6, 400, '0.00000000', '0.00000000', 'bimaarya', '$2y$10$HliKTSw8M98Q.OUPrfgTu.20GYoejglz9bjcY6Nc7zHjXPwxu45oW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rumahmakan`
--

CREATE TABLE `tbl_rumahmakan` (
  `id_rumahmakan` int(11) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `nama_rumahmakan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rumahmakan`
--

INSERT INTO `tbl_rumahmakan` (`id_rumahmakan`, `no_ktp`, `nama_lengkap`, `no_hp`, `nama_rumahmakan`, `alamat`, `latitude`, `longitude`, `username`, `password`) VALUES
(9, '3504050581210008', 'Fajri al kamil', '083423415678', 'Alam Akuarium', 'Girimoyo, Karangploso, Malang', '0.00000000', '0.00000000', 'fajrialkamil', '$2y$10$flPYp6Iy9dpHCYXGkJXbRehbfrbwbeOXtfY1p01PO.2kLMm1KsAo.'),
(10, '1234567891234567', 'Iqbal Septiyan', '089223344556', 'Lele Bakar Iqbal', 'Sumbersari Malang', '0.00000000', '0.00000000', 'iqbals', '$2y$10$NrMrOTAq5CgFLntbgiBMyeXPlGbILLgEPpTaHFrpsp1TeOalpNn7K'),
(11, '3504050607890978', 'Irwin Deriyan', '085336648080', 'Candi Lele', 'Candi Panggung, Malang', '0.00000000', '0.00000000', 'irwind', '$2y$10$NSr9Ug.73j6QRDCJ5WOA/O133pMwzOUFV4a3/prCRQ4nJkrsBMUfq'),
(12, '3504050581340008', 'Isnaini', '085666787232', 'Sumbawa Lele', 'Sigura-gura, Malang', '0.00000000', '0.00000000', 'isnaini', '$2y$10$DqCLMlGZBIfV.VmuVivusODj2H57jXLIAcIKfZNs.2rY0blcjIFi6'),
(13, '3504050581340008', 'Ivarianti Silaloho', '085343545676', 'Rumah Makan Silolohi', 'Sumbersari, Malang', '0.00000000', '0.00000000', 'ivarianti', '$2y$10$tIaRbX9MKDi2.qS500/T0ud9m9628I2yMSvvEgZseE3UsUL.d1/Ne'),
(14, '3504050581340012', 'Josua Fernando', '081234346435', 'Sari Laut ', 'MT Haryono, Malang', '0.00000000', '0.00000000', 'josuaf', '$2y$10$TDGapuAfRVO366vB.0XAfeRsATQCaZROFNV6woDtfK/CRGwyToTn.'),
(15, '3504050581230002', 'Khalid Hamzah', '087436234563', 'Bahari Lele', 'Klojen, Malang', '0.00000000', '0.00000000', 'khalid', '$2y$10$J7yt4EvH5YWCS.VG4IslCezzrXdYcTQozQjbWnOoHCpW8mFaaNzRW'),
(16, '3504060583260001', 'Landika Hari', '089342786546', 'Rumah Makan Seafood ', 'Panjaitan, Malang', '0.00000000', '0.00000000', 'landika', '$2y$10$Yq70Ru5QC82tJfarps4pGOPCHULyaKlMpVz7AcEUtFzjCC2LE9BVW'),
(17, '3504060233280012', 'Luqman Bahtiar', '0834235678342', 'Kedai Pecel Lele', 'Suhat, Malang', '0.00000000', '0.00000000', 'luqman', '$2y$10$24vg0xj6ikF1W3MubkWJHOOEcSzhuWkr1jTLc4xGOa.qy9H5UYiOW'),
(18, '3504089212280013', 'Azzam Alghifari', '085678234543', 'Kedai Sederhana', 'Sawojajar, Malang', '0.00000000', '0.00000000', 'alghifari', '$2y$10$4IcQbqa5bpsMDOfWz3O5yupDX58O3RGfvtkLMPV3Eo89TznUjkqU2'),
(19, '3504239412270009', 'Brilian Misbah', '081234231546', 'Pecel Lele Lamongan', 'Lowokwaru, Malang', '0.00000000', '0.00000000', 'brilian', '$2y$10$g760SqW3JeNFCP6WkZ6EtO2HEQR.oE9JV4t.vSsBgzg1LwZxQOrTa'),
(20, '3504239412270009', 'Dimas Setiawan', '088672389799', 'Nasi Uduk Gusti Mantap', 'Mertojoyo, Malang', '0.00000000', '0.00000000', 'dimass', '$2y$10$Bbe0oAE.td3mE1CeoUu8HO7LGN0Svq66YMSHplTHUwk0rrAIlCsSW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `tbl_harga`
--
ALTER TABLE `tbl_harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `tbl_panen`
--
ALTER TABLE `tbl_panen`
  ADD PRIMARY KEY (`id_panen`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tbl_peternaklele`
--
ALTER TABLE `tbl_peternaklele`
  ADD PRIMARY KEY (`id_peternaklele`);

--
-- Indexes for table `tbl_rumahmakan`
--
ALTER TABLE `tbl_rumahmakan`
  ADD PRIMARY KEY (`id_rumahmakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_user` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_panen`
--
ALTER TABLE `tbl_panen`
  MODIFY `id_panen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_peternaklele`
--
ALTER TABLE `tbl_peternaklele`
  MODIFY `id_peternaklele` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_rumahmakan`
--
ALTER TABLE `tbl_rumahmakan`
  MODIFY `id_rumahmakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
