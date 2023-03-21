<?php

namespace App\Services;

use App\Services\ErrMessage,
    App\config\DatabaseConfig,
    PDOException,
    PDO;


class DBConnection
{
    public static array $Config = [];
    protected static string $Message = '';

    public static function ReadConfig() :PDO
    {
        self::$Config = DatabaseConfig::$DBConfig;
        if(!empty(self::$Config)){
            if(self::CheckEmpty(self::$Config)){
                echo self::$Message;
                return self::Connect();
            }
            else{
                echo self::$Message;
                die;
            }
        }
        else{
            echo ErrMessage::Error(0);
            die;
        }
    }

    protected static function Connect(): PDO
    {
        try {
            $DBConn = new PDO(self::$Config['DB_Driver'] . ':host=' . self::$Config['DB_Host'] . ';port=' . self::$Config['DB_Port'] . ';dbname=' . self::$Config['DB_Name'] . ';charset=' . self::$Config['DB_Charset'], self::$Config['DB_User'], self::$Config['DB_Pass'], array(
                PDO::ATTR_PERSISTENT => true
            ));
            return $DBConn;
        }catch (PDOException $e){
            echo "Error:" . $e->getMessage() . "<br/>";
            die();
        }
    }
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


}