<?php

require_once './DbConnection.php';

class PgConnection extends DbConnection
{
    private $connection;
    public function __construct($user, $password, $database, $port, $server)
    {
        parent::__construct($user, $password, $database, $port, $server);
    }

    public function connect()
    {
        $this->connection = pg_connect("host=$this->server port=$this->port dbname=$this->database user=$this->user password=$this->password");
    }

    public function disconnect()
    {
        pg_close($this->connection);
    }

    public function runQuery($sql, $params = [])
    {
        return pg_fetch_all($this->runStatement($sql, $params));
    }

    public function runStatement($sql, $params = [])
    {
        return pg_query_params($this->connection, $sql, $params);
    }
}


$con = new PgConnection('postgres', '12345', 'universidad', 5432, 'localhost');
$con->connect();

$sql = "INSERT INTO students(
    first_name, last_name)
    VALUES ($1, $2);";

$con->runStatement($sql, ['Cristian', 'Lagos']);

//var_dump($con->runQuery('select * from students')); 
print_r($con->runQuery('select * from students where id = $1', [3])); 
