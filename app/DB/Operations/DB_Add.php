<?php

namespace App\DB\Operations;
use RedBeanPHP\R;

class DB_Add implements \App\config\Interface\DB_Operation
{
    public array $value;
    public string $table;
    public function __construct(array $value, string $table)
    {
        $this->value = $value;
        $this->table = $table;
    }

    public function Work()
    {
        $keys = array_keys($this->value);
        $add = R::dispense($this->table);
        foreach ($keys as $key){
            $add[$key] = $this->value[$key];
        }
        R::store($add);
    }
}