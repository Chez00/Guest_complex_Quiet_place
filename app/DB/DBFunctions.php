<?php

namespace App\DB;

use App\Services\DBConnection;

class DBFunctions
{

    public static function AddDB(array $params, string $DBName,): void{
        $request = self::CreateRequest('Add',$DBName,$params);
        $db = DBConnection::ReadConfig();
        $res = $db->prepare($request);
        $res->execute($params);
    }
    public static function EditDB(array $params, string $DBName): void{

    }
    public static function DellDB(array $params, string $DBName): void{
        $request = self::CreateRequest('Dell',$DBName,$params);
        echo $request;
        $db = DBConnection::ReadConfig();
        $res = $db->prepare($request);
        $res->execute($params);
    }
    public static function ReadDB(array $params ,string $DBName): array{
        $request = self::CreateRequest('Read',$DBName,$params);
        $db = DBConnection::ReadConfig();
        $res = $db->prepare($request);
        $res->execute($params);
        return $res->fetchAll();
    }
    protected static function CreateRequest( string $operation, string $DBName, array $param): string
    {
        $result = '';
        if ($param){
            $array = array_keys($param);
        }
        if ($operation == 'Add'){
            $result = "insert into {$DBName} (";
            foreach ($param as $x => $value){
                if ($x == end($array)):  $result .= $x; else: $result .= $x.', '; endif;
            }
            $result .= ') value (';
            foreach ($param as $x => $value){
                if ($x == end($array)):  $result .= ':'.$x; else: $result .= ':'.$x.', '; endif;
            }
            return $result.')';
        }
        elseif ($operation == 'Edit'){
            return $result;
        }
        elseif ($operation == 'Dell'){
            return "delete from ".$DBName." Where ID = :ID";
        }
        else{
            $result = 'Select '.'*'.' From '.$DBName.' ';
            if($param){
                $coin = 0;
                $result .= 'Where ';
                foreach ($param as $x){
                    if(array_key_exists( $array[$coin] , $param) != null){
                        if ($x == end($param)): $result .= $array[$coin].' = :'. $array[$coin]; else: $result .= $array[$coin].' = :'. $array[$coin]. ' and '; endif;
                        $coin++;
                    }
                }
            }
            return $result;
        }

    }
}