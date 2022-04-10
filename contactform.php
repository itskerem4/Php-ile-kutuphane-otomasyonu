
<!DOCTYPE html>
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
			<div class="icerikcontactform">
				<center>
				İstek Ve Öneri Formu<br><br>
				<form method="post" action="insertsql.php">
					<input type="text" name="eposta" placeholder="E-Posta"><br><br>
					<input type="text" name="konu" placeholder="Konu"><br><br>
					<textarea name="icerik" placeholder="İçerik"></textarea><br><br>
					<input type="submit" name="istekgonder" value="Gönder">
					</form><br><br>
					</center>
			</div>
			<div class="temizle"></div>
		</div>
	</div>
</body>
</html>