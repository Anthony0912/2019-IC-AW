<?php
require_once './shared/sessions.php';
require_once './shared/db.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$user = $user_model->login($username, $password);

if ($user != null) {
    $_SESSION['user_id'] = $user['id'];
    return header('Location: /home.php');
}
require_once './shared/header.php';
?>
<form method="POST">
    <label>Username:</label>
    <input type="text" name="username" value="<?=$username?>">
    <label>Password:</label>
    <input type="password" name="password">
    <button>Login</button>
</form>

<?php require_once './shared/footer.php' ?>