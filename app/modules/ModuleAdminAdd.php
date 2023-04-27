<?php

namespace App\modules;

use App\DB\DB_Work;

class ModuleAdminAdd implements \App\config\Interface\ModelPage
{
    public string $isPage;
    public function __construct(string $isPage)
    {
        $this->isPage = $isPage;
    }
    public function openPage(): void
    {
        if($_POST){
            if ($_POST['formName'] == 'AddRoom'){
                var_dump($_POST);
                echo '<p>  </p>';
                var_dump($_FILES);
            }
            elseif($_POST['formName'] == 'AddAdmin'){
                $par = $_POST;
                unset($par['formName']);
                if($par['role'] == 'on'): $par['role'] = 0; else: $par['role'] = 1; endif;
                $par['registration'] = date("Y-m-d H:i:s");
                $par['password'] = password_hash($par['password'], PASSWORD_DEFAULT);
                $param = [
                    'operation' => 'Add',
                    'DB_table' => 'user',
                    'value' => $par
                ];
                DB_Work::DBOperation ($param);

                header("Location: http://".$_SERVER['HTTP_HOST']."/Admin");
            }
            elseif($_POST['formName'] == 'Avtoriz'){
                $par = $_POST;
                unset($par['formName']);
                session_start();
                $this->Avtorization($par);
            }
        }
        else{
            if($_GET['formName'] == 'DellUser'){
                $par['id'] = $_GET['User'];
                $param = [
                    'operation' => 'Dell',
                    'DB_table' => 'user',
                    'value' => $par
                ];
                var_dump($param);
                DB_Work::DBOperation ($param);
                header("Location: http://".$_SERVER['HTTP_HOST']."/Admin");
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