<?php
    namespace Medoo;
    require 'Medoo.php';

    $database = new Medoo([
        'type'=>'mysql',
        'host' => 'localhost',
        'database' => 'sultandb',
        'username' => 'root',
        'password' => ''
    ]);
?>