<?php
include "config.php";
error_reporting(0);
if($_POST['sil']){
    $silineceksql=$_POST['silinecekveri'];
    $silineceksqli="DELETE FROM kitap WHERE kitap_id='$silineceksql'";

     if ($baglanti->query($silineceksqli) === TRUE) 
        {
     echo "<script language='javascript'>alert('Başarıyla Silindi !')</script>";
     header("Refresh: 0.5; url=admin/index.php");
        } 
        else 
        {
    echo "Hata: " . $ekleme. "<br>" . $baglanti->error;
        }
}
?>