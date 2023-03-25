<?php

namespace App\Services;

use App\modules\ModuleLanding,
    App\modules\Module404Page;



class Router
{
    private static array $RoutesList = [];

    public static function Route($url, $name): void
    {
        self::$RoutesList[] = [
          "url" => $url,
          "page" => $name
        ];
    }

    public static function RouterEnable(): void
    {
        if (!isset($_GET['q'])){
            $q = new ModuleLanding('Landing');
            $q->openPage();
            die();
        }
        else{
            $query = $_GET['q'];
            foreach (self::$RoutesList as $route){
                if ($route['url'] === '/'.$query){
                    $mod = 'App\modules\Module'.$route['page'];
                    $q = new $mod($route['page']);
                    $q->openPage();
                    die();
                }
            }
            self::NotFoundPage();

        }
    }
    public static function NotFoundPage(): void
    {
        $q = new Module404Page('404');
        $q->openPage();
    }
}