<?php

namespace App\DB\Operations;
use RedBeanPHP\R;
class DB_Delete implements \App\config\Interface\DB_Operation
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
        $dell = $this->Load($this->value);
        R::trash($dell);
    }
    protected function Load(array $param): \RedBeanPHP\OODBBean
    {
        return R::load($this->table, $param['id']);
    }
}