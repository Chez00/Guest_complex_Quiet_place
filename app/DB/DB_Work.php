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
    public static function DBOperation(array $mass): void{
        $pdo = self::Connect();
        if ($mass['operation'] == 'Add'){

            $res = DBFunctions::ReadDB($mass['value'], $mass['DB_table']);
//            var_dump($res);
//            DBFunctions::AddDB($mass['value'], $mass['DB_table'], $pdo);

        }
        elseif ($mass['operation'] == 'Edit'){

        }
        elseif ($mass['operation'] == 'Dell'){

        }
        else{

        }
    }
}