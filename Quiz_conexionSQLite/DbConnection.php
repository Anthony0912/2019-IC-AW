<?php

abstract class DbConnection
{
    public function __construct($database)
    {
        $this->database = $database;
    }

    abstract public function connect();
    abstract public function disconnect();
    abstract public function runQuery($sql, $params = []);
    abstract public function runStatement($sql, $params = []);
}