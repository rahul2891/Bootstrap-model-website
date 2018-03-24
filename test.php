<?php

$conn = mysqli_connect("localhost", "root", "", "thor");

if (!$conn) {
	die("Connection failed: ".mysql_connect_error());
}
