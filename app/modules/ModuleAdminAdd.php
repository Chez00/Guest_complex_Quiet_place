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
                if($par['Role'] == 'on'): $par['Role'] = 0; else: $par['Role'] = 1; endif;
                $par['TimeRegistration'] = date("Y-m-d H:i:s");
                $par['Password'] = password_hash($par['Password'], PASSWORD_DEFAULT);
                $param = [
                    'operation' => 'Add',
                    'DB_table' => 'User',
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
                $par['ID'] = $_GET['User'];
                $param = [
                    'operation' => 'Dell',
                    'DB_table' => 'User',
                    'value' => $par
                ];
                var_dump($param);
                DB_Work::DBOperation ($param);
                header("Location: http://".$_SERVER['HTTP_HOST']."/Admin");
            }
        }
    }
    protected function Avtorization( array $params): void{
        if($params['Login'] && $params['Password']) {
            echo 'Ok';
            $Login = ['Login' => $params['Login']];
            $Pass = $params['Password'];
            $param = [
                'operation' => 'Read',
                'DB_table' => 'User',
                'value' => $Login
            ];
            $user = DB_Work::DBOperation($param);
            if(isset($user)){
                var_dump($user);
                if(password_verify($Pass, $user['0']['Password'])){
                    if($user['0']['Role'] == 0){
                        $_SESSION['AdminUser'] = $Login['Login'];
                        echo 'user: '.$_SESSION['AdminUser'];
                        header("Location: http://".$_SERVER['HTTP_HOST']."/Admin");
                    }
                    else{
                        echo 'no Admin';
                    }
                }
                else{
                    echo 'Pass no';
                }
            }
        }
        else{
            echo 'No';
        }
    }
}