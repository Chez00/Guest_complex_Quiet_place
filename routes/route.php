<?php
use App\Services\Router;

Router::Route('/Rooms', 'rooms');
Router::Route('/Rooms/', 'room');
Router::Route('/a', 'AdminAvt');

Router::RouterEnable();