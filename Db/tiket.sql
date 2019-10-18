-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 04:18 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bandara`
--

CREATE TABLE IF NOT EXISTS `bandara` (
`id_bandara` int(10) NOT NULL,
  `kode_bandara` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `nm_bandara` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandara`
--

INSERT INTO `bandara` (`id_bandara`, `kode_bandara`, `kota`, `nm_bandara`) VALUES
(5, 'A-77', 'malang', 'Abdurrahman Saleh'),
(6, 'A-78', 'yogyakarta', 'Adi Sucipto'),
(7, 'A-79', 'Surakarta', 'Adi Sumarno'),
(8, 'A-80', 'Semarang', 'Ahmad Yani'),
(9, 'A-81', 'Cirebon', 'Astanajapura');

-- --------------------------------------------------------

--
-- Table structure for table `booking_kereta`
--

CREATE TABLE IF NOT EXISTS `booking_kereta` (
`id_booking` int(10) NOT NULL,
  `tgl_pergi` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_kereta` int(10) NOT NULL,
  `no_kereta` varchar(20) NOT NULL,
  `jumlah_p_d` int(10) NOT NULL,
  `jumlah_p_b` int(10) NOT NULL,
  `nama_kontak` varchar(10) NOT NULL,
  `no_hp` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `catatan` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_kereta`
--

INSERT INTO `booking_kereta` (`id_booking`, `tgl_pergi`, `email`, `id_kereta`, `no_kereta`, `jumlah_p_d`, `jumlah_p_b`, `nama_kontak`, `no_hp`, `total`, `status`, `catatan`) VALUES
(31, '2018-02-24', 'aa@gmail.com', 4, 'DC-010', 1, 0, '', 0, 60000, 'lengkapi data anda', 'pergi'),
(33, '2018-02-24', 'aa@gmail.com', 4, 'DC-010', 1, 0, '', 0, 60000, 'lengkapi data anda', 'pulang'),
(34, '2018-02-24', 'adamdam@gmail.com', 4, 'DC-010', 1, 0, '', 0, 60000, 'lengkapi data anda', 'pergi'),
(35, '2018-02-16', 'adamdam@gmail.com', 3, 'DC-009', 1, 0, '', 0, 100, 'lengkapi data anda', 'pergi'),
(36, '2018-02-24', 'adamdam@gmail.com', 4, 'DC-010', 1, 0, '', 0, 60000, 'lengkapi data anda', 'pulang'),
(37, '2018-02-24', 'adamdam@gmail.com', 4, 'DC-010', 1, 0, '', 0, 60000, 'lengkapi data anda', 'pergi'),
(38, '2018-02-24', 'aa@gmail.com', 4, 'DC-010', 1, 0, 'Mr. aa', 35243242, 60000, 'lunas', 'pergi'),
(39, '2018-02-16', 'wwdqew@gmail.com', 3, 'DC-009', 1, 0, '', 0, 100, 'lengkapi data anda', 'pergi'),
(40, '2018-02-24', 'wwdqew@gmail.com', 4, 'DC-010', 1, 0, 'Mr. abians', 2147483647, 60000, 'bukti tidak valid', 'pulang');

-- --------------------------------------------------------

--
-- Table structure for table `booking_pesawat`
--

CREATE TABLE IF NOT EXISTS `booking_pesawat` (
`id_booking_p` int(10) NOT NULL,
  `tgl_pergi` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_pesawat` int(10) NOT NULL,
  `no_pesawat` varchar(20) NOT NULL,
  `jumlah_p_d` int(10) NOT NULL,
  `jumlah_p_b` int(10) NOT NULL,
  `nama_kontak` varchar(30) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `total` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `catatan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_pesawat`
--

INSERT INTO `booking_pesawat` (`id_booking_p`, `tgl_pergi`, `email`, `id_pesawat`, `no_pesawat`, `jumlah_p_d`, `jumlah_p_b`, `nama_kontak`, `no_hp`, `total`, `status`, `catatan`) VALUES
(10, '2018-02-20', 'adamdam@gmail.com', 7, 'AA-66', 2, 0, '', 0, 800000, 'lunas', 'pergi'),
(12, '2018-02-14', 'adamdam@gmail.com', 3, '60', 1, 0, '', 0, 10004, 'lengkapi data anda', 'pergi'),
(13, '2018-02-14', 'adamdam@gmail.com', 3, '60', 1, 0, '', 0, 10004, 'lengkapi data anda', 'pergi'),
(14, '2018-02-20', 'aa@gmail.com', 7, 'AA-66', 1, 0, 'Mr. aa', 2147483647, 400000, 'lunas', ''),
(17, '2018-02-27', 'ipinfin@gmail.com', 3, '60', 2, 0, 'Mr. arifin', 2147483647, 20008, 'lunas', ''),
(18, '2018-02-27', 'aa@gmail.com', 3, '60', 1, 0, 'Mr. aa', 0, 10004, 'lunas', 'pergi');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE IF NOT EXISTS `destinasi` (
`id_destinasi` int(10) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `kota`, `kategori`, `deskripsi`, `image`) VALUES
(2, 'yogyakarta', 'kereta', 'Yogyakarta dikenal sebagai salah satu kota budaya sekaligus kota pelajar di Indonesia. Beberapa atraksi wisata populer di Yogyakarta antara lain Keraton Ngayogyakarta, Taman Sari, Pantai Parangtritis, Gua Pindul dan Kebun Buah Mangunan. Kereta api ke Yogyakarta tidak pernah sepi penumpang. Stasiun k', 'yogyakarta.jpg'),
(3, 'surabaya', 'kereta', 'Surabaya yang merupakan kota terbesar kedua di Indonesia menawarkan sejumlah destinasi wisata menarik seperti House of Sampoerna, Taman Bungkul, Ciputra Waterpark dan Jembatan Suramadu. Seperti halnya kota-kota besar lain, Surabaya memiliki beberapa stasiun kereta api. Stasiun Surabaya Gubeng yang t', 'surabaya.jpg'),
(4, 'jakarta', 'kereta', 'Jakarta sebagai ibukota Republik Indonesia juga menawarkan sejumlah atraksi wisata menarik. Mulai dari Kota Tua, Pantai Ancol, taman hiburan Dunia Fantasi hingga wisata belanja dan kuliner di berbagai pusat perbelanjaan modern. Ada banyak cara menjangkau Jakarta, termasuk menggunakan kereta api. Sta', 'monas.jpg'),
(5, 'Bandung', 'kereta', 'Bandung sudah dikenal luas sebagai salah satu tujuan wisata belanja dan kuliner bagi wisatawan lokal maupun mancanegara. Namun, ibukota Jawa Barat ini juga menawarkan sejumlah destinasi wisata alam yang indah seperti Kawah Putih Ciwidey, Tebing Keraton Dago, Pemandian Air Panas Cimanggu dan Ranca Up', 'bandung.jpg'),
(6, 'jakarta', 'pesawat', 'Bandara Soekarno-Hatta atau biasa disebut Bandara Cengkareng merupakan bandara tersibuk di Indonesia. Bandara ini dibangun pada 1985 untuk menggantikan Bandara Kemayoran di Jakarta Pusat. Memiliki luas 18 km2, bandara ini terdiri dari 3 (tiga) terminal dengan kapasitas 50 juta penumpang per tahun ya', 'monas.jpg'),
(7, 'surabaya', 'pesawat', 'Bandara Internasional Juanda merupakan bandara tersibuk ketiga di Indonesia setelah Bandara Soekarno-Hatta , Jakarta dan Kualanamu, Medan. Bandara ini baru saja membuka terminal barunya di sebelah selatan landasan pacu pada 14 Februari 2014. Terminal baru ini dilengkapi 40 loket check-in, 9 ruang tu', 'surabaya.jpg'),
(8, 'yogyakarta', 'pesawat', 'Bandara Adi Sucipto dibangun di atas tanah seluas 183 hektar. Nama bandara ini diambil dari nama pahlawan Agustinus Adisutjipto asal Salatiga yang gugur pada tahun 1947. Sebagai tambahan, bandara ini bukan hanya memiliki terminal modern tetapi juga menyediakan beberapa fasilitas, seperti pusat penuk', 'yogyakarta.jpg'),
(9, 'bali', 'pesawat', 'Bandara Ngurah Rai merupakan bandara tersibuk ketiga di Indonesia, setelah Bandara Internasional Soekarno-Hatta di Jakarta dan Bandara Internasional Juanda di Surabaya. Nama bandara ini diambil dari nama I Gusti Ngurah Rai, seorang pahlawan Indonesia dari Bali.', 'bali.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE IF NOT EXISTS `kereta` (
`id_kereta` int(10) NOT NULL,
  `nm_kereta` varchar(30) NOT NULL,
  `no_kereta` varchar(20) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `subkelas` varchar(30) NOT NULL,
  `ongkos_balita` int(10) NOT NULL,
  `ongkos_dewasa` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `nm_kereta`, `no_kereta`, `kelas`, `subkelas`, `ongkos_balita`, `ongkos_dewasa`) VALUES
(2, 'ciremai', 'DC-009', 'ekonomi', 'D', 20000, 50000),
(3, 'ciremai', 'DC-009', 'eksekutif', 'subclass c', 30000, 100000),
(4, 'argolawu', 'DC-010', 'bisnis', 'C', 0, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_bayar`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_bayar` (
`id_k_bayar` int(10) NOT NULL,
  `id_booking` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_bayar`
--

INSERT INTO `konfirmasi_bayar` (`id_k_bayar`, `id_booking`, `image`) VALUES
(6, 11, 'garuda-indonesia.png'),
(7, 12, 'order_pesawat.PNG'),
(8, 13, 'kereta banner2.jpg'),
(9, 14, 'indomart.jpg'),
(10, 15, 'garuda-indonesia.png');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_bayar_pesawat`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_bayar_pesawat` (
`id_k_bayar` int(10) NOT NULL,
  `id_booking_p` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_bayar_pesawat`
--

INSERT INTO `konfirmasi_bayar_pesawat` (`id_k_bayar`, `id_booking_p`, `image`) VALUES
(1, 1, '6.jpg'),
(2, 2, 'pesawat.jpg'),
(3, 3, 'indomart.jpg'),
(5, 17, '11111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `list_booking`
--

CREATE TABLE IF NOT EXISTS `list_booking` (
`id_list` int(10) NOT NULL,
  `id_booking` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `jenis_booking` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_booking`
--

INSERT INTO `list_booking` (`id_list`, `id_booking`, `nama`, `kategori`, `jenis_booking`) VALUES
(1, 40, 'Mr. abi', 'dewasa', 'kereta'),
(2, 38, 'Mr. rizal', 'dewasa', 'kereta');

-- --------------------------------------------------------

--
-- Table structure for table `list_booking_pesawat`
--

CREATE TABLE IF NOT EXISTS `list_booking_pesawat` (
`id_list_p` int(10) NOT NULL,
  `id_booking_p` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_booking_pesawat`
--

INSERT INTO `list_booking_pesawat` (`id_list_p`, `id_booking_p`, `nama`, `kategori`) VALUES
(3, 3, 'Mr. adam', 'dewasa'),
(4, 4, 'Mr. ssssssss', 'dewasa'),
(5, 14, 'Mr. ipinus', 'dewasa'),
(6, 17, 'Mr. arifin', 'dewasa'),
(7, 17, 'Mrs. sase', 'dewasa'),
(8, 18, 'Mr. dewi', 'dewasa');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email`, `username`, `password`, `kota`, `negara`, `image`) VALUES
(1, 'ipinfin@gmail.com', 'arifin', 'masipin', 'trenggalek', 'indonesia', '11111.jpg'),
(3, 'rukayah@gmail.com', 'lakayah', 'lajarno', 'prambon', 'njager', ''),
(4, 'dajfkdhsakf@gmail.com', 'kjasdhiah', 'a', 'jashdahj', 'usgdui', ''),
(5, 'aa@gmail.com', 'aa', 'aa', 'trenggalek', 'indonesia', '11111.jpg'),
(6, 'i@gmail.com', 'i', 'mm', 'aaaaa', 'aaaaaaa', ''),
(7, 'f@gmail.com', 'f', 'f', 'f', 'f', ''),
(8, 'f@gmail.com', 'f', 'f', 'f', 'f', ''),
(9, 'adamdam@gmail.com', 'adam A.R', 'adamdam08', 'trenggalek', 'indonesia', ''),
(10, 'wwdqew@gmail.com', 'abiansyah', 'aa', 'da', 'sda', '045866300_1429103948-Charlie-Puth-Eyebrow-Images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan_ker`
--

CREATE TABLE IF NOT EXISTS `perjalanan_ker` (
`id_p_kereta` int(10) NOT NULL,
  `st_berangkat` varchar(50) NOT NULL,
  `st_tiba` varchar(50) NOT NULL,
  `no_kereta` varchar(30) NOT NULL,
  `jm_berangkat` time NOT NULL,
  `jm_tiba` time NOT NULL,
  `tgl_pergi` date NOT NULL,
  `jumlah_kursi` int(10) NOT NULL,
  `id_ker` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perjalanan_ker`
--

INSERT INTO `perjalanan_ker` (`id_p_kereta`, `st_berangkat`, `st_tiba`, `no_kereta`, `jm_berangkat`, `jm_tiba`, `tgl_pergi`, `jumlah_kursi`, `id_ker`) VALUES
(3, 'stasiun kediri', 'stasiun malang', 'DC-009', '04:00:00', '08:00:00', '2018-02-24', 12, 3),
(6, 'stasiun kediri', 'stasiun malang', 'DC-010', '13:00:00', '14:00:00', '2018-02-24', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan_pes`
--

CREATE TABLE IF NOT EXISTS `perjalanan_pes` (
`id_p_pesawat` int(10) NOT NULL,
  `bd_berangkat` varchar(50) NOT NULL,
  `bd_tiba` varchar(50) NOT NULL,
  `no_pesawat` varchar(20) NOT NULL,
  `jm_berangkat` time NOT NULL,
  `jm_tiba` time NOT NULL,
  `tgl_pergi` date NOT NULL,
  `jumlah_kursi` int(10) NOT NULL,
  `id_pes` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perjalanan_pes`
--

INSERT INTO `perjalanan_pes` (`id_p_pesawat`, `bd_berangkat`, `bd_tiba`, `no_pesawat`, `jm_berangkat`, `jm_tiba`, `tgl_pergi`, `jumlah_kursi`, `id_pes`) VALUES
(3, 'Abdurrahman Saleh', 'Adi Sucipto', 'AA-66', '00:00:00', '17:00:00', '2018-02-28', 85, 7),
(4, 'Abdurrahman Saleh', 'Adi Sucipto', 'AA-008', '02:00:00', '05:00:00', '2018-02-27', 0, 4),
(5, 'Abdurrahman Saleh', 'Adi Sucipto', '60', '02:00:00', '04:00:00', '2018-02-27', 9, 3),
(6, 'Abdurrahman Saleh', 'Abdurrahman Saleh', 'AA-008', '00:00:00', '00:00:00', '0000-00-00', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE IF NOT EXISTS `pesawat` (
`id_pesawat` int(10) NOT NULL,
  `nm_pesawat` varchar(50) NOT NULL,
  `no_pesawat` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `ongkos_balita` int(10) NOT NULL,
  `ongkos_dewasa` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `fasilitas` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `nm_pesawat`, `no_pesawat`, `kelas`, `ongkos_balita`, `ongkos_dewasa`, `image`, `fasilitas`) VALUES
(3, 'Garuda', '60', 'ekonomi', 5004, 10004, 'garuda-indonesia.png', 'bagasi 20kg, makan, wifi'),
(4, 'air asia', 'AA-008', 'ekonomi', 400000, 700000, 'air asia.png', ''),
(7, 'air asia', 'AA-66', 'ekonomi', 200000, 400000, 'air asia.png', 'bagasi'),
(8, 'Wings airways', 'BT-001', 'ekonomi', 200000, 400000, 'Wing air.jpg', 'bagasi 40 Kg');

-- --------------------------------------------------------

--
-- Table structure for table `stasiun_kereta`
--

CREATE TABLE IF NOT EXISTS `stasiun_kereta` (
`id_st_kereta` int(10) NOT NULL,
  `stasiun_kode` varchar(10) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `nm_stasiun` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stasiun_kereta`
--

INSERT INTO `stasiun_kereta` (`id_st_kereta`, `stasiun_kode`, `kota`, `nm_stasiun`) VALUES
(1, '45C', 'blitar', 'stasiun kediri'),
(2, '43D', 'malang', 'stasiun malang'),
(3, 'S-001', 'jakarta', 'Cakung'),
(4, 'A-002', 'Bandung', 'Cangkring'),
(5, 'S-003', 'Banten', 'Catang'),
(6, 'S-004', 'Ciamis', 'Ciamis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
 ADD PRIMARY KEY (`id_bandara`);

--
-- Indexes for table `booking_kereta`
--
ALTER TABLE `booking_kereta`
 ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `booking_pesawat`
--
ALTER TABLE `booking_pesawat`
 ADD PRIMARY KEY (`id_booking_p`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
 ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
 ADD PRIMARY KEY (`id_kereta`);

--
-- Indexes for table `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
 ADD PRIMARY KEY (`id_k_bayar`);

--
-- Indexes for table `konfirmasi_bayar_pesawat`
--
ALTER TABLE `konfirmasi_bayar_pesawat`
 ADD PRIMARY KEY (`id_k_bayar`);

--
-- Indexes for table `list_booking`
--
ALTER TABLE `list_booking`
 ADD PRIMARY KEY (`id_list`);

--
-- Indexes for table `list_booking_pesawat`
--
ALTER TABLE `list_booking_pesawat`
 ADD PRIMARY KEY (`id_list_p`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `perjalanan_ker`
--
ALTER TABLE `perjalanan_ker`
 ADD PRIMARY KEY (`id_p_kereta`);

--
-- Indexes for table `perjalanan_pes`
--
ALTER TABLE `perjalanan_pes`
 ADD PRIMARY KEY (`id_p_pesawat`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
 ADD PRIMARY KEY (`id_pesawat`);

--
-- Indexes for table `stasiun_kereta`
--
ALTER TABLE `stasiun_kereta`
 ADD PRIMARY KEY (`id_st_kereta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bandara`
--
ALTER TABLE `bandara`
MODIFY `id_bandara` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `booking_kereta`
--
ALTER TABLE `booking_kereta`
MODIFY `id_booking` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `booking_pesawat`
--
ALTER TABLE `booking_pesawat`
MODIFY `id_booking_p` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
MODIFY `id_destinasi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kereta`
--
ALTER TABLE `kereta`
MODIFY `id_kereta` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
MODIFY `id_k_bayar` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `konfirmasi_bayar_pesawat`
--
ALTER TABLE `konfirmasi_bayar_pesawat`
MODIFY `id_k_bayar` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `list_booking`
--
ALTER TABLE `list_booking`
MODIFY `id_list` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `list_booking_pesawat`
--
ALTER TABLE `list_booking_pesawat`
MODIFY `id_list_p` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `perjalanan_ker`
--
ALTER TABLE `perjalanan_ker`
MODIFY `id_p_kereta` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `perjalanan_pes`
--
ALTER TABLE `perjalanan_pes`
MODIFY `id_p_pesawat` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
MODIFY `id_pesawat` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `stasiun_kereta`
--
ALTER TABLE `stasiun_kereta`
MODIFY `id_st_kereta` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
