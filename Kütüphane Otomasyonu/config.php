<?php
$baglanti = new mysqli("localhost", "root", "", "kutuphane");
if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}
?>