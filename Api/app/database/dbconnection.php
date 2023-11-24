<?php

// api/app/database/DbConnection.php

namespace App\Database;

class DbConnection
{
    private const DB_HOST = 'your_database_host';
    private const DB_NAME = 'your_database_name';
    private const DB_USER = 'your_database_user';
    private const DB_PASSWORD = 'your_database_password';

    private $connection;

    public function connect()
    {
        $this->connection = new \mysqli(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function closeConnection()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}
