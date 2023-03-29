<?php
use App\Services\Router;

Router::Route('/Rooms', 'Rooms');
Router::Route('/Room', 'Room');
Router::Route('/Admin', 'Admin');
Router::Route('/Admin/add', 'AdminAdd');

Router::RouterEnable();