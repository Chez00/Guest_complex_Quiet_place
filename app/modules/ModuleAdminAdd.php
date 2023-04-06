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
        if ($_POST['formName'] == 'AddRoom'){
            var_dump($_POST);
            echo '<p>  </p>';
            var_dump($_FILES);
        }
        else{
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

//            header("Location: http://".$_SERVER['HTTP_HOST']."/Admin");
        }
    }
}