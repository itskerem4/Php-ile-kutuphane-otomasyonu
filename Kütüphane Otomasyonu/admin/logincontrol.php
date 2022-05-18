<?php
include("logindata.php");
session_start();
ob_start();
OturumAcikmi() ? header("Location: index") : "";

if(($_POST["user"]==$user) and ($_POST["pass"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:index");
}else{
echo "Kullancı Adı veya Şifre Yanlış.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=index");
}
ob_end_flush()
?>
