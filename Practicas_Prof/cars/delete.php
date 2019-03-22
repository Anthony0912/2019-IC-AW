<?php

require_once '../shared/sessions.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$id = $_GET['id'] ?? 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $car_model->delete($id);
    echo json_encode(['result' => 'OK']) ;
}
