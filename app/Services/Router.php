<?php

namespace App\Services;

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
            require_once 'public/index.php';
            die();
        }
        else{
            $query = $_GET['q'];
            foreach (self::$RoutesList as $route){
                if ($route['url'] === '/'.$query){
                    require_once 'public/'.$route['page'].'.php';
                    die();
                }
            }
            self::NotFoundPage();

        }
    }
    public static function NotFoundPage(): void
    {
        require_once 'public/404.php';
    }
}