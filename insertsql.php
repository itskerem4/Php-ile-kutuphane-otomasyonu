<?php 
include "config.php";
error_reporting(0);


/*Kitap Ekleme Bölümü*/
if ($_POST['ekle']) {
$adi=$_POST['kitabinadi'];
$yazari=$_POST['yazarinadi'];
$aciklamasi=$_POST['aciklamaalani'];
$hedef_dizin = "css/images/kitap_resimleri/";
$hedef_dosya = $hedef_dizin.$_FILES["resim"]["name"];
$ekleme="INSERT INTO kitap (kitap_adi,kitap_yazari,kitap_aciklama,kitap_resim)values('".$adi."','".$yazari."','".addslashes($aciklamasi)."','".$hedef_dosya."')";
if (move_uploaded_file($_FILES["resim"]["tmp_name"],$hedef_dosya)) {
     echo "<script language='javascript'>alert('Kitap Başarıyla Eklendi')</script>";
  } 
  else {
    echo "Dosya yükleme başarısız.";
  }
if ($baglanti->query($ekleme) === TRUE) 
{
    echo "<script language='javascript'>alert('Dosya Başarıyla Yüklendi')</script>";
    header("Refresh: 1; url=admin/controlpanel.php");
 
} 
else 
{
   echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
}

}


/*İstek Gönderme Bölümü*/
if ($_POST['istekgonder']) {
    $epostasql=$_POST['eposta'];
    $konusql=$_POST['konu'];
    $iceriksql=$_POST['icerik'];
    $istekgonder="INSERT INTO istekoneri (eposta , konu , icerik )values('".$epostasql."','".$konusql."','".addslashes($iceriksql)."')";
        if ($baglanti->query($istekgonder) === TRUE) 
        {
     echo "<script language='javascript'>alert('Formu Doldurduğunuz İçin Teşekkür Ederiz.')</script>";
     header("Refresh: 1; url=contactform.php");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}
?>