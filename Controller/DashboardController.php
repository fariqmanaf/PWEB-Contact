<?php
include_once 'Model/contact.php';
include_once 'Model/user.php';
include_once 'Config/main.php';
include_once 'Config/static.php';

class Data{
  static function insert(){
      global $conn;
      require_once 'Model/database.php';
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["action"] == "create") {
          $photo=$_POST["photo"];
          $no_hp=$_POST["no_hp"];
          $owner=$_POST["owner"];

          $sql="insert into contact (photo,no_hp,owner) values
          ('$photo','$no_hp','$owner')";

          $hasil=mysqli_query($conn,$sql);

          if ($hasil) {
              header("Location:dashboard");
          }
          else {
              echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
          }
        }
      }
  }

  static function delete(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      global $conn;
      require_once 'Model/database.php';

      if ($_POST["action"] == "delete") {
        
        $id=$_POST["id_user_delete"];
        $sql="delete from contact where id_user='$id' ";
        $hasil=mysqli_query($conn,$sql);

        if ($hasil) {
            header("Location:dashboard");
        }else {
            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
        }
      }
    }
  }

  static function update(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      global $conn;
      require_once 'Model/database.php';
      if ($_POST["action"] == "update") {
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
              header("Location:dashboard");
          }else {
              echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
          }
      }
    }
  }
}

class DashboardController {
    static function dashboard() {
      view('Dashboard/index');
    }
    
    static function handleRequest() {
      if (isset($_POST['action']) && $_POST["action"] === 'create') {
          Data::insert();
      } elseif (isset($_POST['action']) && $_POST["action"] === 'delete') {
          Data::delete();
      } elseif (isset($_POST['action']) && $_POST["action"] === 'update') {
          Data::update();
      }
  }
}
