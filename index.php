<?php

    include './resources/autoload.php';
    
    $router = new resources_libs_Router(__DIR__);
    $router->router();

    // $connect = new apps_Models_Users();
    // $connect->buildQueryParams([
    //     "username"=>"admin",
    //     "password"=>"123456"
    // ])->insert();

