<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/02/2016
 * Time: 13:02
 */
class AuthorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function debe_construir()
    {
        $author = new PlatziPHP\Author('marc@elementalitc.com', 'platzi', 'AUTOR_DE_PLATZI');

        $this->assertInstanceOf(\PlatziPHP\Author::class, $author);
    }
    /** @test */
    function no_se_le_da_clave_cuando_falla()
    {
        //que falle con una excepcion
        $this->setExpectedException(InvalidArgumentException::class);
        $author = new \PlatziPHP\Author('marc@elementalitc.com', 'crispi007', 'prueba de herro de contraseña');

    }
}