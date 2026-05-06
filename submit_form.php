<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Verileri işlemek (örneğin: e-posta gönderebilirsiniz)
    // Bu örnekte verileri basitçe ekrana yazdırıyoruz
    echo "Ad Soyad: $name<br>";
    echo "E-posta: $email<br>";
    echo "Mesaj: $message<br>";
} else {
    echo "Form verisi gönderilmedi.";
}
?>