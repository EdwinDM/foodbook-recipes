<?php 
    namespace Medoo;
    require 'Medoo.php';

    if(!isset($database)){
        $database = new Medoo([
            // [required]
            'type' => 'mysql',
            'host' => 'db4free.net:3306',
            'database' => 'fb_recipes',
            'username' => 'fb_admin',
            'password' => 'd107ab1b' 
        ]);
    }
?>