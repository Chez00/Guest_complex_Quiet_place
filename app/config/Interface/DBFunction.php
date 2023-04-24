<?php

namespace App\config\Interface;
use App\Services\DBConnection;

interface DBFunction
{
    public function Operation(): ?array;
}