<?php

namespace App\modules;

class ModuleRooms implements \App\config\Interface\ModelPage
{
    public string $isPage;
    public function __construct(string $isPage)
    {
        $this->isPage = $isPage;
    }
    public function openPage(): void
    {
        require_once 'public/'.$this->isPage.'.php';
    }
}