-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2019 pada 06.33
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantinonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_unique` varchar(32) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `account_password` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`account_id`, `account_unique`, `account_name`, `account_password`) VALUES
(9, '', 'bagas', 'c4ca4238a0b923820dcc509a6f75849b'),
(10, '', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(11, '', 'a', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_unique` varchar(32) NOT NULL,
  `banner_file_name` varchar(100) NOT NULL,
  `banner_file_size` varchar(15) NOT NULL,
  `banner_file_type` varchar(30) NOT NULL,
  `banner_author` varchar(32) NOT NULL,
  `banner_date` date NOT NULL,
  `banner_time` time NOT NULL,
  `banner_status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `quetion` varchar(200) NOT NULL,
  `answer` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id`, `quetion`, `answer`) VALUES
(4, 'Apa itu GO-STAND?', '<p>GO-STAND merupakan aplikasi untuk memudahkan para siswa ketika ingin jajan di kantin. GO-STAND menawarkan kemudahan untuk terbebas dari antrian di kantin sekolah.</p>'),
(5, 'bagaimana GO-STAND bekerja?', '<p>yaa begitu pokoknya</p>'),
(6, 'tes', '<p>tes</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_unique` varchar(32) NOT NULL,
  `news_thumb_name` varchar(100) NOT NULL,
  `news_thumb_size` float NOT NULL,
  `news_thumb_type` varchar(20) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_slug` varchar(100) NOT NULL,
  `news_content` mediumtext NOT NULL,
  `news_date` date NOT NULL,
  `news_time` time NOT NULL,
  `news_status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`news_id`, `news_unique`, `news_thumb_name`, `news_thumb_size`, `news_thumb_type`, `news_title`, `news_slug`, `news_content`, `news_date`, `news_time`, `news_status`) VALUES
(5, 'c36fb1e70fbbe17f153e4c5d5f9e3833', 'ffd74e84493b4d91c56346b71b9a373e.jpg', 28.37, 'image/jpeg', 'testtest', 'testtest', '<p>cekcek1..2..3..</p>', '2019-05-28', '22:22:45', '1'),
(6, 'e5f16d3d43863856672edd31b371236c', '33cfe89b0b43bb8086acd4531282012b.jpg', 28.37, 'image/jpeg', 'Es Legendaris untuk Hilangkan Hausmu', 'es-legendaris-untuk-hilangkan-hausmu', '<p>Es menjadi solusi saat kita merasa haus. Selain menyegarkan es juga memiliki rasa yang manis dan beragam macamnya. Nah berikut Madhang punya 4 ulasana minuman menyegarkan yang khas dari Indonesia.</p><p><strong>1. &nbsp; &nbsp; &nbsp;Es Doger</strong></p><p>Es khas Indonesia ini sebenarnya berasal dari Cirebon. Terbuat dari susu, kelapa muda dan sirup yang dicampur dengan es yang teah diserut. Karena memakai bahan tersebut sehingga menimbulkan warna pink yang menjadi ciri khas. Kemudian untuk isian es terdapat pacar cina/sagu, tape, cincau hitam dan terkadang terdapat alpukat. Nama es doger sendiri ternyata diambil dari singkatan Dorong Gerobak, mengingat penjual menjajakannya dengan gerobak.</p><p><strong>2. &nbsp; &nbsp; &nbsp;Es Dawet</strong></p><p>Es dawet merupakan minuman yang berasal dari tanah jawa. Es dawet dan es cendol sering dianggap sama. Padahal berbeda, es cendol terbuat dari tepung hunkwe, sedangkan es dawet terbuat dari tepung beras atau tepung beras ketan. Keduanya sama-sama disajikan dengan kuah santan yang diberi sedikit sirup gula merah, tidak lupa dengan es batunya.</p><p><strong>3. &nbsp; &nbsp; &nbsp;Es Selendang Mayang</strong></p><p>Berasal dari Betawi, namun banyak ditemui di daerah lain. Hampir mirip dengan cendol, namun selendang mayang berbentuk seperi kue lapis. Sebelum dipotong kotak seperti lapis, adonan yang terbuat dari tepung hunkwe di susun tiap warna awalnya di letakkan dalam loyang lapis demi lapis. Setelah mengeras, baru dapat dipotong untuk kemudian diriram kuah sntan dan sirup gula jawa. Ciri khas dari selendang mayang ini adalah kuenya berwarna merah, putih, dan hijau.</p><p><strong>4. &nbsp; &nbsp; &nbsp;Es Oyen</strong></p><p>Sekilas es oyen mirip dengan es teler, tapi ternyata berbeda. Jika es teler berisi hanya buah-buahan saja, es oyen tidak hanya berisi buah-buahan namun juga pacar cina/sagu. Selain itu es oyen memiliki campuran sirup coco pandan, sedangkan es teler tidak memakai sirup. (DRA)</p>', '2019-06-10', '20:57:56', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `account_unique` (`account_unique`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
