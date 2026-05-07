<?php
$dogruKullanici = "b251210374@ogr.sakarya.edu.tr";
$dogruSifre = "b251210374";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email == $dogruKullanici && $password == $dogruSifre) {
        echo "<!DOCTYPE html>";
        echo "<html lang='tr'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Giriş Başarılı</title>";
        echo "<link rel='stylesheet' href='style.css'>";
        echo "</head>";
        echo "<body>";

        echo "<header>";
        echo "<h1>Giriş Başarılı</h1>";
        echo "</header>";

        echo "<main>";
        echo "<section>";
        echo "<h2>Hoşgeldiniz b251210374@ogr.sakarya.edu.tr</h2>";
        echo "<p>Login işlemi başarıyla tamamlanmıştır.</p>";
        echo "<a href='index.html'>Ana Sayfaya Dön</a>";
        echo "</section>";
        echo "</main>";

        echo "<footer>";
        echo "<p>2026 Web Teknolojileri Proje Ödevi</p>";
        echo "</footer>";

        echo "</body>";
        echo "</html>";
    } else {
        header("Location: login.html");
        exit();
    }

} else {
    header("Location: login.html");
    exit();
}
?>