<?php


session_start();

unset($_SESSION['admin_email']);
session_destroy();
echo "<script>window.location='../admin_login.php'</script>";
