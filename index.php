<?php
//**** Автоподгрузка классов
require_once __DIR__.'/vendor/autoload.php';
//**** Подключение системы роутинга
require_once __DIR__ .'/routes/route.php';

use App\DB\DB_Work;

//**** Подключение к базе
DB_Work::Connect();
$_SESSION['Error'] = '';

