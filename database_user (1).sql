-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2021 pada 15.21
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kelas 10'),
(2, 'Kelas 11'),
(3, 'Kelas 12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(5) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `isi_materi` text NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `gambar_materi` varchar(150) NOT NULL,
  `tanggal_materi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `isi_materi`, `id_kategori`, `gambar_materi`, `tanggal_materi`) VALUES
(1, 'Keanekaragaman Hayati', 'Kamu tahu nggak sih, apa yang menyebabkan flora dan fauna di setiap negara itu berbeda-beda? Jadi, persebaran berbagai macam flora dan fauna di dunia itu dipengaruhi oleh beberapa faktor nih, di antaranya iklim, vegetasi, interaksi dengan organisme lain, dan barier fisik.\r\n\r\nPersebaran Flora di Dunia\r\nPersebaran flora di dunia dapat dilihat dari keberadaan biomanya. Hayo, ada yang tahu, apa itu bioma? Bioma adalah suatu wilayah yang memiliki kondisi lingkungan dan makhluk hidup dengan ciri-ciri yang hampir sama (mirip). Nah, tentunya, bioma yang terbentuk di suatu wilayah pasti akan berbeda dengan wilayah yang lain. Perbedaan ini dipengaruhi oleh beberapa faktor, di antaranya iklim, suhu udara, dan curah hujan.\r\n\r\nMisalnya saja nih, di wilayah padang gurun, suhu udaranya sangat tinggi, curah hujannya juga sangat rendah. Akibatnya, nggak semua jenis tumbuhan bisa hidup di sana. Nah, salah satu tumbuhan khas yang hidup di wilayah padang gurun adalah kaktus. Hal ini tentu berbeda dengan wilayah hutan hujan tropis yang memiliki curah hujan tinggi. Jenis tumbuhan yang ada di wilayah tersebut pun akan jauh lebih beragam.', 1, '1.jpg', '2021-06-15 09:56:27'),
(2, 'Struktur - Struktur Sel', 'Sel itu terdiri dari beberapa bagian, dan bagian-bagian sel inilah yang dinamakan dengan struktur sel. Struktur sel ada membran sel, dinding sel, dan protoplasma. Di protoplasma terbagi lagi menjadi 3 bagian, yaitu nukleus, sitoplasma, dan sitoskeleton.\r\n\r\nMembran Sel atau Membran Plasma\r\nKebanyakan makhluk hidup kayak manusia, hewan, tumbuhan, jamur, dan alga punya membran sel. Nah, bakteri dan arkea itu termasuk makhluk hidup. Tapi materi inti dari bakteri dan arkea itu nggak punya membran makanya disebut sel prokariotik. \r\n\r\nMembran sel bisa dianalogikan sebagai kantong plastik. Kantong plastik itu kan bisa membungkus semua barang belanjaan kamu, nah sama halnya dengan membran. Membran sel adalah lapisan terluar yang membungkus dan menjaga komponen sel di dalamnya. Lapisan membran sel disusun dari senyawa-senyawa kimia. Mulai dari lipid (fosfolipid), protein, sampai karbohidrat. ', 2, '2.jpg', '2021-06-15 09:56:33'),
(3, 'Monohibrid dan Dihibrid', 'Pada artikel Biologi Kelas XII kali ini, kamu akan mempelajari tentang berbagai macam pola dalam pewarisan sifat, di antaranya pautan gen, pindah silang, gagal berpisah, dan gen letal.\r\n\r\n--\r\n\r\n\r\nPernah nggak sih kamu bertanya-tanya, kenapa ya bentuk hidungmu bisa mirip dengan bentuk hidung ayahmu. Atau, kok bisa sih dalam satu keluarga, hanya kamu yang memiliki postur tubuh yang mirip dengan ibumu. Hmm, kamu tahu nggak nih kalau ternyata, semua itu ada kaitannya lho dengan materi pewarisan sifat yang sudah kita pelajari pada pembahasan sebelumnya. Hayo, siapa yang masih ingat?\r\n\r\nPerlu kamu ketahui, setiap gen yang ada di dalam tubuh kita membawa materi genetik yang diwariskan dari induk kepada keturunannya. Nah, hal inilah yang menyebabkan kenapa kita bisa memiliki ciri atau sifat yang mirip bahkan sama dengan orang tua kita. Pewarisan sifat dari orang tua kepada anak-anaknya ini disebut dengan istilah hereditas. Pada proses terjadinya pewarisan sifat, terdapat bentuk-bentuk tertentu atau pola-pola dalam mewariskannya.', 3, '3.jpg', '2021-06-15 09:56:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'adel123', '$2y$10$JE0DCYqcv/WGYQguxk6VreTBFdwEPS//RM1yD2/lXr7sPtF4DzHEq', 'Adelia Arinda'),
(2, 'nadia', '$2y$10$Grhca/MRzch8BjXBGSmliOzKFyxZQr4BdUEjtr8lWYHTkIGooYRYK', 'Nadia Iradatul');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
