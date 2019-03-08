<?php
$title = 'Edit Car';
require_once '../shared/header.php';
require_once '../shared/sessions.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$id    = $_GET['id'] ?? 0;
$brand = $_POST['brand'] ?? '';
$year  = $_POST['year'] ?? '';

$car = $car_model->find($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $car_model->update($id, $brand, $year);
    return header('Location: /cars');
}
?>

<div class="container">
    <h1><?=$title?></h1>

    <?php require_once './form.php' ?>
</div>

<?php require_once '../shared/footer.php' ?>