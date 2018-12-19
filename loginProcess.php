<?php
    // include './resources/autoload.php';
    $router = new resources_libs_Router();
    $identify = new resources_libs_UserIdentity();

    $router->router();
    
    if ($identify->getSESSION("id")) {
        $router->homePage();
    } 

    if(isset($_POST['login_button'])) {
        $email = trim($router->getPOST('email'));
        $password = trim($router->getPOST('password'));
        if ($email && $password) {
            
            $identify->email = $email;
            $identify->password = $password;
            
            if ($identify->login()) {
                $router->createUrl('index');
                echo 1;
                exit();
            } else {
                echo 0;
                exit();
                // echo "Email or Password is incorrect";
            }            
        }
    }
?>