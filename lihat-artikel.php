<?php 
	include 'system/database.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Ayo NgeBlog - Lihat Artikel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/creative.min.js"></script>

	<!-- Font Awesome Icons -->
  	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>
<body id="page-top">
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
	    <div class="container">
	      <a class="navbar-brand js-scroll-trigger" href="index.php"><i class="fas fa-laptop"></i> Ayo NgeBlog</a>
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
				<?php 
					if(isset($_GET['id']) && !empty($_GET['id'])){
	                    $id = $_GET['id'];


	                    $query = mysqli_query($connection, "SELECT * FROM artikel WHERE id='$id' ORDER BY tanggal DESC");

	                    if(mysqli_num_rows($query) > 0 ){

	                        // looping Artikel
	                        while($artikel = mysqli_fetch_array($query)){
				 ?>
	          <h1 class="text-uppercase text-white font-weight-bold"><?php echo $artikel['judul']; ?></h1>
	          <hr class="divider my-4">
	        </div>
	        <div class="col-lg-8 align-self-baseline">
	          <p class="text-white-75 font-weight-light mb-5"><?php echo "Oleh <b>".$artikel['penulis']."</b>, pada ".$artikel['tanggal']; ?></p>
	          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#konten">Find Out More</a>
	        </div>
	      </div>
	    </div>
	  </header>
	<div class="container" id="konten">
		<div class="row">
			<div class="col-md-12">
				<?php 
	                            // echo "<div class='artikel-kop'>";
	                            // echo "<h2><b>".$artikel['judul']."</b></h2>";
	                            // echo "<p class='artikel-tanggal'>Oleh <b>".$artikel['penulis']."</b>, pada ".$artikel['tanggal']."</p>";
	                            // echo "</div>";

	                            echo "<div class='artikel-isi'>";
	                            echo $artikel['isi'];
	                            echo "</div><hr/>";

	                        }
	                    } else {
	                        include("404.php");
	                    }

	                } else {
	                    include("404.php");
	                }
				 ?>
			</div>
		</div>
	</div>
</body>
</html>