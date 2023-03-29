<?php

namespace App\DB;

class DBFunctions
{

    public function AddDB(array $params, string $DBName, mixed $pdo): void{
        $request = $this->CreateRequest('Add',$DBName,$params);
        $db = $pdo->prepare($request);
        $db->execute($params);
    }
    public function EditDB(array $params, string $DBName): void{

    }
    public function DellDB(array $params, string $DBName): void{

    }
    public function ReadDB(array $params ,string $DBName, mixed $pdo): void{
        $request = $this->CreateRequest('Read',$DBName,$params);
        var_dump($request);
//        $db = $pdo->prepare($request);
//        $db->execute($params);
    }
    protected function CreateRequest( string $operation, string $DBName, array $param): string
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
            return $result;
        }
        else{
            $result = 'Select '.'*'.' From '.$DBName.' ';
            if($param){
                $coin = 0;
                $result .= 'Where ';
                foreach ($param as $x){
                    if ($x == end($param)): $result .= $array[$coin].' = :'. $array[$coin]; else:  $result .= $array[$coin].' = :'. $array[$coin].' and '; endif;
                    $coin++;
                }
            }
            return $result;
        }

    }
}