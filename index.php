<?php
include "searchsql.php";
error_reporting(0);
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div id="kapsayici">

		<div id="ust">
			<div class="logo"><a href="index.php">Kütüphane Otomasyonu</a></div>
			<div class="menu">
				<ul>
					<li><a href="index.php">Anasayfa</a></li>
					<li><a href="about.php">Hakkımızda</a></li>
					<li><a href="contact.php">İletişim</a></li>
					<li><a href="contactform.php">İstek Ve Öneri</a></li>
					<li><a href="admin/index.php" style="color: red;">Admin</a></li>
				</ul>
			</div>
		</div>
		<div id="orta">
			<div class="icerik">
				<div class="icerikindex">
				Sistemdeki Kitaplar<br><br>
				<center>
				<table width="500" cellpadding="2" border="1">
					<tr>
						<td width="250" style="color: red; font-family: sans-serif;">Kitap Adı</td>
						<td width="250" style="color:red; font-family:sans-serif;">Kitap Yazarı</td>
					</tr>
				</table>
					<?php 
				if ($sorgusistemsql) {
					while ($veri = $sorgusistemsql->fetch_assoc()) {
						echo
						"<table width ='500' cellpadding='2' border='1'>".
						"<tr>".
						"<td width='250'>".$veri["kitap_adi"]."</td>"
						."<td width='250'>".$veri["kitap_yazari"]."</td>"
						."</tr>"
						."</table>";
						
					}
				}
				?>
				</center>
				</div>
			</div>
			<div class="yan-menu">
				<form method="post">
					<b><u>Kitabı Ara</u></b><br><br>
					<input type="search" name="aramaadi" placeholder="Kitap Adını Gir"><br><br>
					<input type="submit" name="gonder" value="Ara"><br><br>
				</form>
				<u><b>Kitap Resmi</b></u><br>
				<?php
				if ($gorsel){
					while ($gorselbul=$gorsel->fetch_assoc()) {
						echo '<img src="'.$gorselbul["kitap_resim"].'" wdith="300" height="200"/>';
					}
				}
				?><br><br>
				<u><b>Kitap Adı</b></u><br>
				<?php
				if ($adbulma){
					while ($yazdiradi=$adbulma->fetch_assoc()) {
						echo $yazdiradi["kitap_adi"];
					}
				}
				?><br><br>
				<u><b>Kitap Yazarı</b></u><br>
				<?php
				if ($yazarbulma) {
					while ($yazdiryazar=$yazarbulma->fetch_assoc()) {
						echo $yazdiryazar["kitap_yazari"];
					}
				}
				?><br><br>
				<u><b>Kitap Açıklaması</b></u><br>

				<?php
				if ($aciklamabulma) {
					while ($yazdiraciklama=$aciklamabulma->fetch_assoc()) {
						echo "<table width='270'>"
						."<tr>".
						"<td width='270'>".
						$yazdiraciklama["kitap_aciklama"]."</td>"
						."</tr>".
						"</table>";
					}
				}
				?>
			</div>
			<div class="temizle"></div>
		</div>
	</div>
</body>
</html>