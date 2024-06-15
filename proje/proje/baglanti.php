<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database";

	$baglanti = mysqli_connect($servername, $username, $password, $dbname);
	mysqli_set_charset($baglanti,"utf8");
	
	if (!$baglanti)
	{
	  die("Bağlantı hatası: " . mysqli_connect_error());
	}
?>