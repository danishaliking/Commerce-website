<?php
session_start();
echo "Wellcome".$_SESSION['username'];
echo"<br>";
echo"And your passwoed it".$_SESSION['password'];
echo"<br>";
echo "Wellcome".$_SESSION['email'];
echo"<br>";
?>