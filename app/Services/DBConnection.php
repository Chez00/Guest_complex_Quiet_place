<?php

namespace App\Services;

use App\Services\ErrMessage,
    App\config\DatabaseConfig,
    PDOException,
    PDO;


final class DBConnection
{
    private static ?self $instance = null;
    public static array $Config = [];
    protected static string $Message = '';

    public static function getInstance(): self
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }


    public static function ReadConfig() :PDO
    {
// **** Чтение конфига к базе данных
        $DatabaseConfig = DatabaseConfig::getInstance();
        self::$Config = $DatabaseConfig::$DBConfig;
        if(!empty(self::$Config)){
//          **** Проверка на пустоту конфигурации базы данных
            if(self::CheckEmpty(self::$Config)){
//              **** подключение к базе
                return self::Connect();
            }
            else{
//              **** Вывод ошибки
                echo self::$Message;
                die;
            }
        }
        else{
            echo ErrMessage::Error(0);
            die;
        }
    }
//  **** Функция подключения
    protected static function Connect(): PDO
    {
        try {
//          Подключение к базе
            $DBConn = new PDO(self::$Config['DB_Driver'] . ':host=' . self::$Config['DB_Host'] . ';port=' . self::$Config['DB_Port'] . ';dbname=' . self::$Config['DB_Name'] . ';charset=' . self::$Config['DB_Charset'], self::$Config['DB_User'], self::$Config['DB_Pass'], array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::ATTR_PERSISTENT => true
            ));
            return $DBConn;
        }catch (PDOException $e){
//          Вывод ошибки
            echo "Error:" . $e->getMessage() . "<br/>";
            die();
        }
    }
//  **** Функция проверки конфигурации
    private static function CheckEmpty(array $Con) : bool
    {
        $coin = 0;
        foreach($Con as $param) {
            ++$coin;
            if(empty($param) && $coin != 6) {
                self::$Message .= ' ' . ErrMessage::Error($coin);
                return false;
            }
        }
        return true;
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