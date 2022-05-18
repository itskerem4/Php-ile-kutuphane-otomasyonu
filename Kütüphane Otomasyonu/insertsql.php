<?php 
include "config.php";
error_reporting(0);





/*Kitap Ekleme Bölümü*/
if ($_POST['ekle']) {
$adi=$_POST['kitabinadi'];
$yazari=$_POST['yazarinadi'];
$durumu=$_POST['kitapdurumu'];
$aciklamasi=$_POST['aciklamaalani'];
$hedef_dizin = "images/kitap_resimleri/";
$hedef_dosya = $hedef_dizin.$_FILES["resim"]["name"];
$ekleme="INSERT INTO kitap (kitap_adi,kitap_yazari,kitap_aciklama,kitap_resim,kitap_durumu)values('".$adi."','".$yazari."','".addslashes($aciklamasi)."','".$hedef_dosya."','".$durumu."')";
if (move_uploaded_file($_FILES["resim"]["tmp_name"],$hedef_dosya)) {
     echo "<script language='javascript'>alert('Kitap Başarıyla Eklendi')</script>";
  } 
  else {
    echo "Dosya yükleme başarısız.";
  }
if ($baglanti->query($ekleme) === TRUE) 
{
    echo "<script language='javascript'>alert('Dosya Başarıyla Yüklendi')</script>";
    header("Refresh: 0.5; url=admin/tables.php");
 
} 
else 
{
   echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
}

}






/*İstek Gönderme Bölümü*/
if ($_POST['istekgonder']) {
    $isimsql=$_POST['isim'];
    $epostasql=$_POST['eposta'];
    $konusql=$_POST['konu'];
    $iceriksql=$_POST['icerik'];
    $istekgonder="INSERT INTO istekoneri (adi, eposta , konu , icerik )values('".$isimsql."','".$epostasql."','".$konusql."','".addslashes($iceriksql)."')";
        if ($baglanti->query($istekgonder) === TRUE) 
        {
     echo "<script language='javascript'>alert('Formu Doldurduğunuz İçin Teşekkür Ederiz.')</script>";
     header("Refresh: 0.5; url=index.php");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}




/*Üye Kayıt Ekleme */
if ($_POST['kayitekle']) {
    $uyeadi=$_POST['uyeaditext'];
    $uyesoyadi=$_POST['uyesoyaditext'];
    $uyeposta=$_POST['uyepostatext'];
    $uyekayit="INSERT INTO uyeler (uye_adi , uye_soyadi , uye_posta , uye_durumu )values('".$uyeadi."','".$uyesoyadi."','".$uyeposta."','Aktif')";
        if ($baglanti->query($uyekayit) === TRUE) 
        {
     echo "<script language='javascript'>alert('Kayıt Tamamlandı')</script>";
     header("Refresh: 0.5; url=admin/register.php");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}




/*Kitap Durumu Güncelleme*/    
if ($_POST['guncelle_buton']) {
    $kitapidsql=$_POST['kitapid'];
    $durumsql=$_POST['guncelletext'];
    $durumgsql="UPDATE kitap SET kitap_durumu='$durumsql' WHERE kitap_id='$kitapidsql'";
        if ($baglanti->query($durumgsql) === TRUE) 
        {
     echo "<script language='javascript'>alert('Başarıyla Güncellendi')</script>";
     header("Refresh: 0.5; url=admin/index.php");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}



/*Üye Durumu Güncelleme*/
if ($_POST['uyeguncelle_buton']) {
    $uyeidsql=$_POST['uyeid'];
    $uyesql=$_POST['uyeguncelletext'];
    $uyedurumgsql="UPDATE uyeler SET uye_durumu='$uyesql' WHERE uye_id='$uyeidsql'";
        if ($baglanti->query($uyedurumgsql) === TRUE) 
        {
     echo "<script language='javascript'>alert('Başarıyla Güncellendi')</script>";
     header("Refresh: 0.5; url=admin/members.php");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}





/*Kitap Giriş Ve Çıkış Alanı*/
if ($_POST['kitapgrscks']) {
    $aliciid=$_POST['uyeidtext'];
    $alidigikitap=$_POST['aldigikitap'];
    $aldigitarih=$_POST['aldigitarih'];
    $verecegitarih=$_POST['verecegitarih'];
    $grsckssql="INSERT INTO kitap_grscks (alan_id , aldigi_kitap , verecegi_tarih , aldigi_tarih )values('".$aliciid."','".$alidigikitap."','".$verecegitarih."','".$aldigitarih."')";
        if ($baglanti->query($grsckssql) === TRUE) 
        {
     echo "<script language='javascript'>alert('Ekleme Başarılı')</script>";
     header("Refresh: 0.5; url=admin/bookcontrol.php");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}






/*Üyelik İsteği Alanı*/
if ($_POST['uyeistegi']) {
    $uyeeposta=$_POST['uyeliktext'];
    $uyeisteksql="INSERT INTO uyeistegi (uyeistegi_eposta)values('".$uyeeposta."')";
        if ($baglanti->query($uyeisteksql) === TRUE) 
        {
     echo "<script language='javascript'>alert('İsteğiniz Gönderildi Size E Posta İle Geri Dönüş Sağlanacaktır.')</script>";
     header("Refresh: 0.5; url=index.php");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}




/*Üye Ceza Alanı*/

if ($_POST['uyecezagir']) {
    $uye_cezaid=$_POST['uyeidceza'];
    $uye_cezasi=$_POST['uyeceza'];
    $uyecezasql="UPDATE uyeler SET uye_ceza='$uye_cezasi' WHERE uye_id='$uye_cezaid'";
        if ($baglanti->query($uyecezasql) === TRUE) 
        {
     echo "<script language='javascript'>alert('İşlem Başarılı.')</script>";
     header("Refresh: 0.5; url=admin/memberspun");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}







/*Kitap Bağışlayanlar*/

if ($_POST['eklebagis']) {
    $bagiskisiadi=$_POST['bagiskisiad'];
    $bagiskisiposta=$_POST['bagiskisimail'];
    $bagiskitapadii=$_POST['bagiskitap'];
    $uyeisteksql="INSERT INTO kitap_bagisi (bagisyapanadi , bagisyapaneposta , bagiskitapadi)values('".$bagiskisiadi."','".$bagiskisiposta."','".$bagiskitapadii."')";
        if ($baglanti->query($uyeisteksql) === TRUE) 
        {
     echo "<script language='javascript'>alert('Bağış İçin Teşekkür Ederiz.')</script>";
     header("Refresh: 0.5; url=admin/index.php");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}



?>