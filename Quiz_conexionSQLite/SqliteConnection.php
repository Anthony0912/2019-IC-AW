<?php

require_once './DbConnection.php';

class SqliteConnection extends DbConnection
{
    private $connection;
    public function __construct($database)
    {
        parent::__construct($database);
    }
    public function connect()
    {
        $this->connection = open($database);
    }

    public function disconnect()
    {
        $this->connection->close();
    }

    public function runQuery($sql, $params = [])
    {
        $stmt = $this->connection($sql, $params);
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function runStatement($sql, $params = [])
    {
        $stmt = $this->connection->prepare($sql);
        if ($params) {
            $stmt->bind_param($this->dbTypes($params), ...$params);
        }
        $stmt->execute();
        return $stmt;
    }
}

$db = new SqliteConnection('C:\src\www\2019-IC-AW\Quiz_conexionSQLite\datebase.db');
$result = $db->query('select * from studens');
while($row = $result->fetchArray(SQLITE3_ASSOC)){
    echo $row['name'];
} 