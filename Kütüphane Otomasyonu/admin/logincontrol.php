<?php
include("logindata.php");
session_start();
ob_start();
OturumAcikmi() ? header("Location: index.php") : "";

if(($_POST["user"]==$user) and ($_POST["pass"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;

header("Location:index.php");
}else{
echo "Kullancı Adı veya Şifre Yanlış.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=login.php");
}
ob_end_flush()
?>
