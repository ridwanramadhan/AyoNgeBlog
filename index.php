<?php 
	include 'system/database.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ayo NgeBlog</title>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/sweetalert.min.js"></script>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><i class="fas fa-laptop"></i> Ayo NgeBlog</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#manfaat">Manfaat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Create your own article on Ayo NgeBlog</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Ayo NgeBlog membantu anda dalam membuat artikel. Membuat artikel membuat anda menjadi lebih handal dalam menulis sesuai EYD</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#manfaat">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <!-- <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Services Section -->
  <section class="page-section" id="manfaat">
    <div class="container">
      <h2 class="text-center mt-0">Manfaat Membuat Artikel</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-file text-primary mb-4"></i>
            <h3 class="h4 mb-2">Dokumentasi</h3>
            <p class="text-muted mb-0">Seiring berjalannya waktu, tak mungkin kita bisa mengulanginya kembali. Tak ada manusia yang bisa mengingat semua kejadian dimasa lampau dengan sempurna. Bahkan masa lalu akan tertutup oleh kejadian-kejadian baru. Jangan berkhayal anda seperti Doraemon yang mempunyai alat canggih untuk kembali kemasa lampau. Bagi seorang yang pelupa menulis akan sangat membantu dalam mengingat hal-hal yang sering dilupakan.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-brain text-primary mb-4"></i>
            <h3 class="h4 mb-2">Olahraga Otak</h3>
            <p class="text-muted mb-0">Membiasakan menulis berarti melatih otak anda untuk terus berfikir dan berkembang. Apa yang saya tulis merupakan hasil pemikiran saya tentang apa yang saya lihat dan apa yang saya dengar. Pertama menulis saya merasa kekakuan akan tetapi karena otak sering latih untuk berfikir dan otak memerintahkan tangan mata dan lain sebagainya untuk membuat suatu karya tulis. Bagi saya pribadi menulis menyalurkan energi positif yang ada pada diri saya pribadi.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-chart-line text-primary mb-4"></i>
            <h3 class="h4 mb-2">Dilihat Seluruh Dunia</h3>
            <p class="text-muted mb-0">Dalam membuat suatu tulisan ataupun artikel tentunya itu melalui sebuah proses. Yang pertama tentunya mencari inspirasi apa yang akan kita tulis, mencari referensi agar tulisan kita bisa mempunyai makna dan bermanfaat, dan dengan menulis kita secara tidak langsung akan mengembangkan kemampuan kita dalam hal bahasa, tentunya agar tulisan kita bisa dibaca dengan enak oleh orang lain.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-money-bill-alt text-primary mb-4"></i>
            <h3 class="h4 mb-2">Menghasilkan Uang</h3>
            <p class="text-muted mb-0">Untuk point terakhir ini mungkin masih jadi harapan bagi saya pribadi. Tapi para master blog diluar bisa anda temukan. Mereka bisa meraup pundi-pundi dollar disetiap mereka memposting artikel barunya. Pasalnya artikel yang mereka posting diblog mereka tempatka ads atau iklan yang mereka pasang. Namun mereka juga pasti mengalami sebuah proses</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container text-center">
      <h3 class="mb-4">Ayo lihat artikel yang ada di Ayo NgeBlog!</h3>
      <a class="btn btn-dark btn-xl js-scroll-trigger" href="#portfolio">Lihat Artikel</a>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="page-section bg-dark text-white">
    <div class="container" id="konten">
  		<div class="row justify-content-center">
  			<h1>Artikel Terbaru Ayo NgeBlog</h1>
  			<div class="col-md-12">
  				<div class="card-columns">
  		    	<?php 
            	$query = mysqli_query($connection, "SELECT * FROM artikel ORDER BY tanggal DESC limit 6");
  				    while ($artikel = mysqli_fetch_array($query)) {
             	?>
  				  <div class="card text-dark">
  				    <div class="card-body">
  				    	<a href="lihat-artikel.php?id=<?php echo $artikel['id']; ?>"><h2 class="card-title text-primary"><?php echo $artikel['judul']; ?></h2></a>
  				      	<h5 class="card-title">Oleh <b><?php echo $artikel['penulis']; ?></b>, pada <?php echo $artikel['tanggal']; ?></h5>
  				      	<p class="card-text"><?php echo substr($artikel['isi'], 0, 255)."..."; ?></p>
  				      	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  				    </div>
  				  </div>
  			  <?php 
  			  	}
  			   ?> 
  				</div>
  			</div>
  		</div>
  	</div>
    <div class="container text-center">
      <a class="btn btn-primary btn-xl" href="semua-artikel.php">Lihat Artikel Selengkapnya</a>
    </div>
  </section>

  <!-- <div class="container" id="konten">
		<div class="row justify-content-center">
			<h1>Artikel Terbaru Ayo NgeBlog</h1>
			<div class="col-md-12">
				<div class="card-columns">
			<?php 
          		$query = mysqli_query($connection, "SELECT * FROM artikel ORDER BY tanggal DESC limit 6");
				while ($artikel = mysqli_fetch_array($query)) {
           	?>
				  <div class="card">
				    <div class="card-body">
				      <h2 class="card-title"><?php echo $artikel['judul']; ?></h2>
				      <h5 class="card-title">Oleh <b><?php echo $artikel['penulis']; ?></b>, pada <?php echo $artikel['tanggal']; ?></h5>
				      <p class="card-text"><?php echo substr($artikel['isi'], 0, 255)."..."; ?></p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
			  <?php 
			  	}
			   ?> 
				</div>
			</div>
		</div>
	</div> -->
  <!-- Call to Action Section -->
  <!-- <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
  </section> -->

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          	<h2 class="mt-0">Let's Get In Touch!</h2>
          	<hr class="divider my-4">
          	<h3><i class="fa fa-address-book"></i> Contact Me</h3>
			<form class="form" action="" method="POST">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nama">
					<br>
					<input type="email" name="email" class="form-control" placeholder="Email">
					<br>
					<textarea id="suggestion" placeholder="Kritik dan saran" class="form-control" name="message"></textarea>
				</div>
				<button id="respon" type="submit" class="btn btn-primary" name="simpan">Submit</button>
			</form>
          	<!-- <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p> -->
        </div>
      </div>
      <br><br><br><br>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>082110883990</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@web.com">contact@web.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Ayo NgeBlog</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

<?php 
	if(isset($_POST['simpan'])){
	    $nama = $_POST['name'];
	    $email = $_POST['email'];
	    $pesan = $_POST['message'];

	    // lakukan penyimpanan ke database
	    $simpan = mysqli_query($connection, "INSERT INTO respon (nama, email, saran) VALUES('$nama','$email','$pesan')");

	    if($simpan) {
 ?>
<script>
	$('#respon').click(function() {
      swal ({
        title: "Kritik dan Saran",
        text: "Berhasil mengirim kritik dan saran",
        icon: "success",
        timer: 5000,
      });
    });
</script>
<?php 
	        // berhasil tersimpan, arahkan ke tabel data artikel
			echo "<script>window.location = 'index.php'</script>";
	        // header("location: index.php");
	    } else {
	        // gagal menyimpan
	        echo "Gagal menyimpan, suatu kesalahan terjadi!";
	    }
	}
 ?>
</body>

</html>