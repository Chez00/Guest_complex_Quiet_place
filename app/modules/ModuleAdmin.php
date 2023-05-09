<?php

namespace App\modules;

class ModuleAdmin implements \App\config\Interface\ModelPage
{
    public string $isPage;
    public function __construct(string $isPage)
    {
        $this->isPage = $isPage;
    }
    public function openPage(): void
    {
        session_start();
        if(!empty($_SESSION['AdminUser'])){
            require_once 'public/'.$this->isPage.'.php';
        } else{
            require_once 'public/AdminAvtoriz.php';
        }
    }
}