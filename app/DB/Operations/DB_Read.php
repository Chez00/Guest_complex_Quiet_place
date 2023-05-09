<?php

namespace App\DB\Operations;
use RedBeanPHP\R;

class DB_Read implements \App\config\Interface\DB_Operation
{

    public string $table;
    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function Work() :array
    {
        $req = "SELECT * FROM {$this->table}";
        $read = R::getAll($req);
        return $read;
    }
}