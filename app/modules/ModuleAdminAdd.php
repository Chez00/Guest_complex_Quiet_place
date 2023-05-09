<?php

namespace App\modules;

use App\DB\DB_Work,
    App\DB\DB_Param;

class ModuleAdminAdd implements \App\config\Interface\ModelPage
{
    public string $isPage;
    public function __construct(string $isPage)
    {
        $this->isPage = $isPage;
    }
    public function openPage()
    {
        $table = 'user';
        $arr = json_decode(file_get_contents('php://input'), true);
        if($arr){
            if ($arr['formName'] == 'AddRoom'){
                var_dump($arr);
                echo '<p>  </p>';
                var_dump($_FILES);
            }
            elseif($arr['formName'] == 'AddAdmin'){
                $par = $arr;
                unset($par['formName']);
                if ($par['login'] != '' or $par['password'] != '' or $par['email'] !=''){
                    if($par['role'] == 'on'): $par['role'] = 0; else: $par['role'] = 1; endif;
                    $par['registration'] = date("Y-m-d H:i:s");
                    $par['password'] = password_hash($par['password'], PASSWORD_DEFAULT);
                    $param = DB_Param::Params('Add', $table , $par);
                    DB_Work::DBOperation ($param);
                }
                else{
                    echo 'Error value';
                }
            }
            elseif($arr['formName'] == 'Avtoriz'){
                $par = $arr;
                unset($par['formName']);
                session_start();
                $this->Avtorization($par);
            }
        }
        else{
            if($_GET['formName'] == 'DellUser'){
                $par['id'] = $_GET['User'];
                $param = DB_Param::Params('Dell', $table, $par);
                var_dump($param);
                DB_Work::DBOperation ($param);
                header("Location: http://".$_SERVER['HTTP_HOST']."/Admin");
            }
            if($_GET['formName'] == 'users'){
                $param = DB_Param::Params('Read', 'user');
                $users = DB_Work::DBOperation($param);
                echo json_encode($users);

            }
        }
    }
    protected function Avtorization( array $params): void{
        var_dump($params);
        if($params['login'] && $params['password']) {
            $Login = ['login' => $params['login']];
            $Pass = $params['password'];
            $param = [
                'operation' => 'Filter',
                'DB_table' => 'user',
                'value' => $Login
            ];
            $user = DB_Work::DBOperation($param);
            if($user != null){
                var_dump($user);
                if(password_verify($Pass, $user[0]['password'])){
                    if($user[0]['role'] == 0){
                        $_SESSION['AdminUser'] = $user[0]['login'];
                        echo 'user: '.$_SESSION['AdminUser'];
                        header("Location: http://".$_SERVER['HTTP_HOST']."/Admin");
                    }
                    else{
                        header("Location: http://".$_SERVER['HTTP_HOST']."/Admin");
                    }
                }
                else{
                    echo 'Pass no';
                }
            }
            else{
                echo 'No';
            }
        }
        else{
            echo 'No';
        }
    }
}