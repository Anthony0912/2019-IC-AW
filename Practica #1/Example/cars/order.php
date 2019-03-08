<?php
$title = 'Order';
require_once '../shared/header.php';
require_once '../shared/sessions.php';
require_once '../shared/guard.php';


$brand = $_POST['brand'] ?? '';
$year = $_POST['year'] ?? '';
$car = ['brand' => $brand, 'year' => $year];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../shared/db.php';
    $car_model->create($brand, $year);
    return header('Location: /cars');
}
?>

<div class="container">
    <h1><?=$title?></h1>
    <form method="POST">
    <div class="form-group">
        <label>Brand: </label>
        <input type="text" name="brand" class="form-control" required value="<?=$car['brand']?>">
    </div>
    <div class="form-group">
        <label>Year: </label>
        <input type="num" name="year" class="form-control" required value="<?=$car['year']?>">
    </div>
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a href="/cars" class="btn btn-danger">Cancelar</a>
</form>
</div>

<?php require_once '../shared/footer.php' ?>