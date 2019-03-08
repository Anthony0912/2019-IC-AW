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
            return $this->connection->runQuery('SELECT * FROM orders WHERE card_id = $1', [$id])[0];
        }

        public function create($car_id, $status)
        {
            $this->connection->runStatement('INSERT INTO orders (car_id, status) VALUES ($1, $2)', [$car_id, $status]);
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

