<?php
      $dbhost = 'mysql-0.mysql';
      $dbuser = 'root';
      $dbpass = 'password';
      $dbname = 'test';
      $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      $sql = "INSERT INTO messages (message) VALUES ('Hello2')";
      $result = mysqli_query($conn, $sql);

      echo $result;
      echo "\n";
      echo getHostByName(getHostName());
      echo "\n";

      $dbhost = 'mysql-read';
      $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      $sql = "select * from `messages`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
        $Array_Return = array(
          "message" => $row['message']
        );
      }
      echo json_encode($Array_Return);
?>