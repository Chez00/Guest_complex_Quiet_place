<?php

namespace App\DB;

use App\Services\DBConnection,
    App\DB\DBFunctions;


class DB_Work
{
    public static function Connect(): \PDO
    {
        $DBConnect = new DBConnection();
        return $DBConnect->ReadConfig();;
    }
    public static function DBOperation(array $mass): void{
        $pdo = self::Connect();
        if ($mass['operation'] == 'Add'){
            $db = new DBFunctions;
            var_dump($mass['value']);
            $db->ReadDB($mass['value'], $mass['DB_table'], $pdo);
//            $db->AddDB($mass['value'], $mass['DB_table'], $pdo);

        }
        elseif ($mass['operation'] == 'Edit'){

        }
        elseif ($mass['operation'] == 'Dell'){

        }
        else{

        }
    }
}