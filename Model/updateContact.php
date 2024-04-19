<?php
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] == "update") {
        require_once __DIR__ . '/database.php';
        $user_id=$_POST["id_edit"];
        $photo=$_POST["photo_edit"];
        $no_hp=$_POST["no_hp_edit"];
        $owner=$_POST["owner_edit"];

        $sql="update contact set
        photo='$photo',
        no_hp='$no_hp',
        owner='$owner'
        where id_user=$user_id";

        $hasil=mysqli_query($conn,$sql);
        if ($hasil) {
            header("Location:index.php");
        }else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
    }
}

?>