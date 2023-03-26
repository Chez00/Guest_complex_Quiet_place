<?php

namespace App\modules;

class ModuleAdminTest implements \App\config\Interface\ModelPage
{
    public string $isPage;
    public function __construct(string $isPage)
    {
        $this->isPage = $isPage;
    }
    public function openPage(): void
    {
        var_dump($_POST);
    }
}