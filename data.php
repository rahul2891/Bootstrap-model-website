<?php

include 'test.php';

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$sql = "INSERT INTO contact (name, email, comments) values ('$name', '$email', '$comments')";
$result = mysqli_query($conn, $sql);
  	 	