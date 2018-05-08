<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos2.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
</head>
<body>
	<div class="contenedor">
		<header>
			<div class="logo">
				<a href="paginaprincipal.php"><img src="img/logo.jpeg" width="150"></a>
				<a href="paginaprincipal.php">Group Trip</a>
				<a href="#" class="btn-menu"><i class="fas fa-bars"></i></a> 
			</div>
			<div class="enlaces">
				<a href="#"><i class="fa fa-binoculars" aria-hidden="true"></i>Búsqueda Palabra Clave</a><input type="text" id="frecuentes" name="frecuentes"  placeholder="palabra buscada"  autofocus>
				
			</div>
			

			
		</header>
		
		<main>
			<article>
				<h1>Preguntas Frecuentes</h1>
				<h2>Pregunta 1?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
				<h2>Pregunta 2?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
				<h2>Pregunta 3?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
				<h2>Pregunta 4?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
				<h2>Pregunta 5?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
				<h2>Pregunta 6?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
				<h2>Pregunta 7?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
				<h2>Pregunta 8?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
				<h2>Pregunta 9?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
				<h2>Pregunta 10?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae praesentium dolorum velit, illo! Dolor aliquid voluptates, fugit laudantium alias, ad velit facilis nisi eveniet similique, minima repudiandae! Voluptates, consectetur!</p>
			</article>	
		</main>
		
		<aside>
			<div class="registrado">
				<form class="" method="post" action="bienvenida.php">
			        <h2 >Login</h2>
			        <label for="inputEmail" >Usuario</label>
			        <input type="text" id="inputEmail" name="usuario" placeholder="Usuario" pattern="[A-Za-z_-0-9]{1,20}" required autofocus>
			        <br>
			        <label for="inputPassword" >Contraseña</label>
			        <input type="password" id="inputPassword" name="contrasena" placeholder="Contraseña" pattern="[A-Za-z_-0-9]{1,20}" required>
			        <div class="checkbox">
			        <br>
			        <label for="acordate">Recordarme</label>
			        <input type="checkbox" value="remember-me" name="recordarme"> 
			        <br>
                    <button type="submit" name="loguear" class="btn">Log In</button>
			    </form>
      		</div>
			<div class="registrarse">
				<h2>Sumate</h2>
				<a href="registro.php" class="btn">Registrarse</a>
			</div>
		</aside>
		<?php require_once 'footer.php'; ?>
	</div>
	
	

</body>
</html>