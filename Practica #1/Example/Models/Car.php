<?php

namespace Models {

    class Car
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function find($id)
        {
            return $this->connection->runQuery('SELECT * FROM cars WHERE id = $1', [$id])[0];
        }

        public function create($brand, $year)
        {
            $this->connection->runStatement('INSERT INTO cars (brand, year) VALUES ($1, $2)', [$brand, $year]);
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM cars WHERE id = $1', [$id]);
        }

        public function update($id, $brand, $year)
        {
            $this->connection->runStatement('UPDATE cars SET brand = $2, year = $3 WHERE id = $1', [$id, $brand, $year]);
        }

        public function all()
        {
            return $this->connection->runQuery('SELECT * FROM cars');
        }
    }

}

