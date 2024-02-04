<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    /////// PHP kodları buraya yazılır.

    /////// DEĞİŞKENLER: Değişkenler, verileri saklamak için kullanılır. PHP'de bir değişkenin adı $ işareti ile başlar.
    $isim = "Ahmet";
    $yas = 25;

    /////// VERİ TÜRLERİ: PHP'nin temel veri türleri şunlardır: String, Integer, Float, Boolean, Array, Object, Null.
    $stringDegisken = "Merhaba dünya!";
    $integerDegisken = 42;
    $floatDegisken = 3.14;
    $booleanDegisken = true;
    $arrayDegisken = array("elma", "armut", "kiraz");

    ///////  KOŞULLU İFADELER: Koşullu ifadeler, belirli bir koşulu kontrol etmek ve buna göre farklı işlemler yapmak için kullanılır.
    $sayi = 10;

    if ($sayi > 5) {
        echo "Sayı 5'ten büyük.";
    } else {
        echo "Sayı 5'ten küçük veya eşit.";
    }

    /////// DÖNGÜLER: Döngüler, belirli bir koşul sağlandığı sürece belirli bir bloğu tekrar etmek için kullanılır.
    for ($i = 1; $i <= 5; $i++) {
        echo "Sayı: $i <br>";
    }

    /////// fONKSİYONLAR: Fonksiyonlar, belirli bir görevi yerine getiren kod bloklarıdır. 
    /////// Fonksiyonlar tekrar kullanılabilirliği artırır ve kodunuzu daha modüler hale getirir.
    function merhaba($isim)
    {
        echo "Merhaba, $isim!";
    }

    merhaba("Ahmet");

    ///////FORM VERİLERİ İŞLEME:
    ///////PHP Form İşleme (form_isle.php):
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Formdan gelen veriyi al
        $ad = $_POST["ad"];

        // Veriyi işle
        echo "Merhaba, $ad!";
    }

    /////// VERİTABANI BAĞLANTISI VE SORGULARI: PHP ile veritabanına bağlanmak için mysqli veya PDO gibi uzantıları
    /////// kullanabilirsiniz. İşte basit bir MySQL veritabanı bağlantısı örneği:
    $servername = "localhost";
    $username = "kullanici_adi";
    $password = "parola";
    $database = "veritabani_adı";

    // MySQL bağlantısı oluştur
    $conn = new mysqli($servername, $username, $password, $database);

    // Bağlantıyı kontrol et
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    // SQL sorgusu
    $sql = "SELECT id, ad, soyad FROM kullanici";
    $result = $conn->query($sql);

    // Sonuçları işle
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Ad: " . $row["ad"] . " - Soyad: " . $row["soyad"] . "<br>";
        }
    } else {
        echo "Sonuç bulunamadı.";
    }

    // Bağlantıyı kapat
    $conn->close();
    ?>




    /////// FORM VERİLERİ İŞLEME:
    /////// Web uygulamalarında sıkça karşılaşılan bir senaryo, kullanıcının bir
    /////// formu doldurup göndermesi ve PHP'nin bu form verilerini işlemesi.
    ///////HTML Form:
    <form method="post" action="form_isle.php">
        Adiniz: <input type="text" name="ad">
        <input type="submit" value="Gönder">
    </form>





</body>

</html>