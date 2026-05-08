<?php
/*
 * login.php
 * Login formundan POST ile gelen kullanıcı adı ve şifreyi kontrol ediyorum.
 * Doğruysa hoşgeldin mesajı, yanlışsa login sayfasına geri gönderiyorum.
 */

// Ödevde belirlenen doğru kullanıcı bilgilerini tanımlıyorum
$dogruKullanici = "b251210374@ogr.sakarya.edu.tr";
$dogruSifre     = "b251210374";

// Sadece POST isteği kabul ediyorum
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Formdan gelen verileri alıyorum, güvenlik için trim kullanıyorum
    $email    = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Kullanıcı adı ve şifre doğruysa başarı sayfası gösteriyorum
    if ($email === $dogruKullanici && $password === $dogruSifre) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Başarılı</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Giriş Başarılı</h1>
        <nav>
            <a href="index.html">Ana Sayfa</a>
            <a href="hakkinda.html">Hakkında</a>
            <a href="cv.html">CV</a>
            <a href="sehrim.html">Şehrim</a>
            <a href="mirasimiz.html">Mirasımız</a>
            <a href="ilgi-alanlarim.html">İlgi Alanlarım</a>
            <a href="iletisim.html">İletişim</a>
            <a href="login.html">Login</a>
        </nav>
    </header>

    <main>
        <section>
            <!-- Ödev gereksinimi: "Hoşgeldiniz [Öğrenci No]" mesajı gösterilmeli -->
            <h2>Hoşgeldiniz b251210374</h2>
            <p>Login işlemi başarıyla tamamlanmıştır. Sisteme giriş yaptınız.</p>
            <a href="index.html">Ana Sayfaya Dön</a>
        </section>
    </main>

    <footer>
        <p>2026 Web Teknolojileri Proje Ödevi</p>
    </footer>

</body>
</html>
<?php
    } else {
        /*
         * Kullanıcı adı veya şifre yanlışsa:
         * Kullanıcıyı hata parametresiyle login sayfasına yönlendiriyorum.
         * login.html'de bu parametreyi okuyarak hata mesajı gösterebilirim.
         */
        header("Location: login.html?hata=1");
        exit();
    }

} else {
    // POST dışında bir istekle gelinirse login sayfasına yönlendir
    header("Location: login.html");
    exit();
}
?>