<?php

namespace App\DB;

interface DB_Connection
{
    public function connect();

    public function disconnect();
}
