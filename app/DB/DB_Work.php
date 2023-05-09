<?php

namespace App\DB;

use App\DB\Operations\DB_Filter;
use App\DB\Operations\DB_Update;
use App\Services\DBConnection,
    App\DB\Operations\DB_Add,
    App\DB\Operations\DB_Read,
    App\DB\Operations\DB_Delete,
    PDOException;



class DB_Work
{
    public static function Connect(): \RedBeanPHP\ToolBox
    {
        $DBConnect = DBConnection::getInstance();
        return $DBConnect::ReadConfig();
    }
    public static function DBOperation(array $mass): ?array
    {
        if ($mass['operation'] == 'Add'){
            $add = new DB_Add($mass['value'], $mass['DB_table']);
            $add->Work();
            return [];
        }
        elseif ($mass['operation'] == 'Update'){
            $add = new DB_Update($mass['value'], $mass['DB_table']);
            $add->Work();
            return [];
        }
        elseif ($mass['operation'] == 'Dell'){
            $dell = new DB_Delete($mass['value'], $mass['DB_table']);
            $dell->Work();
            return [];
        }
        elseif ($mass['operation'] == 'Read'){
            $read = new DB_Read($mass['DB_table']);
            return $read->Work();
        }
        elseif ($mass['operation'] == 'Filter'){
            $filter = new DB_Filter($mass['value'], $mass['DB_table']);
            return $filter->Work();
        }
        else{
            return [];
        }
    }
}