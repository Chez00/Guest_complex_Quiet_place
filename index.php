<?php
//**** Автоподгрузка классов
require_once __DIR__.'/vendor/autoload.php';
//**** Подключение системы роутинга
require_once __DIR__ .'/routes/route.php';
require_once __DIR__.'/app/Services/sessionParam.php';

use App\DB\DB_Work;

//**** Подключение к базе
DB_Work::Connect();
session_start();
if(empty($_SESSION['Error'])): $_SESSION['Error'] = '';endif;
if(empty($_SESSION['AdminUser'])): $_SESSION['AdminUser'] = null; endif;

