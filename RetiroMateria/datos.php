<!DOCTYPE html>
<html>
<head>
	<title>Retiro de Asignaturas</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<table border="0" cellspacing="0" width="500" align="center">

<thead><td class="titulo"><b>Campo</b></td><td class="titulo"><b>Valor</b></td></thead>	
		
<tr><td class="campo">Nombres</td><td class="valor"><?php echo $_POST["name"]; ?></td></tr>
<tr><td class="campo">Apellidos</td><td class="valor"><?php echo $_POST["apellido"]; ?></td></tr>
<tr><td class="campo">Cedula</td><td class="valor"><?php echo $_POST["cedula"]; ?></td></tr>
<tr><td class="campo">Carrera</td><td class="valor"><?php echo $_POST["carrera"]; ?></td></tr>
<tr><td class="campo">Semestre</td><td class="valor"><?php echo $_POST["semestre"]; ?></td></tr>
<tr><td class="campo">Materia</td><td class="valor"><?php echo $_POST["nombreMateria"]; ?></td></tr>
<tr><td class="campo">Codigo</td><td class="valor"><?php echo $_POST["codigo"]; ?> </td></tr>
<tr><td class="campo">U.C.</td><td class="valor"><?php echo $_POST["creditUnits"]; ?></td></tr>
<tr><td class="campo">mensaje</td><td class="valor"><?php echo $_POST["mensaje"]; ?></td></tr>

</table>

</body>
</html>
