<?php
    $conn = mysqli_connect('localhost','nilhan','123','wtg');
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>