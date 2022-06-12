<?php
session_start();


setcookie("giris","",time()-1); //Çerez dosyası içi boşaltıldı silindi

$_SESSION["kontrol"] = ""; //Oturum dosyasının içi boşaltıldı
unset($_SESSION["kontrol"]); //Oturum dosyası silindi

header("Location: index.html");
?>