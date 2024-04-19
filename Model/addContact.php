<?php
require_once 'database.php';

class Data{
    static function insert(){
        global $conn;
        require_once __DIR__ . '/database.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if ($_POST["action"] == "create") {
            $photo=$_POST["photo"];
            $no_hp=$_POST["no_hp"];
            $owner=$_POST["owner"];

            $sql="insert into contact (photo,no_hp,owner) values
            ('$photo','$no_hp','$owner')";

            $hasil=mysqli_query($conn,$sql);

            if ($hasil) {
                header("Location:index.php");
            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
            }
          }
        }
    }
}

Data::insert()
?>