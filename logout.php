<?php
    $user = new resources_libs_UserIdentity;
    $user->logout();
    
    (new resources_libs_Router)->homePage();
