<?php
// Dosya olarak alacak
$blacklistFile = 'karaliste.txt';

// Mesela formdan bir yazı gönderiliyor
$text = $_POST['text'] ?? '';

// Dosyayı Oku
$blacklist = file($blacklistFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Küfürleri kontrol et
function containsProfanity($text, $blacklist) {
    foreach ($blacklist as $profaneWord) {
        if (stripos($text, $profaneWord) !== false) {
            return true;
        }
    }
    return false;
}

// Sonuçları kontrol et ve işle
if (containsProfanity($text, $blacklist)) {
    echo "Metin küfür içeriyor.";
} else {
    echo "Metin temiz.";
}
// Herhangi bir projede kullanılabilir
?>
