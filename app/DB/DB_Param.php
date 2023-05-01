<?php

namespace App\DB;

class DB_Param
{
    private static array $mass = [
        'operation' => 'Read',
        'DB_table' => null,
        'value' => null
    ];
    public static function Params(string $operation, string $table, array $value = null): array
    {
        $params = DB_Param::$mass;
        $params['operation'] = $operation;
        if($operation == 'Read'){
            unset($params['value']);
        }
        else{
            $params['value'] = $value;
        }
        $params['DB_table'] = $table;
        return $params;
    }

}