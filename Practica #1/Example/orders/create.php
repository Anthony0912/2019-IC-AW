<?php
$title = 'New Order';
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
    <?php require_once './form.php' ?>
</div>

<?php require_once '../shared/footer.php' ?>