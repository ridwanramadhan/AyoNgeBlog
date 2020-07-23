<?php 
  include 'database.php';

  $id =  $_GET['id'];

  $query = mysqli_query($connection, "DELETE FROM artikel where id = '$id' ");

  if($query){
        echo '<script type="text/javascript">
                alert("Hapus Data Berhasil");
            </script>';
    }else{
        echo '<script type="text/javascript">
                alert("Gagal Hapus Data!");
            </script>';
  }          

  header("location:../artikel.php");
 ?>