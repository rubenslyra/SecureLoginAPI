<?php

// api/app/database/IDbConnection.php

namespace App\Database;

interface IDbConnection
{
    public function connect();
    public function getConnection();
    public function closeConnection();
}
