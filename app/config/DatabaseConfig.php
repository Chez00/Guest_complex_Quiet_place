<?php

namespace App\config;
final class DatabaseConfig
{
    private static ?self $instance = null;
    public static array $DBConfig = [
        "DB_Driver" => 'mysql',
        "DB_Host" => '127.0.0.1',
        "DB_Port" => '3306',
        "DB_Name" => 'TixMestoBD',
        "DB_User" => 'root',
        "DB_Pass" => '',
        "DB_Charset" => 'utf8'
    ];

    public static function getInstance(): self
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function __clone(): void
    {
        // TODO: Implement __clone() method.
    }
    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }
}