<?php
  $host='localhost';
  $user='root';
  $pass=' ';

  $mysqli = new mysqli('localhost', 'root', '', 'music');
  if (mysqli_connect_errno()) {
    echo ("Ошибка подключения!");
    printf(" ", mysqli_connect_error());
    exit();
  }
  $uploaddir = './play_lists/';
  $uploadfile = $uploaddir . basename($_FILES['hello']['name']);
  $song_name = $_FILES['hello']['name'];
  $song_size = $_FILES['hello']['size'];

  move_uploaded_file($_FILES['hello']['tmp_name'], $uploadfile);


  $query = "INSERT INTO play_list VALUES (null, '$song_name', '$uploadfile', NOW(), '$song_size')";
  $mysqli->query($query);
?>