<?php

abstract class DbConnection
{
    public function __construct($user, $password, $database, $port, $server)
    {
        $this->user     = $user;
        $this->password = $password;
        $this->database = $database;
        $this->port     = $port;
        $this->server   = $server;
    }

    abstract public function connect();
    abstract public function disconnect();
    abstract public function runQuery($sql, $params = []);
    abstract public function runStatement($sql, $params = []);
}