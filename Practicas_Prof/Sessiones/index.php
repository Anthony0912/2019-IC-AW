<?php
require_once './shared/sessions.php';
require_once './shared/db.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$result = $con->runQuery('select * from users where username = $1 and password = $2', [$username, $password]);

if ($result) {
	$_SESSION['user_id'] = $result[0]['id'];
	return header('Location: /home.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST">
		<label>Username:</label>
		<input type="text" name="username" value="<?=$username?>">
		<label>Password:</label>
		<input type="password" name="password">
		<button>Login</button>
	</form>
</body>
</html>