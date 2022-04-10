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
			<div class="icerikcontrolpanel">
				<center><h3 style="font-family: sans-serif;">İçerik Ekleme</h3><br>
				<form method="post" action="../insertsql.php" enctype="multipart/form-data">
					<input type="text" name="kitabinadi" placeholder="Kitap Adı"><br><br>
					<input type="text" name="yazarinadi" placeholder="Yazar Adı"><br><br>
					<textarea name="aciklamaalani" placeholder="Kitap Açıklaması" style="width:300px;
					height: 200px;"></textarea><br><br>
					<input type="file" name="resim"><br><br>
					<input type="submit" name="ekle" value="Ekle"><br><br>
				</form>
				<table width="750" cellpadding="2" border="1">
					<tr>
						<td width="250" style="color: red; font-family: sans-serif;">E-Posta</td>
						<td width="250" style="color:red; font-family:sans-serif;">Konu</td>
						<td width="250" style="color:red; font-family:sans-serif;">İçerik</td>
					</tr>
				</table>
				<?php 
				include "../searchsql.php";

				if ($istekalanisql) {
					while ($veriistek = $istekalanisql->fetch_assoc()) {
						echo
						"<table width ='750' cellpadding='2' border='1'>".
						"<tr>".
						"<td width='250'>".$veriistek["eposta"]."</td>"
						."<td width='250'>".$veriistek["konu"]."</td>"
						."<td width='250'>".$veriistek["icerik"]."</td>"
						."</tr>"
						."</table>";
						
					}
				}
				?>
				</center>
			</div>
			<div class="temizle"></div>
		</div>
	</div>
</body>
</html>