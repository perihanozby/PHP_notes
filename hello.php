<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen veriyi al
    $ad = $_POST["ad"];
    $yas = $_POST["yas"];

    // Verileri kontrol et ve boş değilse işle
    if (!empty($ad) && !empty($yas)) {
      // Özel selamlama mesajını oluştur
      $selam = "Merhaba $ad! ";
      if ($yas < 18) {
        $selam .= "Sen henüz reşit değilsin.";
      } else {
        $selam .= "Hoş geldin!";
      }

      // HTML çıktısı üret
      echo "<h2>$selam</h2>";
    } else {
      // Hata mesajı
      echo "<p>Lütfen adinizi ve yasinizi girin.</p>";
    }
  }
?>
