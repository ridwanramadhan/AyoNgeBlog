-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 08:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikumblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `penulis` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `tanggal`, `penulis`) VALUES
(6, 'Bahasa Pemrograman yang paling ditakuti, no 2 bikin kamu tercengang', '<h3>Python</h3>\r\n<p>Python adalah bahasa pemrograman interpretatif multiguna dengan filosofi perancangan yang berfokus pada tingkat keterbacaan kode. Python diklaim sebagai bahasa yang menggabungkan kapabilitas, kemampuan, dengan sintaksis kode yang sangat jelas, dan dilengkapi dengan fungsionalitas pustaka standar yang besar serta komprehensif. Python juga didukung oleh komunitas yang besar.</p>\r\n<h3>Java</h3>\r\n<p>Java adalah bahasa pemrograman yang dapat dijalankan di berbagai komputer termasuk telepon genggam. Bahasa ini awalnya dibuat oleh James Gosling saat masih bergabung di Sun Microsystems saat ini merupakan bagian dari Oracle dan dirilis tahun 1995</p>\r\n<h3>C</h3>\r\n<p>Bahasa pemrograman C merupakan salah satu bahasa pemrograman komputer. Dibuat pada tahun 1972 oleh Dennis Ritchie untuk Sistem Operasi Unix di Bell Telephone Laboratories. Meskipun C dibuat untuk memprogram sistem dan jaringan komputer namun bahasa ini juga sering digunakan dalam mengembangkan software aplikasi.</p>', '2019-10-28 10:08:01', 'ridwan'),
(7, 'Framework PHP terbaik di tahun 2019, nomor 3 bikin kamu sakit kepala', '<h3>CodeIgniter</h3>\r\n<p>CodeIgniter merupakan aplikasi sumber terbuka yang berupa kerangka kerja PHP dengan model MVC untuk membangun website dinamis dengan menggunakan PHP. CodeIgniter memudahkan pengembang web untuk membuat aplikasi web dengan cepat mudah dibandingkan dengan membuatnya dari awal.</p>\r\n<h3>Laravel</h3>\r\n<p>Laravel adalah kerangka kerja aplikasi web berbasis PHP yang open source, menggunakan konsep modelâ€“viewâ€“controller. Laravel berada dibawah lisensi MIT, dengan menggunakan GitHub sebagai tempat berbagi kode.</p>', '2019-10-28 10:17:03', 'ridwan'),
(8, '8 Cara Menjadi Programmer', '<h3>1. Bulatkan Tekad Ingin Menjadi Programmer</h3>\r\n<p>Saya rasa jika ingin memulai sesuatu hal, tekad yang bulat adalah paling pertama. Tanyakan lagi ke diri kita apakah  akan serius ingin menggeluti dunia programming atau hanya ikut-ikutan arus (tren) saat ini saja.</p>\r\n<h3>2. Mengerti dan Paham Istilah-istilah Dunia Programming</h3>\r\n<p>Langkah selanjutnya setelah kamu benar-benar sudah berniat untuk masuk ke dunia programming adalah mempelajari istilah-istilah programming.</p>\r\n<h3>3. Pilih Salah Satu Bahasa Pemrograman</h3>\r\n<p>Istilah-istilah programming biasanya akan mudah dipahami saat kita sudah mulai belajar menulis kode-kode dasar program. Sebelum mulai menulis kode-kode program kita harus memilih dulu bahasa pemrograman apa yang akan digunakan.</p>\r\n<h3>4. Saatnya Coding</h3>\r\n<p>Jika sudah memilih salah satu bahasa pemrograman dan ingin fokus menjadi programmer web, mobile, atau desktop maka langkah selanjutnya adalah mempelajari bahasa pemrograman tersebut dari dasar.</p>\r\n<h3>5. Membuat Program Aplikasi Sederhana</h3>\r\n<p>Dasar-dasar pemrograman yang sudah dipelajari bahkan dikuasai tidak berarti apa-apa jika kita tidak mempraktikannya dengan cara membuat program-program sederhana.</p>\r\n<h3>6. Gabung Forum atau Grup Pemrograman</h3>\r\n<p>Belajar apapun tidak akan lurus-lurus aja ya pastinya. Begitu juga saat belajar pemrograman, kode-kode yang kita tulis untuk mengembangkan aplikasi akan sangat banyak bisa ratusan, ribuan, bahkan jutaan kode. Tergantung seberapa banyak fitur dan kompleksnya suatu aplikasi.</p>\r\n<h3>7. Buat Portofolio yang Menarik</h3>\r\n<p>Setelah kita membuat aplikasi hasil karya  sendiri jangan lupa dokumentasikan dan share hasilnya ke orang lain. Dengan begitu kita akan mendapatkan feedback dari orang yang menguji program aplikasi yang sudah kita share.</p>\r\n<h3>8. Belajar Tanpa Henti</h3>\r\n<p>Terakhir jangan pernah berhenti belajar. Jangan pernah puas dengan kemampuan programming yang kita miliki sekarang. Dunia programming atau IT sangat dinamis. Selalu update informasi seputar programming. Dan selalu pelajari hal-hal baru yang belum kita ketahui di dunia programming.</p>', '2019-10-28 10:26:42', 'admin'),
(9, '5 Lorem Ipsum edit', '<h3>1. Lorem Ipsum</h3>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pellentesque fringilla nibh nec euismod. Vivamus ut molestie sem. Aliquam eu elementum velit. Aliquam sed nibh vitae nisl tincidunt cursus. Vivamus auctor diam gravida nisl vestibulum, ac pharetra odio sollicitudin. Vestibulum ipsum augue, semper eu egestas blandit, volutpat sed dui. Fusce in vestibulum ex. Donec blandit sagittis rutrum. Maecenas porttitor tempus sem, at facilisis dolor vulputate maximus. Duis at vulputate urna, id hendrerit odio. Integer elementum, tellus ut elementum sodales, mi leo varius massa, vel faucibus tellus magna vitae ex. Curabitur cursus neque id metus pellentesque pretium. Mauris lacinia condimentum erat, eget varius purus dignissim vel. Cras rutrum orci eros, eu convallis sem facilisis sed.</p>\r\n<h3>2. Lorem Ipsum</h3>\r\n<p>Pellentesque blandit at mauris eget rhoncus. Quisque mauris magna, hendrerit ut scelerisque sed, suscipit quis eros. Vestibulum eleifend vel velit id venenatis. Donec at ipsum et nisl faucibus egestas at quis magna. Nam bibendum justo nec lacinia molestie. Sed eu ullamcorper diam. Sed tempor mi id rutrum pretium. Aenean nec nisi semper, ultricies nibh id, porttitor ante. Vestibulum id malesuada libero, ornare porttitor turpis. Morbi tincidunt, arcu vel euismod semper, est lacus rutrum tellus, a finibus magna nisl elementum orci. Donec a leo turpis. Sed ipsum massa, euismod a cursus vel, elementum in dui. Vivamus quis libero arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus suscipit nulla at risus iaculis aliquam.</p>\r\n<h3>3. Lorem Ipsum</h3>\r\n<p>Aenean euismod euismod metus. Sed et tempor leo, id cursus eros. Vivamus scelerisque congue mi, ac lacinia enim sollicitudin in. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras a nisl bibendum, hendrerit odio nec, auctor turpis. Curabitur sit amet suscipit erat. Integer magna ligula, cursus ut consectetur sed, ornare quis orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras quam lectus, efficitur nec diam non, consequat vestibulum risus. Aliquam ligula urna, varius in lacus non, luctus molestie mauris.</p>\r\n<h3>4. Lorem Ipsum</h3>\r\n<p>Phasellus malesuada odio ut eros consectetur porta. Morbi id dui id justo porttitor tincidunt. Aenean in lacinia lacus. Morbi interdum nisi sit amet tellus ullamcorper, at tristique justo lacinia. Maecenas efficitur risus interdum est convallis pharetra sed eu orci. In accumsan enim sed interdum sollicitudin. Proin fermentum est egestas nisi convallis faucibus. Sed sed libero dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras pretium aliquet nunc, et semper velit imperdiet ut. Donec maximus, sem ut commodo elementum, diam risus dapibus libero, quis laoreet sem massa sed sapien. Morbi et interdum tortor. Fusce condimentum ex felis. Ut sit amet facilisis nisl, quis pulvinar tortor. Nulla facilisi. Sed in nunc ac turpis dignissim feugiat.</p>\r\n<h3>5. Lorem Ipsum</h3>\r\n<p>Ut turpis odio, viverra vel est vel, convallis rhoncus eros. Duis in elit nec neque maximus ornare a at felis. Mauris lacinia pretium fringilla. Praesent congue efficitur erat, at laoreet nibh hendrerit nec. Praesent libero turpis, placerat sit amet sagittis eget, interdum ut libero. Nam convallis, ex sed sollicitudin molestie, ligula felis sollicitudin erat, non laoreet massa dolor a dolor. Suspendisse euismod nec metus non bibendum. Integer pretium felis sit amet urna viverra sodales. Phasellus in efficitur eros, eu aliquam tellus. Duis scelerisque sit amet mi ac egestas. Aliquam sed lorem felis. Sed molestie, ligula non tempus viverra, eros tellus molestie nisi, ut scelerisque tellus ante ut felis.</p>', '2019-12-31 12:31:56', 'ridwan'),
(10, '5 Cara Menurunkan Berat Badan', '<h3>1. Banyak Makan Sayuran</h3>\r\n<p>Cara menurunkan berat badan yang satu ini sangatlah aman bahkan bisa membuat kondisi tubuhmu menjadi lebih sehat dan lebih fit. Cobalah untuk mengganti laukmu dengan sayur-mayur. Jika kamu masih baru untuk mencoba cara menurunkan berat badan ini maka setidaknya usahakan 50 persen dari apa yang kalian makan adalah sayur-sayuran. Jika kamu rutin melakukannya maka cara menurunkan berat badan tanpa obat yang bisa dilakukan di rumah ini bisa berdampak signifikan bagi tubuhmu.</p>\r\n<h3>2. Pilih Sarapan Bergizi</h3>\r\n<p>Cara menurunkan berat badan yang bisa dilakukan di rumah ini bisa membantumu memperoleh tubuh yang sehat dan langsing. Kamu hanya perlu mengubah kebiasaanmu dalam memilih sarapan. Jika kamu adalah orang yang selalu melewati sarapan maka cobalah untuk merubah hal itu. Sarapan sangat penting untuk mencegahmu makan lebih banyak di siang hari. Untuk melakukan cara menurunkan berat badan ini adalah dengan memilih makanan yang mengandung 400 hingga 500 kalori di dalamnya untuk sarapanmu. Pastikan sarapanmu tersebut mengandung protein seperti telur, yogurt, kacang, atau mentega kacang dan serat seperti sayuran, buah, atau 100% gandum utuh.</p>\r\n<h3>3. Membatasi Konsumsi Garam</h3>\r\n<p>Cara menurunkan berat badan selanjutnya adalah dengan menjaga konsumsi garam yang masuk ke dalam tubuh. Garam merupakan salah satu makanan pengawet. Makanan-makanan yang ada di dalam kemasan seringkali mengandung kadar natrium yang tinggi. Oleh karena itu saat kamu memilih makanan, pilihlah makanan yang mengandung natrium rendah, setidaknya paling tinggi 140 mg per sajian. Cara menurunkan berat badan ini cukup efektif jika kamu rutin dan benar-benar melakukannya dengan ketat maka kamu bisa mendapatkan penurunan berat badan yang drastis.</h3>\r\n<h3>4. Hindari Minuman Yang Banyak Mengandung Gula</h3>\r\n<p>Cara menurunkan berat badan ini mungkin bisa menjadi cukup sulit bagi kamu yang terbisa meminum-minuman yang manis. Namun jika kamu berhasil melakukan cara menurunkan berat badan yang satu ini, maka bukan tidak mungkin kamu bisa memperoleh penurunan berat badan yang drastis. Meminum minuman yang mengandung gula seperti jus, kopi karamel, soda, teh manis, dan minuman beralkohol tidak akan mengenyangkanmu. Akan jauh lebih mengenyangkan jika kamu mengonsumsi makanan berupa sayur-sayuran dan protein. Mengonsumsi minuman-minuman yang mengandung gula pada siang hari hanya akan membuat jumlah kalorimuu bertambah sebanyak 800 kalori pada malam harinya.</p>\r\n<h3>5. Olahraga Menggunakan Barbel yang Ringan</h3>\r\n<p>Untuk menurunkan berat badan dan memperoleh badan yang lebih ringan, cara menurunkan berat badan yang satu ini cukup penting. Kamu bisa menyeimbangkan konsumsi makananmu dengan olahraga. Olahraga ini cukup mudah dan bisa dilakukan di rumah. Yang kamu butuhkan hanyalah membeli sepasang barbel dengan berat 5 pound atau sekitar 2,3 kg. Kamu bisa melakukan beberapa latihan olahraga dengan menggunakan barbel tersebut. Dengan olahraga teratur akan mengalihkan berat badanmu ke berat otot yang kamu miliki, sehingga badanmu akan terlihat lebih ramping. Cara menurunkan berat badan ini juga sangat mudah karena bisa dilakukan dimana saja.</p>', '2020-01-01 07:23:25', 'ridwan'),
(11, 'Lorem Ipsum test', '<h3>1. Lorem Ipsum</h3>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pellentesque fringilla nibh nec euismod. Vivamus ut molestie sem. Aliquam eu elementum velit. Aliquam sed nibh vitae nisl tincidunt cursus. Vivamus auctor diam gravida nisl vestibulum, ac pharetra odio sollicitudin. Vestibulum ipsum augue, semper eu egestas blandit, volutpat sed dui. Fusce in vestibulum ex. Donec blandit sagittis rutrum. Maecenas porttitor tempus sem, at facilisis dolor vulputate maximus. Duis at vulputate urna, id hendrerit odio. Integer elementum, tellus ut elementum sodales, mi leo varius massa, vel faucibus tellus magna vitae ex. Curabitur cursus neque id metus pellentesque pretium. Mauris lacinia condimentum erat, eget varius purus dignissim vel. Cras rutrum orci eros, eu convallis sem facilisis sed.</p>\r\n<h3>2. Lorem Ipsum</h3>\r\n<p>Pellentesque blandit at mauris eget rhoncus. Quisque mauris magna, hendrerit ut scelerisque sed, suscipit quis eros. Vestibulum eleifend vel velit id venenatis. Donec at ipsum et nisl faucibus egestas at quis magna. Nam bibendum justo nec lacinia molestie. Sed eu ullamcorper diam. Sed tempor mi id rutrum pretium. Aenean nec nisi semper, ultricies nibh id, porttitor ante. Vestibulum id malesuada libero, ornare porttitor turpis. Morbi tincidunt, arcu vel euismod semper, est lacus rutrum tellus, a finibus magna nisl elementum orci. Donec a leo turpis. Sed ipsum massa, euismod a cursus vel, elementum in dui. Vivamus quis libero arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus suscipit nulla at risus iaculis aliquam.</p>\r\n<h3>3. Lorem Ipsum</h3>\r\n<p>Aenean euismod euismod metus. Sed et tempor leo, id cursus eros. Vivamus scelerisque congue mi, ac lacinia enim sollicitudin in. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras a nisl bibendum, hendrerit odio nec, auctor turpis. Curabitur sit amet suscipit erat. Integer magna ligula, cursus ut consectetur sed, ornare quis orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras quam lectus, efficitur nec diam non, consequat vestibulum risus. Aliquam ligula urna, varius in lacus non, luctus molestie mauris.</p>\r\n<h3>4. Lorem Ipsum</h3>\r\n<p>Phasellus malesuada odio ut eros consectetur porta. Morbi id dui id justo porttitor tincidunt. Aenean in lacinia lacus. Morbi interdum nisi sit amet tellus ullamcorper, at tristique justo lacinia. Maecenas efficitur risus interdum est convallis pharetra sed eu orci. In accumsan enim sed interdum sollicitudin. Proin fermentum est egestas nisi convallis faucibus. Sed sed libero dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras pretium aliquet nunc, et semper velit imperdiet ut. Donec maximus, sem ut commodo elementum, diam risus dapibus libero, quis laoreet sem massa sed sapien. Morbi et interdum tortor. Fusce condimentum ex felis. Ut sit amet facilisis nisl, quis pulvinar tortor. Nulla facilisi. Sed in nunc ac turpis dignissim feugiat.</p>\r\n<h3>5. Lorem Ipsum</h3>\r\n<p>Ut turpis odio, viverra vel est vel, convallis rhoncus eros. Duis in elit nec neque maximus ornare a at felis. Mauris lacinia pretium fringilla. Praesent congue efficitur erat, at laoreet nibh hendrerit nec. Praesent libero turpis, placerat sit amet sagittis eget, interdum ut libero. Nam convallis, ex sed sollicitudin molestie, ligula felis sollicitudin erat, non laoreet massa dolor a dolor. Suspendisse euismod nec metus non bibendum. Integer pretium felis sit amet urna viverra sodales. Phasellus in efficitur eros, eu aliquam tellus. Duis scelerisque sit amet mi ac egestas. Aliquam sed lorem felis. Sed molestie, ligula non tempus viverra, eros tellus molestie nisi, ut scelerisque tellus ante ut felis.</p>', '2020-01-01 07:24:43', 'admin'),
(12, 'Cara Menurunkan Berat Badan test', '<h3>1. Banyak Makan Sayuran</h3>\r\n<p>Cara menurunkan berat badan yang satu ini sangatlah aman bahkan bisa membuat kondisi tubuhmu menjadi lebih sehat dan lebih fit. Cobalah untuk mengganti laukmu dengan sayur-mayur. Jika kamu masih baru untuk mencoba cara menurunkan berat badan ini maka setidaknya usahakan 50 persen dari apa yang kalian makan adalah sayur-sayuran. Jika kamu rutin melakukannya maka cara menurunkan berat badan tanpa obat yang bisa dilakukan di rumah ini bisa berdampak signifikan bagi tubuhmu.</p>\r\n<h3>2. Pilih Sarapan Bergizi</h3>\r\n<p>Cara menurunkan berat badan yang bisa dilakukan di rumah ini bisa membantumu memperoleh tubuh yang sehat dan langsing. Kamu hanya perlu mengubah kebiasaanmu dalam memilih sarapan. Jika kamu adalah orang yang selalu melewati sarapan maka cobalah untuk merubah hal itu. Sarapan sangat penting untuk mencegahmu makan lebih banyak di siang hari. Untuk melakukan cara menurunkan berat badan ini adalah dengan memilih makanan yang mengandung 400 hingga 500 kalori di dalamnya untuk sarapanmu. Pastikan sarapanmu tersebut mengandung protein seperti telur, yogurt, kacang, atau mentega kacang dan serat seperti sayuran, buah, atau 100% gandum utuh.</p>\r\n<h3>3. Membatasi Konsumsi Garam</h3>\r\n<p>Cara menurunkan berat badan selanjutnya adalah dengan menjaga konsumsi garam yang masuk ke dalam tubuh. Garam merupakan salah satu makanan pengawet. Makanan-makanan yang ada di dalam kemasan seringkali mengandung kadar natrium yang tinggi. Oleh karena itu saat kamu memilih makanan, pilihlah makanan yang mengandung natrium rendah, setidaknya paling tinggi 140 mg per sajian. Cara menurunkan berat badan ini cukup efektif jika kamu rutin dan benar-benar melakukannya dengan ketat maka kamu bisa mendapatkan penurunan berat badan yang drastis.</h3>\r\n<h3>4. Hindari Minuman Yang Banyak Mengandung Gula</h3>\r\n<p>Cara menurunkan berat badan ini mungkin bisa menjadi cukup sulit bagi kamu yang terbisa meminum-minuman yang manis. Namun jika kamu berhasil melakukan cara menurunkan berat badan yang satu ini, maka bukan tidak mungkin kamu bisa memperoleh penurunan berat badan yang drastis. Meminum minuman yang mengandung gula seperti jus, kopi karamel, soda, teh manis, dan minuman beralkohol tidak akan mengenyangkanmu. Akan jauh lebih mengenyangkan jika kamu mengonsumsi makanan berupa sayur-sayuran dan protein. Mengonsumsi minuman-minuman yang mengandung gula pada siang hari hanya akan membuat jumlah kalorimuu bertambah sebanyak 800 kalori pada malam harinya.</p>\r\n<h3>5. Olahraga Menggunakan Barbel yang Ringan</h3>\r\n<p>Untuk menurunkan berat badan dan memperoleh badan yang lebih ringan, cara menurunkan berat badan yang satu ini cukup penting. Kamu bisa menyeimbangkan konsumsi makananmu dengan olahraga. Olahraga ini cukup mudah dan bisa dilakukan di rumah. Yang kamu butuhkan hanyalah membeli sepasang barbel dengan berat 5 pound atau sekitar 2,3 kg. Kamu bisa melakukan beberapa latihan olahraga dengan menggunakan barbel tersebut. Dengan olahraga teratur akan mengalihkan berat badanmu ke berat otot yang kamu miliki, sehingga badanmu akan terlihat lebih ramping. Cara menurunkan berat badan ini juga sangat mudah karena bisa dilakukan dimana saja.</p>', '2020-01-01 07:27:18', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `respon`
--

CREATE TABLE `respon` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `respon`
--

INSERT INTO `respon` (`id`, `nama`, `email`, `saran`) VALUES
(1, 'Catur Bagas', 'catur@web.com', 'tampilannya sudah bagus, hanya perlu sedikit improvement'),
(2, 'Adit Blazz', 'aditblaz@web.id', 'Boleh juga nih web, lumayan buat nambah nambah pengetahuan dan juga belajar untuk bikin artikel'),
(3, 'Fachrezy', 'fachrezy@web.com', 'Tampilan user interfacenya sudah bagus'),
(4, 'Ariq', 'ariq@web.com', 'websitenya terlalu simple gan'),
(5, 'zakariya', 'zakariya@web.id', 'kalo menurut ane sih kurang rame,saran sih banyakin lagi konten-kontennya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@web.com'),
(5, 'ridwan', 'd584c96e6c1ba3ca448426f66e552e8e', 'Muhammad Ridwan Ramadhan', 'ridwanra_pop2@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respon`
--
ALTER TABLE `respon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `respon`
--
ALTER TABLE `respon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
