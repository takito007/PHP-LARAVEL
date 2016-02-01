<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 29/01/2016
 * Time: 16:25
 */
require_once 'vendor/autoload.php';

$user = new \PlatziPHP\Author('marc@elementalict.com', '1234');

$user->name('Marc', 'Gimenez Molina' );

echo $user->getFirstName();
echo $user->getLastName();
echo PHP_EOL;


//var_dump($user);