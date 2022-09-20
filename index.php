<!DOCTYPE html>
<html>
	<head>
		<meta charset= "utf-8">
			<title> Sistema de Contratacion de Bodegas </title>
			<link rel="stylesheet" href="CSS/Estilo.css">
			<link rel="shortcut icon" href="images/favicon.ico"/>
			</head>
		<body>
		
	<div  class="table-responsive" >
		<div  class="login-box" >
			<img class="avatar" src="images/android-icon-144x144.png" alt="Logo de BSF">
			<h1> Login </h1>
			
			<!-- <form action="Comercial/RegistroComercial1.php"> -->
			
			<form action="Comercial/dist/lib/ValidarUsers.php" method='post'>
			
			<!-- USER NAME -->
			<label for="username"> Usuario </label>
			<input type="text" id="usuario" name="usuario" placeholder ="Escriba su Usuario"/></br>
			
			
			<!-- CLAVE USER -->
			<label for="password"> Password </label>
			<input type="password" id="pass" name="pass" placeholder ="Escriba su Password"/>
			
			
			</br>
			 <input type="submit" name="" value="Aceptar"> 
			
			
			<a href="#"> Recupere su Password aqui </a> </br>
			<a href="#"> Para Registrarse aqui </a>
			
			</form>
		
		</div>
	</div>
		
		
		</body>
		
	</html>
