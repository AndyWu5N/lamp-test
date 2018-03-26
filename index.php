<?php
      $dbhost = 'mysql';
      $dbuser = 'root';
      $dbpass = 'password';
      $dbname = 'test';
      $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
      $sql = "select * from `messages`";
      $result = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_array($result)){
        $Array_Return =array(
          "message" => $row['message']
        );
      }
      echo json_encode($Array_Return);
?>