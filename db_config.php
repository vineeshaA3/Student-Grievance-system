<?php


$conn = new mysqli('localhost', 'root', '', 'student') or die("connection failed:" . mysqli_connect_error());
mysqli_set_charset($conn, "utf8");
