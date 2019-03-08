<?php
require_once '../shared/header.php';
require_once '../shared/sessions.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$id = $_GET['id'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $car_model->delete($id);
    return header('Location: /cars');
}

?>

<div class="container">
    <p>
    	Are you sure to delete the car with the id: <?=$id?>?
    </p>
    <form method="POST">
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a href="/cars" class="btn btn-danger">Cancelar</a>
    </form>
</div>

<?php require_once '../shared/footer.php' ?>