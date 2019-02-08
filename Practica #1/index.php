<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario php</title>
</head>
<body>
    <?php
    $codigo = $_GET['codigo'] ?? '';
    $nombre_pieza = $_GET['nombre_pieza'] ?? '';
    $estado = $_GET['estado'] ?? '';
    $cantidad = $_GET['cantidad'] ?? '';
    $fecha_ingreso = $_GET['fecha_ingreso'] ?? '';
    ?>
    <form action="GET">
        <label for="codigo">Código</label>
        <input type="number" name="codigo" id="" value="<?= $codigo ?>" required>
        <br>
        <label for="nombre_pieza">Nombre pieza</label>
        <input type="text" name="nombre_pieza" value="<?= $nombre_pieza ?>" required>
        <br>
        <label for="estado_pieza">Estado</label>
        <input type="radio" name="estado_pieza" value="U" value="<?= $estado_pieza == 'U' ? 'checked' : '' ?>" required>Usada
        <input type="radio" name="estado_pieza" value="N" value="<?= $estado_pieza == 'N' ? 'checked' : '' ?>" required>Nueva
        <br>
        <label for="cantidad">Cantidad de piezas</label>
        <select name="cantidad" id="" required>
            <option <?= $cantidad == '1' ? 'selected' : '' ?>>1</option>
            <option <?= $cantidad == '2' ? 'selected' : '' ?>>2</option>
            <option <?= $cantidad == 'más de 3' ? 'selected' : '' ?>>más de 3</option>
        </select>
        <br>
        <label for="fecha_ingreso">Fecha de ingreso</label>
        <input type="date" name="fecha_ingreso" value="<?= $fecha_ingreso ?>" required>
        <br>
        <input type="submit" value="ok">
    </form>
</body>
</html>