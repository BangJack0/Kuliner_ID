-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2023 pada 08.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kulinerid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_nama` varchar(20) NOT NULL,
  `admin_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_nama`, `admin_password`) VALUES
('admin', 'admin'),
('nanda', '1234'),
('visteo', 'teo12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `isikomen` text NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`id`, `isikomen`, `nama`) VALUES
(1, 'Web ini bagus untuk tourist yang sedang mencari makanan-makanan yang ada di Indonesia.', 'Visteo '),
(3, 'Saya suka dengan makanan dan minuman yang diperkenalkan ini.', 'Dimastrinanda'),
(4, 'Saya suka dengan adanya link map yang disediakan, karena dapat membantu mengetahui lokasinya.', 'Pevita Pearce'),
(5, 'BAGUSSSSssss saya suka modelan web kayak gini, karena menarik dan bagus untuk orang yang datang ke web ini ', 'Elisa Tikasni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `kuliner_id` int(11) NOT NULL,
  `kuliner_judul` varchar(100) NOT NULL,
  `kuliner_isi` text NOT NULL,
  `kuliner_tanggal` date NOT NULL,
  `kuliner_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`kuliner_id`, `kuliner_judul`, `kuliner_isi`, `kuliner_tanggal`, `kuliner_gambar`) VALUES
(8, 'Mie Aceh ', 'Mie Aceh adalah masakan Mie kuning pedas khas Aceh berbahan Mie kuning tebal dengan irisan daging sapi, daging kambing atau makanan laut (udang dan cumi) disajikan dalam sup sejenis kari yang gurih dan pedas. \r\n\r\nRasa mie Aceh yang istimewa karena tekstur mie yang tebal dan kuah yang gurih serta pedas membuat rasanya tak terlupakan.\r\n\r\nAdanya irisan daging kambing, daging sapi, ataupun makanan laut membuat aroma mie semakin sedap.\r\n\r\nPecinta makanan dengan rempah-rempah wajib mencicipi mie aceh yang disajikan saat masih panas.\r\n', '2023-12-19', 'mie_aceh.jpg'),
(9, 'Rendang', 'Rendang adalah salah satu masakan tradisional Minangkabau yang menggunakan daging dan santan kelapa sebagai bahan utama dengan kandungan bumbu yang kaya akan rempah-rempah.\r\n\r\nRendang dibuat dari daging sapi yang dimasak dalam waktu lama serta dibumbui rempah-rempah dan santan.\r\n\r\nSaat ini untuk mencicipi rendang tidaklah sulit. Kamu pun bisa memasaknya sendiri di rumah menggunakan bumbu instan.', '2023-12-18', 'rendang.jpg'),
(10, 'Bika Ambon', 'Bika Ambon adalah kue pipih berwarna kuning, yang permukaannya nampak seperti pori-pori kulit manusia, dan bagian bawahnya keras, sisa dari tempaan panas di dasar loyang. Bika Ambon ini biasa tersaji dalam potongan persegi.\r\n\r\nMakanan ini terbuat dari gula, santan, serta telur. Bika ambon digemari berbagai kalangan masyarakat karena rasanya yang lezat.\r\n\r\nVarian bika ambon tidak hanya pandan saja, tetapi juga keju, cokelat, durian, dan sebagainya. Tekstur bika ambon yang lembut akan membuatmu semakin ketagihan.', '2023-12-17', 'bika-ambon_.jpg'),
(11, 'Kerak Telor', 'Kerak telor adalah makanan asli daerah Jakarta (Betawi), Kuliner khas Betawi ini dipercaya sudah dikenal dan banyak digemari sejak zaman penjajahan Belanda.\r\n\r\nSajian kerak telor akan lengkap dengan taburan bawang goreng. Sebenarnya masih ada bahan lain seperti kelapa sangrai, jahe, kencur, cabai merah, gula pasir, merica, dan garam yang membuat makanan ini bercita rasa lengkap.', '2023-12-16', 'keraktelor.png'),
(12, 'Lumpia', 'Lumpia (Loen Pia) merupakan sebuah makanan dengan perpaduan budaya Tionghoa dengan Jawa. Lumpia terbuat dari rebung sebagai isiannya dan diselimuti / digulung oleh kulit yang terbuat dari tepung, serta disajikan dengan pelengkap seperti saus khas, daun bawang, cabai, dan sebagainya.', '2023-12-15', 'lumpia.jpg'),
(13, 'Gudeg', 'Seperti yang Sobat Pesona ketahui, Yogyakarta dikenal sebagai kota gudeg. Nah, gudeg itu sendiri merupakan masakan yang berbahan utama nangka muda atau oleh warga lokal disebut gori. \r\n\r\nDalam prosesnya, potongan daging nangka ini direbus dengan gula merah dan santan dengan api kecil selama beberapa jam.\r\n\r\n', '2023-12-19', 'gudeg2.jpg'),
(14, 'Ayam Betutu', 'Betutu merupakan makanan khas Bali. Terbuat dari ayam atau bebek yang dimasak secara utuh menggunakan bumbu rempah khas Bali. Cukup banyak menu Betutu yang bisa ditemukan di Bali, khususnya Denpasar. \r\n\r\nSalah satunya, bisa dikunjungi Warung Ayam Betutu Laku di Jalan Letda Regug dekat dengan lapangan Puputan Badung.', '2023-12-12', 'ayam_betutu.jpg'),
(15, 'Wedang Jahe ', 'Wedang Jahe adalah minuman khas dari berbagai daerah di pulau Jawa. Wedang Jahe biasanya disajikan saat cuaca dingin sebab efeknya yang menghangatkan tubuh.\r\n\r\nPembuatan Wedang Jahe menggunakan bahan utama jahe dan gula merah. Anda dapat menambahkan pemanis seperti gula atau krimer kental manis.', '2023-12-20', 'wedang_jahe.jpg'),
(16, 'Es Pisang Ijo', 'Es Pisang Ijo adalah minuman tradisional khas Makassar. Minuman ini dinamakan \"Pisang Ijo\" karena warna pisangnya yang hijau, yang dihasilkan dari adonan kulit berwarna hijau.\r\n\r\nAdonan kulit yang berwarna hijau di Es Pisang Ijo diperoleh dari tepung beras, tepung kanji, santan, dan air daun suji. Es Pisang Ijo disajikan dengan bubur sumsum, sirup merah, es krim, es serut, atau susu kental manis.', '2023-12-21', 'es.jpg'),
(20, 'Wedang Jahe ', 'Sebenarnya wedang jahe ini adalah minuman tradisional yang khas berasal dari pulau Jawa berlokasi di daerah Jawa Timur dan juga Jawa Tengah. Wedang dalam bahasa jawa berarti minuman hangat, dengan demikian dapat diartikan bahwa wedang jahe adalah minuman hangat berbahan dasar jahe.', '2023-12-26', 'es2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `email`) VALUES
('nanda', 'dimastrinanda@gmail.'),
('tutel', 'toothlees@gmail.com'),
('nanda', 'dimastrinanda@gmail.'),
('tutel', 'toothlees@gmail.com'),
('Visteo ', 'visteo@gmail.com'),
('Dimastrinanda', 'Nanda12@gmail.com'),
('Elisa Tikasni', 'eliss@gmail.com'),
('Pevita Pearce', 'pevita321@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_nama`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`kuliner_id`),
  ADD KEY `kuliner_judul` (`kuliner_judul`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `kuliner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD CONSTRAINT `komen_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `user` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
