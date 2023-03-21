<?php

namespace App\config;
class DatabaseConfig
{
    public static array $DBConfig = [
        "DB_Driver" => 'mysql',
        "DB_Host" => '127.0.0.1',
        "DB_Port" => '3306',
        "DB_Name" => 'TixMestoBD',
        "DB_User" => 'root',
        "DB_Pass" => '',
        "DB_Charset" => 'utf8'
    ];
}