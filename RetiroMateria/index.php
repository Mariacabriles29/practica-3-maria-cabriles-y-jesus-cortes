<!DOCTYPE html>

<html lang="es">
<head>
	<title>Retiro de Asignaturas</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">


</head>
<body>
	<script src="JS/code.js"></script>
	
	<div class="principal">


		<h1><p id="titulo">SISTEMA DE RETIRO DE ASIGNATURAS</p>

			<img src="imagenes/logo.png" alt="Logo de la Unet" class="logo">

		</h1>

		<form name="formulario" action="datos.php" method="POST">

			<fieldset>
				<div class="row">
					<label for="name">Nombre:</label><br />
					<input id="name" class="imput" name="name" type="text" value="" size="30"><brid
				</div>

				<div class="row">
					<label for="apellido">Apellido:</label><br/>
					<input id="apellido" class="input" type="text" name="apellido" value="" size="30"><br/>
				</div>

				<div class="row">
					<label for="cedula">Cédula:</label><br />
					<input id="cedula" class="imput" name="cedula" type="number" value="" size="30"><br/>

				</div>

				<div class="row">
					<label for="carrera">Carrera que estudia:</label><br/>
					<input id="carrera" class="input" type="text" name="carrera" value="" size="30"><br/>
				</div>

				<div class="row">
					<label for="semestre">Numero del semestre:</label><br/>
					<input id="semestre" class="input" type="text" name="semestre" value="" size="30"><br/>
				</div>
			</fieldset>


			<fieldset>

				<div class="row">
					<label for="nombreMateria">Nombre de la Asignatura:</label><br />
					<input id="nombreMateria" class="imput" name="nombreMateria" type="text" value="" size="30"><br/>

				</div>

				<div class="row">
					<label for="codigo">Código de la materia:</label><br/>
					<input id="codigo" class="input" type="text" name="codigo" value="" size="30"><br/>
				</div>

				<div class="row">
					<label for="creditUnits">Uidades de Crédito:</label><br />
					<input id="creditUnits" class="imput" name="creditUnits" type="number" value="" size="30"><br/>

				</div>

				<div class="row">
					<label for="mensaje">Motivo de Retiro:</label><br/>
					<textarea id="mensaje" class="input" type="text" name="mensaje" ></textarea><br/>
				</div>

			</fieldset>

			<input name="submit_button" type="submit" value="Enviar Retiro">
			<input type="button" onclick="limpiar()" value="Limpiar Campos">	
		</form>
	</div>
</body>
</html>
