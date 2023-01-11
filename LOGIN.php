<!DOCTYPE html>
<html>
	<head>

		<title>PRIJAVA</title>
		<meta charset = "UTF-8">
		<meta name = "author" content = "Aleksandar Murgoski"/>
		<link rel="stylesheet" type="text/css" href="LOGIN.css" />
		<link rel="website icon" type="png" href="Slike/Login.png" />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">			
	</head>
	<body>
		
		<div class = "centralni">
			<form method="post" autocomplete="off" class = "form" >
				<a href = "LOGIN.php" class = "login_vrh" target="_blank">PRIJAVA</a>
				<a href = "REGISTRACIJA.php" class = "registracija_vrh" target="_blank">REGISTRACIJA</a>
				
				<div class = "login_form">
					<label>Uporabniško ime</label>
					<input type="text" class = "vnosa_polja" name="uporabnisko_ime" required>
				</div>

				<div class = "login_form">
					<label>Geslo</label>
					<input type="password" class = "vnosa_polja" id = "input" name="geslo" required>
					<input type = "checkbox"  class = "prikazi_geslo" onclick="showPw()">
				</div>	

				<input type="submit" id = "gumb_Prijava" value="PRIJAVA">
			</form>
		</div>
	<script src = "registracija.js"></script>
	</body>
</html>