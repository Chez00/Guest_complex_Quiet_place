<?php
use RedBeanPHP\R,
    App\DB\DB_Work,
    App\DB\DB_Param;

R::debug( TRUE );

// ************************* ADD *****************************

//$par = [
//  'login'=>'Admin',
//  'password'=>'12345678',
//  'email'=>'Admin@mail.com',
//  'role'=>'on'
//];
//
//if($par['role'] == 'on'): $par['role'] = 0; else: $par['role'] = 1; endif;
//$par['registration'] = date("Y-m-d H:i:s");
//$par['password'] = password_hash($par['password'], PASSWORD_DEFAULT);
//$param = [
//    'operation' => 'Add',
//    'DB_table' => 'user',
//    'value' => $par
//];
//$text = DB_Work::DBOperation($param);

// ************************* UPDATE *****************************
//$param = [
//    'operation' => 'Update',
//    'DB_table' => 'user',
//    'value' => ['id'=>'1', 'email' => 'Nik.246@mail.ru','login'=>'AdminNik']
//];
//$user = DB_Work::DBOperation($param);
// ************************* DELETE *****************************

// ************************* READ *****************************

$param = DB_Param::Params('Read', 'user');
$user = DB_Work::DBOperation($param);
var_dump($user);
foreach ($user as $r){
    var_dump($r);
    echo '<p></p>';
}