-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 08:18 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpilogistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `publish` smallint(6) DEFAULT NULL,
  `judul` text,
  `gambar` varchar(255) DEFAULT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `id_kategori`, `tanggal`, `publish`, `judul`, `gambar`, `isi`) VALUES
(3, 5, '2019-07-23 08:36:25', 1, 'KPK Tetapkan Gubernur Kepri sebagai Tersangka Suap', '3.jpg', '<p><strong>JAKARTA, KOMPAS.com</strong>&nbsp;- Komisi Pemberantasan Korupsi (&nbsp;<a href=\"https://indeks.kompas.com/tag/KPK\" target=\"_self\">KPK</a>) menetapkan Gubernur&nbsp;<a href=\"https://indeks.kompas.com/tag/Kepulauan-Riau\" target=\"_self\">Kepulauan Riau</a>&nbsp;Nurdin Basirun sebagai&nbsp;<a href=\"https://indeks.kompas.com/tag/tersangka\" target=\"_self\">tersangka</a>, Kamis (11/7/2019).</p>\r\n\r\n<p>Selain itu, KPK juga menjerat&nbsp;Kepala Dinas Kelautan dan Perikanan (DKP), Edy Sofyan; Kepala Bidang Perikanan Tangkap DKP, Budi Hartono.</p>\r\n\r\n<p>KPK juga menjerat pihak swasta bernama Abu Bakar.</p>\r\n\r\n<p>&quot;KPK meningkatkan status perkara ke tingkat penyidikan dengan menetapkan&nbsp;empat&nbsp;orang sebagai tersangka,&quot; kata Wakil Ketua KPK Basaria Panjaitan di Gedung Merah Putih KPK, Jakarta, Kamis malam.</p>\r\n\r\n<p><strong>Baca juga:&nbsp;<a href=\"https://regional.kompas.com/read/2019/07/09/15083421/kabut-asap-pekat-karhutla-riau-selimuti-permukiman-warga-mulai-sesak-napas\" target=\"_self\">Kabut Asap Pekat Karhutla Riau Selimuti Permukiman, Warga Mulai Sesak Napas dan Mengungsi</a></strong></p>\r\n\r\n<p>Keempatnya terjerat dalam kasus dugaan suap terkait izin prinsip dan lokasi pemanfaatan laut, proyek reklamasi di wilayah pesisir dan pulau-pulau kecil serta kasus dugaan penerimaan gratifikasi.</p>\r\n\r\n<p>Sebelumnya Nurdin terjaring dalam operasi tangkap tangan (OTT) bersama lima orang lainnya. KPK menduga akan terjadi transaksi terkait perizinan rencana lokasi proyek reklamasi di Tanjung Piayu, Kepulauan Riau.</p>\r\n\r\n<p>Saat itu, KPK juga mengamankan uang sekitar 6.000 dollar Singapura. Uang ini diduga merupakan bagian dari transaksi terkait izin lokasi reklamasi tersebut.</p>\r\n\r\n<p>Selain gubernur, mereka yang terjaring OTT terdiri dari kepala dinas, kepala bidang, PNS, dan pihak swasta.</p>\r\n\r\n<p>Nurdin disangka melanggar Pasal 12 huruf a atau huruf b atau Pasal 11 dan Pasal 12B Undang-Undang Nomor 31 Tahun 1999 sebagaimana diubah UU Nomor 20 Tahun 2001 tentang Pemberantasan Tindak Pidana Korupsi jo Pasal 55 ayat (1) ke-1 KUH Pidana.</p>\r\n\r\n<p><strong>Baca juga:&nbsp;<a href=\"https://nasional.kompas.com/read/2019/07/11/16211651/nasdem-sebut-ott-gubernur-kepulauan-riau-tak-coreng-citra-partai\" target=\"_self\">Nasdem Sebut OTT Gubernur Kepulauan Riau Tak Coreng Citra Partai</a></strong></p>\r\n\r\n<p>Sementara&nbsp;Edy dan Budi disangka melanggar Pasal 12 huruf a atau huruf b atau Pasal 11 Undang-Undang Nomor 31 Tahun 1999 sebagaimana diubah UU Nomor 20 Tahun 2001 tentang Pemberantasan Tindak Pidana Korupsi jo Pasal 55 ayat (1) ke-1 KUH Pidana.</p>\r\n\r\n<p>Kemudian Abu Bakar&nbsp; disangka melanggar Pasal 5 ayat (1) huruf a atau Pasal 5 ayat (1) huruf b atau Pasal 13 Undang-Undang Nomor 31 Tahun 1999 sebagaimana diubah UU Nomor 20 Tahun 2001 tentang Pemberantasan Tindak Pidana Korupsi jo Pasal 55 ayat (1) ke-1 KUH Pidana.</p>'),
(4, 4, '2019-07-23 08:33:14', 1, 'Bank Mandiri Pastikan Sistem Kembali Normal', '4.jpg', '<p><strong>JawaPos.com</strong>&nbsp;&ndash; Perubahan saldo rekening milik sejumlah nasabah Bank Mandiri yang terjadi secara tiba-tiba kemarin pagi (20/7) segera teratasi. Corporate Secretary Bank Mandiri Rohan Nafas menegaskan, pihaknya telah mengupayakan untuk mengatasi permasalahan tersebut dalam waktu 2-3 jam.</p>\r\n\r\n<p>Rohan mengatakan, saldo asli nasabah aman dan sudah ter-record oleh back up server yang dimiliki Bank Mandiri. &ldquo;Kami pastikan uang nasabah aman. Memang untuk menyesuaikan saldo seperti awal, butuh waktu. Kami harus&nbsp;<em>double check</em>karena ada saldo yang berkurang, ada yang bertambah,&rdquo; kata Rohan dalam keterangan pers kemarin (20/7).</p>\r\n\r\n<p>Dia menjelaskan, ketidaknyamanan yang sempat dialami nasabah itu disebabkan adanya&nbsp;<em>error</em>&nbsp;saat perpindahan proses dari&nbsp;<em>core system</em>&nbsp;ke&nbsp;<em>back up system</em>&nbsp;yang rutin dilaksanakan pada akhir hari. Masalah itu disebut Rohan menimpa sekitar 10 persen atau 1,5 juta nasabah Bank Mandiri. &ldquo;Sekali lagi kami mohon maaf kepada masyarakat,&rdquo; katanya.</p>\r\n\r\n<p>Sebagai langkah antisipasi, lanjut Rohan, Bank Mandiri akan melakukan investigasi dan audit secara menyeluruh pada sistem. &ldquo;Ini baru kali pertama terjadi. Akan investigasi dan audit, apakah ini malfunction di hardware atau software. Saat ini penanganan sudah dilakukan dengan&nbsp;<em>back up server</em>,&rdquo; tuturnya.</p>'),
(5, 4, '2019-07-23 08:38:36', 1, 'Evolusi Go-Jek Kuasai Hulu-Hilir', '5.jpg', '<p><strong>JawaPos.com</strong>&nbsp;&ndash; Go-Jek tak butuh waktu lama untuk berevolusi dari perusahaan&nbsp;<em>call center</em>&nbsp;menjadi sebuah ekosistem terintegrasi yang menggerakkan orang, barang, dan uang. Didirikan pada 2010, Go-Jek kini punya 22 layanan<em>&nbsp;on demand</em>untuk berbagai kebutuhan.</p>\r\n\r\n<p>Bermula dengan 20 mitra pengemudi, Go-Jek kini telah punya lebih dari 2 juta pengemudi, 400 ribu mitra&nbsp;<em>merchant</em>, dan 60 ribu penyedia jasa di Asia Tenggara. Kini Go-Jek juga telah masuk jajaran&nbsp;<em>elite start-up decacorn</em>, yaitu perusahaan yang bernilai di atas USD 10 miliar (sekitar Rp 140 triliun).</p>\r\n\r\n<p>Co-founder Go-Jek Kevin Aluwi mengatakan, pertumbuhan Go-Jek sangat pesat sejak kali pertama diluncurkan. Sejak aplikasi diperkenalkan pada Juni 2016, hingga Juni 2019 jumlah transaksi yang diproses dalam platform Go-Jek melesat hingga 1.100 persen atau 12 kali lipat.</p>\r\n\r\n<p>&ldquo;Pertumbuhan signifikan itu didorong peningkatan permintaan konsumen akan layanan terintegrasi dari Go-Jek. Kami memanfaatkan teknologi, data, dan pemahaman mengenai pasar,&rdquo; ujar Kevin saat rebranding logo Go-Jek kemarin.</p>\r\n\r\n<p>Di sisi aplikasi mitra, Kevin mengungkapkan, teknologi Go-Jek berevolusi dari aplikasi mencari order menjadi aplikasi yang membukakan akses kepada berbagai produk finansial serta fitur keselamatan dan keamanan. Dari sisi mitra merchant, platform Go-Jek telah berevolusi menjadi sebuah aset digital untuk ekspansi bisnis dan naik kelas. &ldquo;Teknologi yang kami tawarkan kepada merchant dari hulu ke hilir,&rdquo; urai Kevin.</p>\r\n\r\n<p>Presiden Go-Jek Group Andre Soelistyo menyatakan, keandalan teknologi dan model bisnis ekosistem yang dikembangkan membuat aplikasi itu terus memimpin di Indonesia sebagai pasar terbesar di Asia Tenggara. &ldquo;Kami memulai layanan dengan ride hailing, tapi hanya dalam waktu singkat kami telah berevolusi di layanan transportasi, pesan-antar makanan, pembayaran digital, logistik, serta layanan merchant,&rdquo; ujar Andre.</p>\r\n\r\n<p>Founder dan CEO Go-Jek Group Nadiem Makarim mengatakan, kehadiran logo baru diilhami perjalanan Go-Jek yang telah berhasil menjadi platform teknologi terdepan di Asia Tenggara. &ldquo;Logo baru ini melambangkan alasan utama hadirnya Go-Jek, yaitu memecahkan masalah melalui teknologi. Logo ini melambangkan satu tombol untuk semua,&rdquo; ucap dia.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text,
  `id_layanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `deskripsi`, `id_layanan`) VALUES
(3, '3.jpg', NULL, 3),
(5, '5.jpg', '<p>Mengoperasikan truk wing box &amp; CDD untuk mendukung kebutuhan transportasi LCL anda. Layanan transportasi darat kami mencakup wilayah Sumatera, Jawa, Kalimantan, Bali, Maluku, Sulawesi dan Nusa Tenggara Barat maupun Timur.sss</p>', 7),
(6, '6.png', '<p>Muatan Project via Kapal cargo( Seafreight)</p>', 1),
(7, '7.jpg', '<p>Muatan Project via Kapal cargo( Seafreight)</p>', 1),
(8, '8.jpg', '<p>Muatan Project via Kapal cargo( Seafreight)</p>', 1),
(9, '9.jpg', '<p>Muatan Project via Kapal cargo( Seafreight)</p>', 1),
(10, '10.jpg', '<p>Pengiriman darat dengan Bermacam moda transportasi (LAND TRANSPORTATION)</p>', 2),
(11, '11.jpg', '<p>Pengiriman darat dengan Bermacam moda transportasi (LAND TRANSPORTATION)</p>', 2),
(12, '12.jpg', '<p>Pengiriman darat dengan Bermacam moda transportasi (LAND TRANSPORTATION)</p>', 2),
(13, '13.jpg', '<p>Pengiriman darat dengan Bermacam moda transportasi (LAND TRANSPORTATION)</p>', 2),
(14, '14.jpg', '<p>Pengiriman Heavy Cargo dengan Multi Axle&nbsp; dan Selfloader</p>', 7),
(15, '15.jpg', '<p>Pengiriman Heavy Cargo dengan Multi Axle&nbsp; dan Selfloader</p>', 7),
(16, '16.jpg', '<p>Pengiriman Heavy Cargo dengan Multi Axle&nbsp; dan Selfloader</p>', 7),
(17, '17.jpg', '<p>Pengiriman Heavy Cargo dengan Multi Axle&nbsp; dan Selfloader</p>', 7),
(18, '18.jpg', '<p>SEAFREIGHT Via LCT( Landing Craft Tank)</p>', 6),
(19, '19.jpg', '<p>SEAFREIGHT Via LCT( Landing Craft Tank)</p>', 6),
(20, '20.jpg', '<p>Kegiatan lashing untuk menjaga keselamatan muatan</p>', 6),
(21, '21.jpg', '<p>Kegiatan lashing untuk menjaga keselamatan muatan</p>', 6),
(22, '22.jpg', NULL, 3),
(23, '23.jpg', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(4, 'Transportasi'),
(5, 'Pengiriman'),
(7, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `alamat` text,
  `telp1` varchar(255) DEFAULT NULL,
  `telp2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `domain`, `logo`, `perusahaan`, `alamat`, `telp1`, `telp2`, `email`) VALUES
