<?php 
require_once __DIR__ . '/funciones.php'; 
$f1 = $_GET['f1'] ?? '';
$f2 = $_GET['f2'] ?? '';
$doctor = $_GET['doctor'] ?? '';
$pasiente = $_GET['pasiente'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citas</title>
</head>
<body>
    <form action="" method="GET">
    <label for="">Fecha inicial</label>
    <input type="date" name="f1" value="<?=$f1?>">
    <label for="">Fecha final</label>
    <input type="date" name="f2" value="<?=$f2?>">
    <label for="">Nombre del doctor</label>
    <input type="text" name="doctor" value="<?=$doctor?>">
    <label for="">Nombre del pasiente</label>
    <input type="text" name="pasiente" value="<?=$pasiente?>">
    <button>Buscar</button>

    <div class="container">
    <h1>Citas</h1>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Fecha</th>
            <th>Doctor</th>
            <th>Pasiente</th>
            <th>Motivo</th>
        </tr>
        <?php 
        $citas = filtrar($f1, $f2, $doctor, $pasiente);
            if ($citas) {
                foreach ($citas as $cita) {
        ?>
                <tr>
                <td><?=$cita['fecha'] ?? ''?></td>
                <td><?=$cita['doctor'] ?? ''?></td>
                <td><?=$cita['pasiente'] ?? ''?></td>
                <td><?=$cita['motivo'] ?? ''?></td>               
                </tr>
        <?php 
                }
            }
        ?>
    </table>
    </div>
    </form>
</body>
</html>