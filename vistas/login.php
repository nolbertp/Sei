<!DOCTYPE html>
<html>
	<head>
		<title>Sistema</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-acale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="./public/css/bootstrap.min.css">

		<script type="text/javascript" language="javascript">

			function validacion ()
			{
				if (document.form.usuario.value == 'admin' && document.form.contraseña.value == 'admin') {

					alert ("Bienvenido Al Sistema")
					window.location= "menu.html";
					

				}

				else {

					alert ("Error Al Ingresar");

				}
			}

			function prueba1 (foco){

				foco.style.borderColor="red";
				foco.style.background="yellow";

			}

			function prueba2 (foco){

				foco.style.background="white";
				foco.style.borderColor="white";

			}

			 </script>


	</head>
	<body background="./public/imagenes/form.jpg">
		<font color="white">
		<font face="Lucida Calligraphy">
			<div class="container">
				<br>
				<header>
					<!--<div class="col-md-2" id="img">
						<img src="../public/imagenes/MED.jpg" write="120" height="120">
					</div>-->

						<div class="col-md-12">
							<center>
							<h3>L. B. "Juan Bautista Rodriguez"</h3></center>
						</div>
	
				
				</header>
			</div>


			<div class="container">
				<form action="menu.html" class="form-horizontal">
					<center><img src="./public/imagenes/LogoJuanBautista.png" write="150" height="150">
					<br><br>

					<h3>Sistema Educativo De Inscripción</h3>
								<h3>SEI</h3>

					<div class="form-group">
						<label for="usuario" class="control-label col-md-4">Usuario:</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="usuario" placeholder="Usuario" onfocus="prueba1(this)" onblur="prueba2(this)" required >
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="control-label col-md-4">Contraseña:</label>
						<div class="col-md-4">
							<input type="password" class="form-control" id="contraceña" placeholder="Contraseña" onfocus="prueba1(this)" onblur="prueba2(this)" required >
						</div>
					</div>

					<font color="black">
					<div>
	<!-- onclick="redireccion()" -->
							<input type="submit" name="Ingresar" value="Ingresar" onclick="validacion()" >
							<input type="button" name="Borrar" value="Borrar">
						</div>
					</font>
					</center>
				</form>
				
				<center>
				<footer>
					<div class="form-group">
						<div class="col-md-12">
							<h3></h3>
						</div>
					</div>
				</footer>
				</center>
			</div>
		</font>
		</font>
	</body>
</html>
