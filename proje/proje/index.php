<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kayıt Ol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  	<?php
  		include("baglanti.php");

  		if ($_POST)
  		{
				$isim = $_POST['isim'];
  			$soyisim = $_POST['soyisim'];
  			$email = $_POST['email'];
  			$parola = $_POST['parola'];
  			$ptekrar = $_POST['ptekrar'];
  			$dtarih = $_POST['dtarih'];
  			$cinsiyet = $_POST['cinsiyet'];
  		}
  	?>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
		    <a class="navbar-brand" href="index.php">Final</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="index.php">Kayıt Ol</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="listele.php">Listele</a>
		        </li>
		      </ul>
		    </div>
		</div>
	</nav>

	<div class="container mt-5 p-4 bg-dark-subtle">
		<form onsubmit="return kontrol()" name="form" action="index.php" method="POST">
			<div class="mb-3">
				<?php
			      if ($_POST)
			      {
			      	$sorgu = "SELECT email FROM kullanicilar WHERE email = '$email'";
			      	$cevap = mysqli_query($baglanti, $sorgu);
				    if (mysqli_num_rows($cevap) > 0)
				    {
				    	echo "<p style='color: red;'>Bu e-posta başkası tarafından kullanılıyor!<p>";
				    }

				    else if ($ptekrar != $parola)
				    {
				    	echo "<p style='color: red;'>Parola ve parola tekrar uyuşmuyor!<p>";
				    }

				    else
				    {
				    	$sorgu = "INSERT INTO kullanicilar(isim, soyisim, email, parola, dtarih, cinsiyet) VALUES('$isim', '$soyisim', '$email', '$parola', '$dtarih', '$cinsiyet')";
        				if (mysqli_query($baglanti, $sorgu))
				        {
				          echo "<p style='color: green;'>Kaydınız başarılı bir şekilde oluşturuldu!<p>";
				        }
				    }
			      }
				?>
			    <label for="isim" class="form-label">İsim</label>
			    <input type="text" class="form-control" id="isim" name="isim">
			</div>
		  	<div class="mb-3">
			    <label for="soyisim" class="form-label">Soyisim</label>
			    <input type="text" class="form-control" id="soyisim" name="soyisim">
		  	</div>
			<div class="mb-3">
				<label for="email" class="form-label">E-posta</label>
				<input type="text" class="form-control" id="email" name="email">
			</div>
		  	<div class="mb-3">
		  		<label for="parola" class="form-label">Parola</label>
		    	<input type="password" class="form-control" id="parola" name="parola">
		  	</div>
		  	<div class="mb-3">
		  		<label for="ptekrar" class="form-label">Parola (Tekrar)</label>
		    	<input type="password" class="form-control" id="ptekrar" name="ptekrar">
		  	</div>
		  	<div class="mb-3">
		  		<label for="dtarih" class="form-label">Doğum Tarihi</label>
		    	<input type="date" class="form-control" id="dtarih" name="dtarih">
		  	</div>
		  	<div class="mb-3">
		  		<label for="cinsiyet" class="form-label">Cinsiyet</label>
		    	<select id="cinsiyet" name="cinsiyet" class="form-select">
			  		<option value="Kadın">Kadın</option>
			  		<option value="Erkek">Erkek</option>
				</select>
		  	</div>
		  	<input type="submit" name="submit" class="btn btn-primary" value="Kayıt Ol">
		</form>
	</div>

		<script>
		function kontrol(){
			var isim = document.getElementById('isim').value.trim();
			var soyisim = document.getElementById('soyisim').value.trim();
			var email = document.getElementById('email').value.trim();
			var parola = document.getElementById('parola').value.trim();
			var ptekrar = document.getElementById('ptekrar').value.trim();
			var dtarih = document.getElementById('dtarih').value.trim();
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

			if (isim == "")
			{
				alert("İsim boş geçilemez!");
				return false;
			}

			if (soyisim == "")
			{
				alert("Soyisim boş geçilemez!");
				return false;
				
			}

			if (email == "")
			{
				alert("E-posta boş geçilemez!");
				return false;
			}

			else if (reg.test(email) == false)
			{
				alert("Girdiğiniz e-posta geçerli değil!");
				return false;
			}

			if (parola == "")
			{
				alert("Parola boş geçilemez!");
				return false;
			}
			
			if (parola.length > 15)
			{
				alert("Parola maksimum 15 karakter olabilir!");
				return false;
			}

			if (ptekrar == "")
			{
				alert("Parola tekrar boş geçilemez!");
				return false;
			}

			if (dtarih == "")
			{
				alert("Doğum tarihi boş geçilemez!");
				return false;
			}
			return true;
		}
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>