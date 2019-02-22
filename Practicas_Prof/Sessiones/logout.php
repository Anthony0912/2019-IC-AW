<?php 
require_once './shared/sessions.php';

session_destroy();

return header('Location: /');