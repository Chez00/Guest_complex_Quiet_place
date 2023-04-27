<?php

namespace App\DB\Operations;
use App\DB\DB_Work,
    RedBeanPHP\R;

class DB_Update implements \App\config\Interface\DB_Operation
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
        $upd = $this->Load(['id'=>$this->value['id']]);
        unset($this->value['id']);
        $keys = array_keys(R::inspect($this->table));
        unset($keys['id']);
        foreach ($keys as $key){
            if(array_key_exists($key, $this->value)){
                $upd[$key] = $this->value[$key];
            }
        }
        R::store($upd);
    }

    protected function Load(array $param): \RedBeanPHP\OODBBean
    {
        return R::load($this->table, $param['id']);
    }
}