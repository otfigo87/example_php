<?php

  $con = mysqli_connect('localhost', 'root');

  if($con) {
    echo "Connection successful";
  } else {
    echo "Connection failed!";
  }

  mysqli_select_db($con, 'photo');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];

  $query ="INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";

  mysqli_query($con, $query);
  header('location:index.php');
