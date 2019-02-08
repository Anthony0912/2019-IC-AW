<!DOCTYPE html>
<html>
<head>
	<title>Página 1</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$nombre 		  = $_POST['nombre'] ?? '';
		$pais 			  = $_POST['pais'] ?? '';
		$sexo             = $_POST['sexo'] ?? '';
		$fecha_nacimiento = $_POST['fecha_nacimiento'] ?? '';
	?>
	<h1>Hello World</h1>
	<form method="POST">
		<label>Nombre:</label>
		<input type="text" value="<?=$nombre?>" name="nombre" required>
		<br>
		<label>País:</label>
		<select name="pais" required>
			<option <?= $pais == 'Costa Rica' ? 'selected' : ''?>>Costa Rica</option>
			<option <?= $pais == 'Panama' ? 'selected' : ''?>>Panama</option>
			<option <?= $pais == 'Honduras' ? 'selected' : '' ?>>Honduras</option>
			<option <?= $pais == 'Nicaragua' ? 'selected' : '' ?>>Nicaragua</option>
			<option <?= $pais == 'El Salvador' ? 'selected' : '' ?>>El Salvador</option>
		</select>
		<br>
		<label>Sexo:</label>
		<input type="radio" name="sexo" value="M" required <?= $sexo == 'M' ? 'checked' : '' ?>> Masculino
		<input type="radio" name="sexo" value="F" required <?= $sexo == 'F' ? 'checked' : '' ?>> Femenino
		<br>
		<label>Fecha Nacimiento:</label>
		<input type="date" name="fecha_nacimiento" required value="<?=$fecha_nacimiento?>">
		<br>
		<input type="submit" value="OK">
	</form>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Pais</th>
			<th>Sexo</th>
			<th>Fecha Nacimiento</th>
		</tr>
		<tr>
			<td><?= $nombre ?></td>
			<td><?= $pais ?></td>
			<td><?= $sexo ?></td>
			<td><?= $fecha_nacimiento ?></td>
		</tr>
	</table>
</body>
</html>