<?php

var_dump(['asd' => 1]);
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    return header('Location: /');
}
