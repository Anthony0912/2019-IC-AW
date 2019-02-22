<?php

require_once __DIR__ . '/../Db/PgConnection.php';

use Db\PgConnection;

$con = new PgConnection('postgres', 'postgres', 'users', 5432, 'localhost');
$con->connect();
