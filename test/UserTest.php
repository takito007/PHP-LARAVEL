<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/02/2016
 * Time: 12:01
 */
class UserTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function test()
    {
        $user = new \PlatziPHP\User('marc@elementalict.com', 'crispi007');

        $this->assertInstanceOf(\PlatziPHP\User::class, $user);
    }

    /** @test */
    function nombre()
    {
        $user = new \PlatziPHP\User('marc@elementalict.com', 'crispi007');

        $user->name ('marc', 'Giemenez');

        $name = $user->getFirstName();

        $this->assertEquals('marc', $name);
    }
}