-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2022 pada 03.49
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(27, 'Brati'),
(28, 'Gabus'),
(29, 'Geyer'),
(30, 'Godong'),
(31, 'Grobokan'),
(32, 'Gubuk'),
(33, 'Karangayung'),
(34, 'Kedungjati'),
(35, 'Klambu'),
(36, 'Kradenan'),
(37, 'Ngaringan'),
(38, 'Penawangan'),
(39, 'Pulokulon'),
(40, 'Purwodadi'),
(41, 'Tanggungharjo'),
(42, 'Tawangharjo'),
(43, 'Tegowanu'),
(44, 'Toroh'),
(45, 'Wirosari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `kelurahan`, `id_kecamatan`) VALUES
(1953, 'Jangkungharjo', 27),
(1954, 'Karangsari', 27),
(1955, 'Katekan', 27),
(1956, 'Kronggen', 27),
(1957, 'Lemahputih', 27),
(1958, 'Menduran', 27),
(1959, 'Tegalsumur', 27),
(1960, 'Temon', 27),
(1961, 'Tirem	', 27),
(1962, 'Banjarejo', 28),
(1963, 'Bendoharjo', 28),
(1964, 'Gabus', 28),
(1965, 'Kalipang', 28),
(1966, 'Karangrejo', 28),
(1967, 'Keyongan', 28),
(1968, 'Nglinduk', 28),
(1969, 'Pandanharum', 28),
(1970, 'Pelem', 28),
(1971, 'Sulursari', 28),
(1972, 'Suwatu', 28),
(1973, 'Tahunan', 28),
(1974, 'Tlogotirto', 28),
(1975, 'Tunggulrejo', 28),
(1976, 'Asemrudung', 29),
(1977, 'Bangsri', 29),
(1978, 'Geyer', 29),
(1979, 'Jambangan', 29),
(1980, 'Juworo', 29),
(1981, 'Kalangbancar', 29),
(1982, 'Karang', 29),
(1983, 'Anyar', 29),
(1984, 'Ledokdawan', 29),
(1985, 'Monggot', 29),
(1986, 'Ngrandu', 29),
(1987, 'Rambat', 29),
(1988, 'Sobo', 29),
(1989, 'Suru', 29),
(1990, 'Anggaswangi', 30),
(1991, 'Bringin', 30),
(1992, 'Bugel', 30),
(1993, 'Dorolegi', 30),
(1994, 'Godong', 30),
(1995, 'Guci', 30),
(1996, 'Gundi', 30),
(1997, 'Guyangan', 30),
(1998, 'Harjowinangun', 30),
(1999, 'Jatilor', 30),
(2000, 'Karanggeneng', 30),
(2001, 'Kemloko', 30),
(2002, 'Ketangirejo', 30),
(2003, 'Ketitang', 30),
(2004, 'Klampok', 30),
(2005, 'Kopek', 30),
(2006, 'Latak', 30),
(2007, 'Manggarmas', 30),
(2008, 'Manggarwetan', 30),
(2009, 'Pahesan', 30),
(2010, 'Rajek', 30),
(2011, 'Sambung', 30),
(2012, 'Sumberagung', 30),
(2013, 'Sumurgede', 30),
(2014, 'Tinanding', 30),
(2015, 'Ungu', 30),
(2016, 'Wanutunggal', 30),
(2017, 'Werdoyo', 30),
(2018, 'Getasrejo', 31),
(2019, 'Karangrejo', 31),
(2020, 'Lebak', 31),
(2021, 'Lebengjumuk', 31),
(2022, 'Ngabenrejo', 31),
(2023, 'Putatsari', 31),
(2024, 'Rejosari', 31),
(2025, 'Sedayu', 31),
(2026, 'SumberJatipohon', 31),
(2027, 'Tanggungharjo', 31),
(2028, 'Grobogan', 32),
(2029, 'Baturagung', 32),
(2030, 'Gelapan', 32),
(2031, 'Ginggangtani', 32),
(2032, 'Gubug', 32),
(2033, 'Jatipecaron', 32),
(2034, 'Jeketro', 32),
(2035, 'Kemiri', 32),
(2036, 'Kunjeng', 32),
(2037, 'Kuwaron', 32),
(2038, 'Mlilir', 32),
(2039, 'Ngroto', 32),
(2040, 'Papanrejo', 32),
(2041, 'Penadaran', 32),
(2042, 'Pranten', 32),
(2043, 'Ringinharjo', 32),
(2044, 'Ringinkidul', 32),
(2045, 'Rowosari', 32),
(2046, 'Saban', 32),
(2047, 'Tambakan', 32),
(2048, 'Tlogomulyo', 32),
(2049, 'Cekel', 33),
(2050, 'Dempel', 33),
(2051, 'Gunungtumpeng', 33),
(2052, 'Jetis', 33),
(2053, 'Karanganyar', 33),
(2054, 'Karangsono', 33),
(2055, 'Ketro', 33),
(2056, 'Mangin', 33),
(2057, 'Mojoagung', 33),
(2058, 'Nampu', 33),
(2059, 'Pangkalan', 33),
(2060, 'Parakan', 33),
(2061, 'Putatnganten', 33),
(2062, 'Rawoh', 33),
(2063, 'Sendangharjo', 33),
(2064, 'Sumberejosari', 33),
(2065, 'Telawah', 33),
(2066, 'Temurejo', 33),
(2067, 'Termas', 33),
(2068, 'Deras', 34),
(2069, 'Jumo', 34),
(2070, 'Kalimaro', 34),
(2071, 'Karanglangu', 34),
(2072, 'Kedungjati', 34),
(2073, 'Kentengsari', 34),
(2074, 'Klitikan', 34),
(2075, 'Ngombak', 34),
(2076, 'Padas', 34),
(2077, 'Panimbo', 34),
(2078, 'Prigi', 34),
(2079, 'Wates', 34),
(2080, 'Jenengan', 35),
(2081, 'Kandangrejo', 35),
(2082, 'Klambu', 35),
(2083, 'Menawan', 35),
(2084, 'Penganten', 35),
(2085, 'Selojari', 35),
(2086, 'Taruman', 35),
(2087, 'Terkesi', 35),
(2088, 'Wandankemiri', 35),
(2089, 'Bago', 36),
(2090, 'Banjardowo', 36),
(2091, 'Banjarsari', 36),
(2092, 'Crewek', 36),
(2093, 'Grabagan', 36),
(2094, 'Kalisari', 36),
(2095, 'Kradenan', 36),
(2096, 'Kuwu', 36),
(2097, 'Pakis', 36),
(2098, 'Rejosari', 36),
(2099, 'Sambongbangi', 36),
(2100, 'Sengonwetan', 36),
(2101, 'Simo', 36),
(2102, 'Tanjungsari', 36),
(2103, 'Bandungsari', 37),
(2104, 'Belor', 37),
(2105, 'Kalangdosari', 37),
(2106, 'Kalanglundo', 37),
(2107, 'Ngaraparap', 37),
(2108, 'Ngaringan', 37),
(2109, 'Pendem', 37),
(2110, 'Sarirejo', 37),
(2111, 'Sendangrejo', 37),
(2112, 'Sumberagung', 37),
(2113, 'Tanjungharjo', 37),
(2114, 'Truwolu', 37),
(2115, 'Bologarang', 38),
(2116, 'Curut', 38),
(2117, 'Jipang', 38),
(2118, 'Karangawader', 38),
(2119, 'Karangpaing', 38),
(2120, 'Kluwan', 38),
(2121, 'Kramat', 38),
(2122, 'Lajer', 38),
(2123, 'Leyangan', 38),
(2124, 'Ngeluk', 38),
(2125, 'Penawangan', 38),
(2126, 'Pengkol', 38),
(2127, 'Pulutan', 38),
(2128, 'Sedadi', 38),
(2129, 'Toko', 38),
(2130, 'Tunggu', 38),
(2131, 'WatuPawon', 38),
(2132, 'Wedoro', 38),
(2133, 'Winong', 38),
(2134, 'Wolo', 38),
(2135, 'Jambon', 39),
(2136, 'Jatiharjo', 39),
(2137, 'Jetaksari', 39),
(2138, 'Karangharjo', 39),
(2139, 'Mangunrejo', 39),
(2140, 'Mlowokarangtalun', 39),
(2141, 'Panunggalan', 39),
(2142, 'Pojok', 39),
(2143, 'Pulokulon', 39),
(2144, 'Randurejo', 39),
(2145, 'Sembungharjo', 39),
(2146, 'Sidorejo', 39),
(2147, 'Tuko', 39),
(2148, 'Candisari', 40),
(2149, 'Cingkrong', 40),
(2150, 'Genuksuran', 40),
(2151, 'Kandangan', 40),
(2152, 'Karanganyar', 40),
(2153, 'Kedungrejo', 40),
(2154, 'Nambuhan', 40),
(2155, 'Ngembak', 40),
(2156, 'Nglobar', 40),
(2157, 'Ngraji', 40),
(2158, 'Pulorejo', 40),
(2159, 'Putat', 40),
(2160, 'Warukaranganyar', 40),
(2161, 'Danyang', 40),
(2162, 'Kalongan', 40),
(2163, 'Kuripan', 40),
(2164, 'Purwodadi', 40),
(2165, 'Brabo', 41),
(2166, 'Kaliwenang', 41),
(2167, 'Kapung', 41),
(2168, 'Mrisi', 41),
(2169, 'Ngambakrejo', 41),
(2170, 'Padang', 41),
(2171, 'Ringinpitu', 41),
(2172, 'Sugihmanik', 41),
(2173, 'Tanggungharjo', 41),
(2174, 'Godan', 42),
(2175, 'Jono', 42),
(2176, 'Kemaduhbatur', 42),
(2177, 'Mayahan', 42),
(2178, 'Plosorejo', 42),
(2179, 'Pojok', 42),
(2180, 'Pulongrambe', 42),
(2181, 'Selo', 42),
(2182, 'Tarub', 42),
(2183, 'Tawangharjo', 42),
(2184, 'Cangkring', 43),
(2185, 'Curug', 43),
(2186, 'Gaji', 43),
(2187, 'Gebangan', 43),
(2188, 'Karangpasar', 43),
(2189, 'Kebonagung', 43),
(2190, 'Kedungwungu', 43),
(2191, 'Kejawan', 43),
(2192, 'Mangunsari', 43),
(2193, 'Medani', 43),
(2194, 'Pepe', 43),
(2195, 'Sukorejo', 43),
(2196, 'Tajemsari', 43),
(2197, 'Tanggirejo', 43),
(2198, 'TegowanuKulon', 43),
(2199, 'TegowanuWetan', 43),
(2200, 'Tlogorejo', 43),
(2201, 'Tunjungharjo', 43),
(2202, 'Bandungharjo', 44),
(2203, 'Boloh', 44),
(2204, 'Depok', 44),
(2205, 'Dimoro', 44),
(2206, 'Genengadal', 44),
(2207, 'Genengsari', 44),
(2208, 'Katong', 44),
(2209, 'Kenteng', 44),
(2210, 'Krangganharjo', 44),
(2211, 'Ngrandah', 44),
(2212, 'Pilangpayung', 44),
(2213, 'Plosoharjo', 44),
(2214, 'Sindurejo', 44),
(2215, 'Sugihan', 44),
(2216, 'Tambirejo', 44),
(2217, 'Tunggak', 44),
(2218, 'Dapurno', 45),
(2219, 'Dokoro', 45),
(2220, 'Gedangan', 45),
(2221, 'Kalirejo', 45),
(2222, 'Karangasem', 45),
(2223, 'Kropak', 45),
(2224, 'Mojorebo', 45),
(2225, 'Sambirejo', 45),
(2226, 'Tambahrejo', 45),
(2227, 'Tambakselo', 45),
(2228, 'Tanjungrejo', 45),
(2229, 'Tegalrejo', 45),
(2230, 'Kunden', 45),
(2231, 'Wirosari', 45);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `isi_log` text NOT NULL,
  `tgl_log` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `isi_log`, `tgl_log`, `id_user`) VALUES
