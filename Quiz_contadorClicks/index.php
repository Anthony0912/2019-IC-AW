<?php 
session_start();
if (isset($_POST['boton'])) {
    $_SESSION['cont'] = $_SESSION['cont'] += 1; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador de clicks</title>
</head>
<body>
    <form action="" method="post">
    <label for=""><?=$_SESSION['cont']?></label>
    <button name="boton" type="submit">Click</button>
    </form>
</body>
</html>