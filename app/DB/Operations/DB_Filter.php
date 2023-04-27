<?php

namespace App\DB\Operations;
use RedBeanPHP\R;
class DB_Filter implements \App\config\Interface\DB_Operation
{
    public array $value;
    public string $table;
    public function __construct(array $value, string $table)
    {
        $this->value = $value;
        $this->table = $table;
    }

    public function Work() :array
    {
        $req = "SELECT * FROM {$this->table}";
        $request = $this->Request($req);
        echo $request.' ';
        return R::getAll($request);
    }

    protected function Request(string $req){
        $keys = array_keys($this->value);
        $req .= ' WHERE';
        foreach ($keys as $key){
            $req .= ' '.$key." = '".$this->value[$key]."'";
        }
        return $req;
    }
}