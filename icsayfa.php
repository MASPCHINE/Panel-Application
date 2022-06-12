<?php
//Panel Anasayfa
session_start();

    if ($_COOKIE["giris"] != md5("file") || $_SESSION["kontrol"] != sha1(md5("open"))){
        header("Location: cikis.php");
        die("Yetkisiz Giris!");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İç sayfa</title>
    <style>
        body{
            text-align: center;
            padding-top:50px;
        }
    </style>
  </head>
  <body>
    
    <a href="anasayfa.php">Anasayfa</a> - <a href="icsayfa.php">İç Sayfa</a> - <a href="cikis.php">Çıkış Yap</a>
    <br><br><hr><br><br>
    <p>Merhaba, Hoş Geldiniz İç sayfa.</p> 

  </body>
</html>
