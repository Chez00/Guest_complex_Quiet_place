<?php

namespace App\DB;

use App\Services\DBConnection,
    App\DB\DBFunctions;



class DB_Work
{
    public static function Connect(): \PDO
    {
        $DBConnect = DBConnection::getInstance();
        return $DBConnect::ReadConfig();
    }
    public static function DBOperation(array $mass): ?array
    {
        if ($mass['operation'] == 'Add'){
            DBFunctions::AddDB($mass['value'], $mass['DB_table']);
            return ['ok' => 'true'];
        }
        elseif ($mass['operation'] == 'Edit'){
            return [];
        }
        elseif ($mass['operation'] == 'Dell'){
            DBFunctions::DellDB($mass['value'], $mass['DB_table']);
            return ['ok' => 'true'];
        }
        else{
            return DBFunctions::ReadDB($mass['value'], $mass['DB_table']);
        }
    }
}