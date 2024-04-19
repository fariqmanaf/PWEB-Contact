<?php
require_once 'database.php';

Class Contact{ 
  static function select(){
      global $conn;
      $sql = "SELECT * FROM contact";
      $result = $conn->query($sql);
      $arr = array();

      if($result->num_rows > 0) {
          while ($row = mysqli_fetch_assoc($result)){
              foreach ($row as $key => $value){
                  $arr[$key][] = $value;
              }
          }
      }
      return $arr;
  }
}
?>