<?php
require_once './shared/sessions.php';
require_once './shared/db.php';

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    return header('Location: /');
}

$user = $user_model->find($_SESSION['user_id']);

require_once './shared/header.php';
?>

    <h1>Bienvenido: <?=$user['username']?></h1>
    <a href="/logout.php">Salir</a>

<?php require_once './shared/footer.php' ?>