<?php 
    include 'database.php';
	if(isset($_POST['submit'])){
        $id = $_POST['id_artikel'];
        $judul = $_POST['judul_edit'];
        $isi = $_POST['isi_edit'];
        $penulis = $_POST['penulis_edit'];

        // lakukan penyimpanan ke database
        $simpan = mysqli_query($connection, "UPDATE artikel SET judul='$judul',isi='$isi',penulis='$penulis' WHERE id=$id");

        if($simpan) {
            // berhasil tersimpan, arahkan ke tabel data artikel
            header('Location: ../artikel.php');
            // echo "<script>window.location = '../artikel.php'</script>";
        } else {
            // gagal menyimpan
            echo "Gagal menyimpan, suatu kesalahan terjadi!";
        }
    }
 ?>