<?php 
	include 'system/database.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Ayo NgeBlog - Artikel</title>
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
	            <a class="nav-link js-scroll-trigger" href="index.php#manfaat">Manfaat</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link js-scroll-trigger" href="index.php#portfolio">Artikel</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact</a>
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
				 
	          <h1 class="text-uppercase text-white font-weight-bold">Artikel Ayo NgeBlog</h1>
	          <hr class="divider my-4">
	        </div>
	        <div class="col-lg-8 align-self-baseline">
	          <p class="text-white-75 font-weight-light mb-5">"Menulis adalah mencipta, dalam suatu penciptaan seseorang mengarahkan tidak hanya semua pengetahuan, daya, dan kemampuannya saja, tetapi ia sertakan seluruh jiwa dan nafas hidupnya." – Stephen King</p>
	          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#konten">Find Out More</a>
	        </div>
	      </div>
	    </div>
	  </header>
	<section id="portfolio" class="page-section bg-dark text-white">
	    <div class="container" id="konten">
			<div class="row justify-content-center">
				<h1>Semua Artikel Ayo NgeBlog</h1>
				<div class="col-md-12">
					<div class="card-columns">
				<?php 
	          		$query = mysqli_query($connection, "SELECT * FROM artikel ORDER BY tanggal DESC");
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
	  </section>
</body>
</html>