(1, 'cvkpi.com', 'logo.png', 'CV.KARYA PERDANA INDONESIA LOGISTICS', 'Jl.Manukan Krajan No 31, Tandes – Surabaya', '081359681038', '081249911605', 'cvkpi.logistics@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `deskripsi`, `gambar`, `konten`, `status`) VALUES
(1, 'SEAFREIGHT', 'Kami menawarkan nilai untuk fleksibilitas, dan konsistensi dalam mengelola mata rantai pelanggan kami. Kami membangun aliansi regional dengan jalur pelayaran utama untuk menerapkan solusi yang paling hemat biaya', '1.png', '<p>Kami menawarkan nilai untuk fleksibilitas, dan konsistensi dalam mengelola mata rantai pelanggan kami. Kami membangun aliansi regional dengan jalur pelayaran utama untuk menerapkan solusi yang paling hemat biaya.</p>\r\n\r\n<p><strong>Fitur :</strong></p>\r\n\r\n<ul>\r\n	<li>Layanan berganda: beban kurang dari kontainer (LCL) dan muatan penuh kontainer (FCL), break bulk, manajemen kontrak dan perutean multi moda.</li>\r\n	<li>Fleksibel: pilihan jadwal berlayar, rute, operator dan anggaran.</li>\r\n	<li>Routing khusus: kemampuan Port to Port, Cy to Cy dan Door to Door.</li>\r\n	<li>Manajemen Pelabuhan</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 1),
(2, 'TRANSPORTASI DARAT (FCL)', 'Melayani layanan transportasi dengan 20 atau 40 truk kontainer, Multi Axle, Lowbed, Troton dan Fuso. Kami menawarkan layanan truk untuk kargo curah, proyek, bahan baku dan kargo umum anda serta distribusi domestik', '2.jpg', '<p>Melayani layanan transportasi dengan 20 atau 40 truk kontainer, Multi Axle, Lowbed, Troton dan Fuso. Kami menawarkan layanan truk untuk kargo curah, proyek, bahan baku dan kargo umum anda serta distribusi domestik.</p>', 1),
(3, 'LCL TRANSPORTASI DARAT', 'Mengoperasikan truk wing box & CDD untuk mendukung kebutuhan transportasi LCL anda. Layanan transportasi darat kami mencakup wilayah Sumatera, Jawa, Kalimantan, Bali, Maluku, Sulawesi dan Nusa Tenggara Barat maupun Timur.', '3.jpg', '<p>Mengoperasikan truk wing box &amp; CDD untuk mendukung kebutuhan transportasi LCL anda. Layanan transportasi darat kami mencakup wilayah Sumatera, Jawa, Kalimantan, Bali, Maluku, Sulawesi dan Nusa Tenggara Barat maupun Timur.</p>', 1),
(5, 'GUDANG', 'Menyediakan pergudangan untuk menyimpan barang Anda saat mengisi, memasukkan kembali, perlakuan khusus lainnya untuk kargo kiriman Anda. Mengoperasikan sistem pergudangan dan distribusi yang efisien dan hemat biaya.', '5.jpg', '<p>Menyediakan pergudangan untuk menyimpan barang Anda saat mengisi, memasukkan kembali, perlakuan khusus lainnya untuk kargo kiriman Anda. Mengoperasikan sistem pergudangan dan distribusi yang efisien dan hemat biaya.<br />\r\n&nbsp;</p>', 1),
(6, 'SEAFREIGHT VIA LCT', 'Kapal LCT ( landing craft tank ) adalah salah satu jenis kapal yang berfungsi untuk angkutan di laut dan perairan yang dangkal', '6.jpg', '<p>Kapal LCT ( landing craft tank ) adalah salah satu jenis kapal yang berfungsi untuk angkutan di laut dan perairan yang dangkal. Kapal LCT ( landing craft tank ) biasanya digunakan untuk pengiriman antar pulau atau antar lokasi dengan jenis muatan (cargo) berupa barang berukuran besar dan alat berat</p>', 1),
(7, 'MULTI AXLE DAN SELFLOADER', 'KPI Logistics menyewakan kendaraan multi axle trailer hingga berbagai kapasitas. Melayani pengangkutan dalam dan luar kota.', '7.jpg', '<p><strong>KPI Logistics</strong>&nbsp;menyewakan kendaraan multi axle trailer hingga berbagai kapasitas. Melayani pengangkutan dalam dan luar kota.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Untuk pemesanan alat dan informasi lebih lanjut dapat menghubungi kami :</p>\r\n\r\n<p>Telepon 1:&nbsp;<a href=\"callto:081359681038\">081359681038</a></p>\r\n\r\n<p>Telepon 2:&nbsp;<a href=\"callto:081249911605\">081249911605</a></p>\r\n\r\n<p>Email:&nbsp;<a href=\"mailto:\">cvkpi.logistics@gmail.com</a></p>\r\n\r\n<p>Kantor : Jl.Manukan Krajan No 31, Tandes &ndash; Surabaya</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `nama`, `gambar`) VALUES
(2, 'PT. Angkasa Pura Logistics', '2.png'),
(3, 'PT. Panalpina Nusajaya Transport', '3.png'),
(4, 'PT. GAP Logistics', '4.png'),
(5, 'PT. Lintas Nusa Logistik', '5.png'),
(6, 'PT. Aditya Transport', '6.png'),
(7, 'PT. Sarana Metal Indah', '7.png'),
(8, 'PT. PLN', '8.png'),
(9, 'PT. Varuna Tirta Prakarsya', '9.png'),
(10, 'PT. Wira Mas Indobangun', '10.png');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `online` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `date`, `hits`, `online`) VALUES
('::1', '2019-07-26', 99, NULL),
('10.2.18.204', '2019-07-26', 3, NULL),
('::1', '2019-07-25', 1, NULL),
('::1', '2019-07-24', 1, NULL),
('::1', '2019-07-23', 2, NULL),
('10.2.18.204', '2019-07-23', 2, NULL),
('::1', '2019-08-06', 129, NULL),
('::1', '2019-08-13', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `header` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `key`, `header`, `isi`) VALUES
(1, 'Visi', 'Visi Kami', '<p>Menjadi pemain utama di tingkat nasional dan internasional Industri jasa logistik</p>'),
(2, 'Misi', 'Misi Kami', '<ul>\r\n	<li>Untuk Memberikan solusi logistik yang terintegrasi dan profesional&nbsp;</li>\r\n	<li>Menawarkan layanan transportasi kargo dan laut / udara yang cepat, akuran dan andal di seluruh dunia</li>\r\n	<li>Untuk membantu pelanggan mendapatkan proses kepabeanan dan dokumen yang cepat dan aman&nbsp;</li>\r\n</ul>'),
(3, 'About', 'Profil', '<p>Didirikan pada tahun 2017, <strong>CV. KARYA PERDANA INDONESIA</strong> ditujukan untuk menyediakan pelanggan dengan solusi logistik terintegrasi yang sepenuhnya ditingkatkan dengan layanan serta nilai tambah yang komprehensif.</p>\r\n\r\n<p><strong>CV. KPI </strong>terutama berkaitan dengan segala jenis Bisnis angkutan laut dan agen pengiriman. Kami menawarkan layanan seperti FCL atau pengiriman LCL, Break kargo curah, Konsolidasi Cargo dan pengaturan Cargo.</p>\r\n\r\n<p>Untuk menyediakan pelanggan kami dengan penanganan dan laporan dokumen yang akurat, kami menerapkan sistem pelaporan yang terorganisir untuk semua proses dokumentasi yang terdiri dari: laporan kemajuan harian, pembaruan status non-kantor, pelacakan proaktif / keterlibatan status pembaruan kontainer, jadwal truk &amp; kedatangan/keberangkatan kapal serta laporan pengiriman bulanan dan data jumlah.</p>\r\n\r\n<p><strong>Logistik &amp; Rantai Pasokan Terpadu </strong></p>\r\n\r\n<p>Sebagai bukti komitmen kami terhadap keunggulan, <strong>KPI </strong>memiliki catatan keberhasilan yang luas dalam mengelola berbagai proyek logistik berskala besar di berbagai segmen industri, Beberapa jenis Penambangan dan semen. Kami juga memiliki keahlian untuk mengatasi tantangan geografis dan skenario operasi yang kompleks, memberi kami kemampuan untuk mengelola operasi logistik di lingkungan apa pun dengan batasan apa pun. Kami memiliki pengalaman luas dalam pengiriman pengiriman ke daerah-daerah terpencil yang tidak memiliki pengiriman regular.</p>'),
(4, 'Aktivitas', 'Services Activity', '<p><strong>1. Kapal, LCT dan Tug and Barge:</strong></p>\r\n\r\n<p>Pengiriman proyek khusus ke setiap tujuan / lokasi di seluruh wilayah Indonesia</p>\r\n\r\n<p><br />\r\n<strong>2. Pengiriman Heavy Lift:</strong></p>\r\n\r\n<p>Dari kapal ke pelabuhan, menggunakan crane, Trailer multi-axle, Tim ahli teknis kami memiliki pengetahuan dan pengalaman untuk mengelola setiap pergerakan rumit dalam melintasi medan yang paling extrim di wilayah yang sulit dijangkau.</p>\r\n\r\n<p><br />\r\n<strong>3. Pengaturan Kargo</strong>:</p>\r\n\r\n<p>Setiap bisnis berbeda dan setiap rantai pasokan kargo unik. Tim KPI, tidak sekedar menerapan solusi standar dalam masalah. Untuk masingmasing proyek, tim ahli dari departemen logistik dan transportasi kami menganalisa cargo, Persediaan, demografi pelanggan, dan karakteristik pasar untuk menciptakan solusi logistik yang tepat&nbsp; bagi pelanggan kami.memangkas biaya dan mencegah kelebihan pasokan ngurangi biaya pengiriman: Dengan sedikit unit untuk transportasi berarti biaya transit yang lebih rendah.</p>\r\n\r\n<p><br />\r\n<strong>4. Perencanaan Lanjutan</strong>:</p>\r\n\r\n<p>Studi kelayakan, survei jalan, dan pemeriksaan ketersediaan kapal memastikan pelaksanaan yang sempurna dari awal hingga selesai.Menampung ketiga nilai layanan &quot;Cepat&quot;, &quot;Akurat&quot; &amp; &quot;Dapat Diandalkan&quot;, kami meningkatkan diri kami sebagai satu-satunya mitra pelanggan yang dapat dipercaya dalam kebutuhan logistik anda.<br />\r\n&nbsp;</p>'),
(5, 'Sejarah', 'Sejarah Kami', '<p>Didirikan pada tahun 2017, <strong>CV. KARYA PERDANA INDONESIA</strong> ditujukan untuk menyediakan pelanggan dengan solusi logistik terintegrasi yang sepenuhnya ditingkatkan dengan layanan serta nilai tambah yang komprehensif.</p>\r\n\r\n<p><strong>CV. KPI </strong>terutama berkaitan dengan segala jenis Bisnis angkutan laut dan agen pengiriman. Kami menawarkan layanan seperti FCL atau pengiriman LCL, Break kargo curah, Konsolidasi Cargo dan pengaturan Cargo.</p>\r\n\r\n<p>Untuk menyediakan pelanggan kami dengan penanganan dan laporan dokumen yang akurat, kami menerapkan sistem pelaporan yang terorganisir untuk semua proses dokumentasi yang terdiri dari: laporan kemajuan harian, pembaruan status non-kantor, pelacakan proaktif / keterlibatan status pembaruan kontainer, jadwal truk &amp; kedatangan/keberangkatan kapal serta laporan pengiriman bulanan dan data jumlah.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Harits Yulianta Pratama', 'haritsyp', '$2y$10$WKNdePmOUoXRVnPW6rpfMugfYTO3k88.R06lhKpfh91WzRZA//ul2', '00dOfuNxX3g1PyuhTfHblGeqMMSQbQ9VQ0pR6Mqv3ewQeVnbGVQ6ga9YzNrm', '2019-07-25 01:51:51', '2019-07-25 01:51:51'),
(7, 'admin', 'admin', '$2y$10$R0DHT0Y4CKDuFBi9r8.JkeM0cwUBu1n04nZ3731VWVT5hzd/qf38S', NULL, '2019-07-25 23:43:49', '2019-07-25 23:43:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
