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
				<a href="preguntasfrecuentes.php"><i class="fa fa-question-circle" aria-hidden="true"></i>Preguntas Frecuentes</a>
				
			</div>
			
		</header>
		
		<main>
			<article>
				<h1>Group Trip</h1>
				<h2>No tendrás un viaje aburrido</h2>
				<p>Uniéndote a esta red social podrás encontrar comprañeros para el viaje que soñás realizar</p>
				<p>Llená pocos datos y ponete en contacto con gente cerca tuyo que quieren ir a dónde vas vos</p>
				<br>
				<p>Proin fermentum purus nec leo malesuada condimentum. Nunc sed libero erat. Aenean at porta ante. In imperdiet tristique nulla, sed finibus neque varius ac. Vestibulum luctus lobortis nulla, a venenatis enim egestas et. Proin bibendum volutpat tristique. Donec in luctus velit. Aliquam sed venenatis quam. Aenean consectetur egestas arcu ut accumsan. Duis consequat a eros ullamcorper tincidunt. Aenean quis tempor turpis. Nunc sollicitudin, mauris commodo pretium rutrum, velit tellus convallis velit, quis tincidunt purus nulla vitae dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean a dui in leo pretium accumsan et eu nunc. Nunc ultrices nunc sem, in elementum enim ornare ac. Pellentesque mollis viverra elementum. 
				Proin fermentum purus nec leo malesuada condimentum. Nunc sed libero erat. Aenean at porta ante. In imperdiet tristique nulla, sed finibus neque varius ac. Vestibulum luctus lobortis nulla, a venenatis enim egestas et. Proin bibendum volutpat tristique. Donec in luctus velit. Aliquam sed venenatis quam. Aenean consectetur egestas arcu ut accumsan. Duis consequat a eros ullamcorper tincidunt. Aenean quis tempor turpis. Nunc sollicitudin, mauris commodo pretium rutrum, velit tellus convallis velit, quis tincidunt purus nulla vitae dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean a dui in leo pretium accumsan et eu nunc. Nunc ultrices nunc sem, in elementum enim ornare ac. Pellentesque mollis viverra elementum. 
				</p>
			</article>	
		</main>
		
		<aside>
			<div class="registrado">
				<form class="" method="post" action="usuario.php">
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