<?php
//Panel Giris İşlemleri
session_start();

$kullanici= $_POST["kullanici"];
$sifre = $_POST["sifre"];

//Veritabanı Bağlantısı Kurulup, Bu Bilgilere Sahip Kullanıcı Kontrol Edilir..

$kullanicilar = array("ahmet","mehmet","tarik");

if(in_array($kullanici,$kullanicilar) && $sifre == "1234"){

    $kontrol = md5("file"); //Kısmi güvenlik için veri şifrelendi
    setcookie("giris",$kontrol,time()+3600); //Üye giris kontrolü için 1 saatlik çerez
    $_SESSION["kontrol"] = sha1(md5("open")); //Üye giris kontrolü için oturum dosyası
    header("Location: anasayfa.php");  

}else {
    //header("Location: index.html");
    echo "
    <script>
        alert('Hatalı Kullanıcı Bilgisi');
        window.location.href = 'index.html';
    </script>
    ";
}
?>