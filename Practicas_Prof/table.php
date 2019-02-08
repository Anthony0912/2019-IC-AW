<!DOCTYPE html>
<html>
<head>
	<title>Table Generator</title>
</head>
<body>
	<?php
		require_once './TableGenerator.php'; 

		$rows      = $_GET['rows'] ?? 0;
		$columns   = $_GET['columns'] ?? 0;
		$fill_with = $_GET['fill_with'] ?? '';
	?>
	<form>
		<label>Columns:</label>
		<input type="number" name="columns" value="<?=$columns?>">
		<label>Rows:</label>
		<input type="number" name="rows" value="<?=$rows?>">
		<label>Fill With:</label>
		<input type="text" name="fill_with" value="<?=$fill_with?>">
		<input type="submit" value="Generate Table">
	</form>
	<?php 
		if ($rows && $columns && $fill_with) {

			echo TableGenerator::table($rows, $columns, $fill_with);
		}
	?>
</body>
</html>