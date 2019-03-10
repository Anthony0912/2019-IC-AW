<?php

namespace Models {

    class User
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function login($username, $password)
        {
            return $this->connection->runQuery('select * from users where username = $1 and password = md5($2)', [$username, $password])[0];
        }

        public function find($id)
        {
            return $this->connection->runQuery('select * from users where id = $1', [$id])[0];
        }
    }

}

