<?php 
require_once './shared/sessions.php';
require_once './shared/db.php';

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
	return header('Location: /');
}

$user = $con->runQuery('select * from users where id = $1', [$_SESSION['user_id']])[0];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Bienvenido: <?=$user['username']?></h1>
	<a href="/logout.php">Salir</a>
</body>
</html>