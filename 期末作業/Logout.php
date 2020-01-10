<?php
session_start();
include "data.php";
$account = $_SESSION["ACN"];
$pass = $_SESSION["PSN"];

if($account&&$pass)
{session_destroy();
echo "<script>alert('登出成功!');location.href='http://localhost/white.html';</script>";}
?>