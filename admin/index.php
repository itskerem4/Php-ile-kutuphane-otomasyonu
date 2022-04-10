<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div id="kapsayici">

		<div id="ust">
			<div class="logo"><a href="../index.php">Kütüphane Otomasyonu</a></div>
			<div class="menu">
				<ul>
					<li><a href="../index.php">Anasayfa</a></li>
					<li><a href="../about.php">Hakkımızda</a></li>
					<li><a href="../contact.php">İletişim</a></li>
					<li><a href="../contactform.php">İstek Ve Öneri</a></li>
					<li><a href="index.php" style="color: red;">Admin</a></li>
				</ul>
			</div>
		</div>

		<div id="orta">
			<div class="icerikadmin">
				<center>Admin Giriş Paneli</center>
			</div>
				<div class="giris">
					<form method="post" action="login.php">
					<input type="text" name="user" placeholder="Kullanıcı Adı"><br><br>
					<input type="password" name="pass" placeholder="Şifre"><br><br>
					<input type="submit" name="girisyap" value="Giriş Yap">
					</form>
				</div>
			</div>
			<div class="temizle"></div>
		</div>
	</div>
</body>
</html>