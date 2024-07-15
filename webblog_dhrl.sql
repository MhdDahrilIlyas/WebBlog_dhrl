-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2024 pada 08.52
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webblog_dhrl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `image`, `body`, `id_user`) VALUES
(24, 'Kyrie Irving', 'kyrie-irving.jpg', '<p>Kyrie Andrew Irving, pemain basket yang kini membela Dallas Mavericks ini terkenal karena pengendalian bolanya yang keren.<br>Irving memang pemian yang punya kemampuan dribble di atas rata-rata.<br>Di luar lapangan, Kyrie juga terkenal akan kegemarannya membuat sensasi.<br>Terlihat dari tato-tatonya di tangan, serta pendapatnya mengenai bumi itu datar.<br>Tak hanya itu, rencananya yang ingin membuat liga basket baru untuk menyaingi NBA juga sempat menjadi sorotan.<br>Kyrie Irving lahir pada 23 Maret 1992.<br>Meski lahir di Australia, Irving merupakan warga negara Amerika.<br>Ia memang lahir dari keluarga pebasket yang kerap berpindah-pindah negara.<br>Saat Irving lahir, ayahnya, Drederick Irving sedang bermain di liga basket Australia, sehingga ibunya Elizabeth Irving melahirkan di sana.<br>Sejak kecil Irving memang sudah sangat mencintai olahraga basket. Itu diturunkan dari orang tuanya.<br>Saking cintanya, sewaktu kecil Irving pernah menuliskan sebuah janji di tembok rumahnya jika suatu saat nanti akan menjadi seorang pebasket terkenal.<br>Kecintaannya terhadap basket itu membuat dirinya terus mengembangkan bakat.</p>', '38'),
(25, 'Lamelo Ball', 'lamelo-ball.webp', '<p>Point guard <strong>Charlotte Hornets</strong> LaMelo Ball terpilih sebagai Rookie of The Year NBA musim 2020-2021. LaMelo mengalahkan pemain pilihan pertama di NBA Draft 2020, Anthony Edward dari Minnesota Timberwolves.</p><p>Pengumuman LaMelo sebagai Rookie of The Year NBA diungkap pada acara yang diadakan TNT pada Kamis (17/6/2021) pagi WIB. LaMelo diserahkan trofi dengan cara dikejutkan oleh rekan setimnya Miles Bridges.</p><p>LaMelo menang mutlak dalam penghargaan Rookie of The Year NBA. Putra LaVar Ball itu meraih dipilih 84 jurnalis di tempat pertama. Sedangkan Edwards hanya mendapat 15 suara di tempat pertama.<br>Setiap jurnalis yang berhak memberikan suara untuk pemenang Rookie of The Year NBA wajib memilih tiga nama yang ditempatkan di urutan pertama, kedua dan ketiga.</p><p>Pemain yang dipilih di urutan pertama mendapatkan poin tertinggi. Satu kandidat lainnya adalah point guard Sacramento Kings Tyrese Haliburton.<br>Ball yang terpilih di urutan tiga pada NBA Draft 2020 bermain sangat baik di musim pertamanya. Ball memiliki rata-rata 15,7 poin, 6,1 assists dann 5,9 rebound per pertandingan.</p><p>Sejak bulan pertama main di NBA, Ball sudah dijagokan meraih Rookie of The Year. Cedera pergelangan tangan yang membuatnya absen 21 laga sempat meredupkan peluang Ball meraih Rookie of The Year. Apalagi di saat bersamaan Edwards mengamuk bersama Timberwolves.</p>', '38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(50) NOT NULL,
  `text` text NOT NULL,
  `id_blog` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_comment`, `text`, `id_blog`, `id_user`) VALUES
(20, 'ini komen yang pertama', '24', '38'),
(21, 'ini komen kedua ', '25', '38'),
(22, 'ini komen user lain', '24', '38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`) VALUES
(38, 'dahrill', 'dahrill', 'dahrill'),
(41, 'ilyass', 'ilyass', 'ilyass');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
