<html>
<head>
	<title>Inicio de sesi�n</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" href="estilo/form.css" type="text/css" media="all" />
	<link rel="stylesheet" href="estilo/login.css" type="text/css" media="all" />
	<link rel="stylesheet" href="estilo/alerts.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" >
		$(document).ready(function(){
			$("#usuario").focus();
		});
</script>
</head>
<body>
		<div id="CONTENEDOR">
			<div id="CONTENIDO">
				<form method="post" action="" />
						<p class="logtitle">Es necesario autentificarse</p>
						<?php echo $msg; ?><br />
						Nombre de usuario:<br />
						<input type="text" name="uname" id="usuario" /><br /><br />
						Contrase�a:<br />
						<input type="password" name="pwd" /><br />
						Recordar mi sesi�n: <input type="checkbox" name="remember" value="1" /><br /><br />
						<input type="submit" value="login" /><br />
				</form>
			</div>
		</div>
</body>
</html>