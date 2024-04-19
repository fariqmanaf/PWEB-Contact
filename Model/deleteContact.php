<?php

global $conn;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once 'database.php';

  if ($_POST["action"] == "delete") {
    
    $id=$_POST["id_user_delete"];
    $sql="delete from contact where id_user='$id' ";
    $hasil=mysqli_query($conn,$sql);

    if ($hasil) {
        header("Location:index.php");
    }else {
        echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
    }
  }
}
?>