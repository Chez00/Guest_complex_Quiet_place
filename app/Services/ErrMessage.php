<?php

namespace App\Services;

class ErrMessage
{
    private static array $ErrCode = [
        0 => "Не указана конфигурация Базы данных",
        1 => "Не указан драйвер Базы данных",
        2 => "Не указан хост Базы данных",
        3 => "Не указан порт Базы данных",
        4 => "Не указано имя Базы данных",
        5 => "Не указан пользователь Базы данных",
        6 => "Не указан пароль пользователя Базы данных",
        7 => "Не указана кодировка Базы данных"
    ];

    public static function Error( int $err): string
    {
        $ErrBody = self::ErrName($err);
        return 'Error: '.$ErrBody;
    }

    private static function ErrName(int $err): string
    {
        return self::$ErrCode[$err];
    }

}