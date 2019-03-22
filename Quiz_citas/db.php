<?php

require_once __DIR__ . '/PgConnection.php';

use Db\PgConnection;

$con = new PgConnection('postgres', 'postgres', 'citas', 5432, 'localhost');
$con->connect();