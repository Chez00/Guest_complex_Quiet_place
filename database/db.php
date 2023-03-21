<?php
use App\Services\DBConnection;

$DBConnect = new DBConnection();

$pdo = $DBConnect->ReadConfig();