(16, 'Tanggapan sedang dalam proses berhasil ditambahkan', '2022-10-10 14:11:44', 1),
(17, 'Tanggapan otw berhasil ditambahkan', '2022-10-10 14:12:30', 1),
(18, 'Tanggapan selesai boss berhasil ditambahkan', '2022-10-10 14:13:17', 1),
(19, 'Tanggapan dah lah berhasil ditambahkan', '2022-10-10 14:14:01', 1),
(20, 'Masyarakat azzaura56 berhasil dihapus', '2022-10-10 17:09:31', 1),
(21, 'Masyarakat ableza24 berhasil dihapus', '2022-10-10 17:09:34', 1),
(22, 'Masyarakat andre123 berhasil dihapus', '2022-10-10 17:09:38', 1),
(23, 'Masyarakat annisa98 berhasil dihapus', '2022-10-10 17:09:42', 1),
(24, 'Masyarakat irgi5 berhasil dihapus', '2022-10-10 17:09:47', 1),
(25, 'Pengaduan jalan bocor berhasil dihapus', '2022-10-10 17:12:01', 1),
(26, 'Kecamatan Ciputat berhasil dihapus', '2022-10-10 17:12:10', 1),
(27, 'Kecamatan Ciputat Timur berhasil dihapus', '2022-10-10 17:12:14', 1),
(28, 'Kecamatan Pamulang berhasil dihapus', '2022-10-10 17:12:18', 1),
(29, 'Kecamatan Pondok Aren berhasil dihapus', '2022-10-10 17:12:22', 1),
(30, 'Kecamatan Serpong berhasil dihapus', '2022-10-10 17:12:25', 1),
(31, 'Kecamatan Serpong Utara berhasil dihapus', '2022-10-10 17:12:31', 1),
(32, 'Kecamatan Setu berhasil dihapus', '2022-10-10 17:12:34', 1),
(33, 'Kecamatan Banyumanik berhasil ditambahkan', '2022-10-10 17:12:51', 1),
(34, 'Kecamatan Candi Sari berhasil ditambahkan', '2022-10-10 17:13:03', 1),
(35, 'Kecamatan Candisari berhasil diubah', '2022-10-10 17:13:15', 1),
(36, 'Kecamatan Gajah Mungkur berhasil ditambahkan', '2022-10-10 17:13:26', 1),
(37, 'Kecamatan Gayamsari berhasil ditambahkan', '2022-10-10 17:13:52', 1),
(38, 'Kecamatan Genuk berhasil ditambahkan', '2022-10-10 17:14:02', 1),
(39, 'Kecamatan Gunug Pati berhasil ditambahkan', '2022-10-10 17:14:11', 1),
(40, 'Kecamatan Gunung Pati berhasil diubah', '2022-10-10 17:14:22', 1),
(41, 'Kecamatan Mijen berhasil ditambahkan', '2022-10-10 17:14:36', 1),
(42, 'Kecamatan Ngaliyan berhasil ditambahkan', '2022-10-10 17:14:45', 1),
(43, 'Kecamatan Pedurungan berhasil ditambahkan', '2022-10-10 17:15:13', 1),
(44, 'Kecamatan Semarang Barat berhasil ditambahkan', '2022-10-10 17:15:25', 1),
(45, 'Kecamatan Semarang Selatan berhasil ditambahkan', '2022-10-10 17:15:47', 1),
(46, 'Kecamatan Semarang Selatan berhasil ditambahkan', '2022-10-10 17:15:47', 1),
(47, 'Kecamatan Semarang Tengah berhasil ditambahkan', '2022-10-10 17:15:59', 1),
(48, 'Kecamatan Semarang Timur berhasil ditambahkan', '2022-10-10 17:16:17', 1),
(49, 'Kecamatan Semarang Utara berhasil ditambahkan', '2022-10-10 17:16:26', 1),
(50, 'Kecamatan Semarang Selatan berhasil dihapus', '2022-10-10 17:17:02', 1),
(51, 'Kecamatan Tembalang Tugu berhasil ditambahkan', '2022-10-10 17:17:21', 1),
(52, 'Kecamatan Tugu berhasil ditambahkan', '2022-10-10 17:17:43', 1),
(53, 'Kecamatan Tembalang berhasil diubah', '2022-10-10 17:17:54', 1),
(54, 'Kelurahan Ngesrep berhasil ditambahkan', '2022-10-10 17:18:34', 1),
(55, 'Kelurahan Tinjomoyo berhasil ditambahkan', '2022-10-10 17:20:21', 1),
(56, 'Kelurahan Srondol Kulon berhasil ditambahkan', '2022-10-10 17:20:37', 1),
(57, 'Kelurahan Srondol Wetan berhasil ditambahkan', '2022-10-10 17:20:49', 1),
(58, 'Kelurahan Banyumanik\' berhasil ditambahkan', '2022-10-10 17:21:54', 1),
(59, 'Kelurahan Banyumanik berhasil diubah', '2022-10-10 17:22:01', 1),
(60, 'Kelurahan Pudak Payung berhasil ditambahkan', '2022-10-10 17:22:11', 1),
(61, 'Kelurahan Pudakpayung berhasil diubah', '2022-10-10 17:22:24', 1),
(62, 'Kelurahan Gedawang berhasil ditambahkan', '2022-10-10 17:22:37', 1),
(63, 'Kelurahan Jabungan berhasil ditambahkan', '2022-10-10 17:22:51', 1),
(64, 'Kelurahan Padangsari berhasil ditambahkan', '2022-10-10 17:23:07', 1),
(65, 'Kelurahan Padalangan berhasil ditambahkan', '2022-10-10 17:23:15', 1),
(66, 'Kelurahan Sumurboto berhasil ditambahkan', '2022-10-10 17:23:29', 1),
(67, 'Kelurahan Wonotingal berhasil ditambahkan', '2022-10-10 17:24:06', 1),
(68, 'Kelurahan Kaliwiru berhasil ditambahkan', '2022-10-10 17:24:24', 1),
(69, 'Kelurahan Jatingaleh berhasil ditambahkan', '2022-10-10 17:24:49', 1),
(70, 'Kelurahan Karanganyar Gunung berhasil ditambahkan', '2022-10-10 17:25:06', 1),
(71, 'Kelurahan Njomblang berhasil ditambahkan', '2022-10-10 17:25:21', 1),
(72, 'Kelurahan Candi berhasil ditambahkan', '2022-10-10 17:25:31', 1),
(73, 'Kelurahan Candi berhasil diubah', '2022-10-10 17:25:40', 1),
(74, 'Kelurahan Tegalsari berhasil ditambahkan', '2022-10-10 17:25:58', 1),
(75, 'Kelurahan Jomblang berhasil diubah', '2022-10-10 17:26:58', 1),
(76, 'Tanggapan baik akan segera kami proses berhasil ditambahkan', '2022-10-10 19:17:35', 1),
(77, 'Tanggapan baik akan segera kami proses berhasil diubah', '2022-10-10 19:18:45', 1),
(78, 'Tanggapan oke berhasil ditambahkan', '2022-10-10 19:19:54', 1),
(79, 'Tanggapan proses berhasil ditambahkan', '2022-10-10 19:22:09', 1),
(80, 'Kecamatan Brati berhasil ditambahkan', '2022-10-14 02:12:25', 1),
(81, 'Kecamatan Gabus berhasil ditambahkan', '2022-10-14 02:12:39', 1),
(82, 'Kecamatan Geyer berhasil ditambahkan', '2022-10-14 02:12:48', 1),
(83, 'Kecamatan Godong berhasil ditambahkan', '2022-10-14 02:13:01', 1),
(84, 'Kecamatan Grobokan berhasil ditambahkan', '2022-10-14 02:13:09', 1),
(85, 'Kecamatan Gubuk berhasil ditambahkan', '2022-10-14 02:13:24', 1),
(86, 'Kecamatan Karangayung berhasil ditambahkan', '2022-10-14 02:13:39', 1),
(87, 'Kecamatan Kedungjati berhasil ditambahkan', '2022-10-14 02:13:52', 1),
(88, 'Kecamatan Klambu berhasil ditambahkan', '2022-10-14 02:14:00', 1),
(89, 'Kecamatan Kradenan berhasil ditambahkan', '2022-10-14 02:14:18', 1),
(90, 'Kecamatan Ngaringan berhasil ditambahkan', '2022-10-14 02:14:29', 1),
(91, 'Kecamatan Penawangan berhasil ditambahkan', '2022-10-14 02:14:43', 1),
(92, 'Kecamatan Pulokulon berhasil ditambahkan', '2022-10-14 02:14:54', 1),
(93, 'Kecamatan Purwodadi berhasil ditambahkan', '2022-10-14 02:15:06', 1),
(94, 'Kecamatan Tanggungharjo berhasil ditambahkan', '2022-10-14 02:15:17', 1),
(95, 'Kecamatan Tawangharjo berhasil ditambahkan', '2022-10-14 02:15:31', 1),
(96, 'Kecamatan Tegowanu berhasil ditambahkan', '2022-10-14 02:15:41', 1),
(97, 'Kecamatan Toroh berhasil ditambahkan', '2022-10-14 02:15:52', 1),
(98, 'Kecamatan Wirosari berhasil ditambahkan', '2022-10-14 02:16:01', 1),
(99, 'Kelurahan Jangkungharjo berhasil ditambahkan', '2022-10-14 02:18:06', 1),
(100, 'Kelurahan Karangsari berhasil ditambahkan', '2022-10-14 02:19:12', 1),
(101, 'Tanggapan oke segera kami proses berhasil ditambahkan', '2022-10-14 08:43:24', 1),
(102, 'Tanggapan sedang dalam pengerjaan berhasil ditambahkan', '2022-10-14 08:43:53', 1),
(103, 'Tanggapan sedang dalam pengerjaan berhasil ditambahkan', '2022-10-14 08:44:03', 1),
(104, 'Tanggapan selesai bos berhasil ditambahkan', '2022-10-14 08:45:17', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_masyarakat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id_masyarakat`, `nama`, `username`, `password`, `no_telepon`, `NIK`, `alamat`) VALUES
(6, 'Blegug Cakranegara', 'rara', '$2y$10$Uk4KQleTdFrpziirqprotOWAljofxFOlHlbLmrV0SKV4o2n6sNxae', '085624582247', 'semarang'),
(7, 'Arif Maulana', 'Arif', '$2y$10$HgHiM3UuJ2LK4jWXVmqqAOYTEgxokMINd9oXvlVFda1w33tBpPbfm', '0846249851566', 'testing aja pak'),
(8, 'Ferdi', 'ferdi', '$2y$10$/.mB52G8/f4.sOdIt6snruSz6zq0XynGVOzv.i77b1AkMKGaV0DKa', '08542658745158', 'Ngaliyan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `isi_laporan` text NOT NULL,
  `tgl_pengaduan` datetime NOT NULL,
  `foto` varchar(500) DEFAULT 'default.png',
  `status_pengaduan` enum('belum_ditanggapi','proses','valid','pengerjaan','selesai','tidak_valid') NOT NULL DEFAULT 'belum_ditanggapi',
  `id_masyarakat` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `isi_laporan`, `tgl_pengaduan`, `foto`, `status_pengaduan`, `id_masyarakat`, `id_kelurahan`) VALUES
(10, 'pak ini ada jalan berlubang kapan ya dibenerin', '2022-10-14 08:42:55', 'ss_bukti.png', 'selesai', 8, 2039);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `saran` text NOT NULL,
  `tgl_saran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `isi_tanggapan` text NOT NULL,
  `tgl_tanggapan` datetime NOT NULL,
  `status_tanggapan` enum('proses','valid','pengerjaan','selesai','tidak_valid') NOT NULL,
  `foto_tanggapan` varchar(500) NOT NULL DEFAULT 'default.png',
  `id_pengaduan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `isi_tanggapan`, `tgl_tanggapan`, `status_tanggapan`, `foto_tanggapan`, `id_pengaduan`, `id_user`) VALUES
(25, 'selesai bos', '2022-10-14 08:45:17', 'selesai', 'default.png', 10, 1),
(24, 'sedang dalam pengerjaan', '2022-10-14 08:44:03', 'pengerjaan', 'Desain_Plakat1.png', 10, 1),
(23, 'sedang dalam pengerjaan', '2022-10-14 08:43:53', 'valid', 'Desain_Plakat.png', 10, 1),
(22, 'oke segera kami proses', '2022-10-14 08:43:24', 'proses', 'Logo_Akta_Hukum_Bundar.png', 10, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `jabatan` enum('administrator','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `no_telepon`, `jabatan`) VALUES
(1, 'Administrator', 'admin', '$2y$10$L201Eud0B8zkRfT9wOctFeK1LSJWFxwDV8He41JDk4ggRLUb9aIC6', '08123456789', 'administrator'),
(2, 'Andri Firman Saputra', 'andri123', '$2y$10$NbEgBbEr.Di9DwIo/OoXZOefgH7v/zQNxdLPleaJWZTQ7kKQbOCEa', '087808675313', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `id_masyarakat` (`id_masyarakat`),
  ADD KEY `id_kelurahan` (`id_kelurahan`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pengaduan` (`id_pengaduan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2232;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
