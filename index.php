<?php
      $dbhost = 'mysql-0.mysql';
      $dbuser = 'root';
      $dbpass = '';
      $dbname = 'test';
      $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      $sql = "INSERT INTO `messages` (`message`) VALUES (`hello`);";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
        $Array_Return = array(
          "message" => $row['message']
        );
      }
      echo json_encode($Array_Return);
      echo "\n";
      echo getHostByName(getHostName());
      echo "\n";

      $dbhost = 'mysql-read';
      $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      $sql = "select * from `messages`";
      $result = mysqli_query($conn, $sql);
?>