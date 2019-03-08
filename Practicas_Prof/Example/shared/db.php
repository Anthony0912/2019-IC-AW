<?php

require_once __DIR__ . '/../Db/PgConnection.php';
require_once __DIR__ . '/../Models/User.php';
require_once __DIR__ . '/../Models/Car.php';

use Db\PgConnection;

$con = new PgConnection('postgres', 'postgres', 'university', 5432, 'localhost');
$con->connect();

$user_model = new Models\User($con);
$car_model = new Models\Car($con);

