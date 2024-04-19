<?php
require_once 'database.php';


if (isset($_GET['id'])) {
    require_once __DIR__ . '/../app/models/database.php';
    $id=$_GET["id"];

    $sql="select * from laporan where id=$id";
    $hasil=mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($hasil);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once __DIR__ . '/../app/models/database.php';
    $id=htmlspecialchars($_POST["id"]);
    $user_id=$_POST["user_id"];
    $owner=$_POST["owner"];
    $no_hp=$_POST["no_hp"];
    $email=$_POST["email"];


    $sql="update laporan set
  user_id='$user_id',
  owner='$owner',
  no_hp='$no_hp',
  email='$email'
  where id=$id";

    //Mengeksekusi atau menjalankan query diatas
    $hasil=mysqli_query($conn,$sql);

    //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
    if ($hasil) {
        header("Location:index.php");
    }
    else {
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

    }

}

?>