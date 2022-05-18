<?php
include "../searchsql.php";
if ($adminsql) {
	while ($adminbilgi = $adminsql->fetch_assoc()) {

	$user = $adminbilgi['k_adi'];
	$pass = $adminbilgi['k_sifre'];
}
}

function OturumAcikmi()
{
    return (isset($_SESSION['login'])) ? true : false;
}
?>