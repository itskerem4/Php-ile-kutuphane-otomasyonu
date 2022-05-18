<?php 
	error_reporting(0);
	include "config.php";

	if ($_POST){
		$kitapadi=$_POST['aramaadi'];
		$buladi="SELECT * FROM kitap where kitap_adi='$kitapadi'";
		$adbulma=$baglanti->query($buladi);
	}
	if ($_POST){
		$kitapaciklama=$_POST['aramaadi'];
		$bulaciklama="SELECT * FROM kitap where kitap_adi='$kitapaciklama'";
		$aciklamabulma=$baglanti->query($bulaciklama);
	}
	if ($_POST){
		$kitapyazar=$_POST['aramaadi'];
		$bulyazar="SELECT * FROM kitap where kitap_adi='$kitapyazar'";
		$yazarbulma=$baglanti->query($bulyazar);
	}
	
	if ($_POST){
		$kitapgorsel=$_POST['aramaadi'];
		$bulgorsel="SELECT * FROM kitap where kitap_adi='$kitapadi'";
		$gorsel=$baglanti->query($bulgorsel);
	}
	$sorgusistem ="SELECT * FROM kitap";
	$sorgusistemsql=$baglanti->query($sorgusistem);


	$adminsorgu="SELECT * FROM admin";
	$adminsql=$baglanti->query($adminsorgu);

	$isteksorgu="SELECT * FROM istekoneri";
	$istekalanisql=$baglanti->query($isteksorgu);

	$uyesorgusu="SELECT * FROM uyeler";
	$uyesorgusql=$baglanti->query($uyesorgusu);

	$kitapsorgusu="SELECT * FROM kitap_grscks";
	$kitapsorgusql=$baglanti->query($kitapsorgusu);

	$uyeisteksorgu="SELECT * FROM uyeistegi";
	$uyeisteksorgusql=$baglanti->query($uyeisteksorgu);

	$bagissorgu="SELECT * FROM kitap_bagisi";
	$bagissorgusql=$baglanti->query($bagissorgu);
?>