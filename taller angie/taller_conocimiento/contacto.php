
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<div id="header">
			<div class="container">
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Contactemonos</a></h1>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li class="active"><a href="contacto.html">Contacto</a></li>
						
					</ul>
				</nav>

			</div>
		</div>
		<!-- Header -->

		<div id="banner">&nbsp;</div>


	<form action="contacto.php" method="post">
		<div id="featured">
			<div class="container">
				<div class="row">
				<?php  

	if (isset($_POST['submit'])) {
	
		if (isset($_POST['Nombre'])) {
			echo "<br> Nombre: " . $_POST['Nombre'];

		}

	}

	if (isset($_POST['submit'])) {
	
		if (isset($_POST['Apellido'])) {

			echo "<br> Apellido: " . $_POST['Apellido'];

		}

	}

	if (isset($_POST['submit'])) {
	
		if (isset($_POST['Telefono'])) {
			echo "<br> Telefono: " . $_POST['Telefono'];

		}

	}

	if (isset($_POST['submit'])) {
	
		if (isset($_POST['Correo'])) {
			echo "<br> Correo : " . $_POST['Correo'];

		}

	}

?>

				</div>
			</div>
		</div>
	</form>	

		
		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				
				<p>Angie Lorena Ibarguen</p>
				
				<p>1354951</p>

			</div>
		</div>


</body>
</html>