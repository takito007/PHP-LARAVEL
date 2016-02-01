<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/02/2016
 * Time: 16:31
 */
class PostText extends PHPUnit_Framework_TestCase
{
  /** @test */
    function Muestrame_el_nombre_del_autor()
    {
        $author = new \PlatziPHP\Author('marc@elementalitc.com', 'crispi007', 'AUTOR_DE_PLATZI');

        $author->name('Marc', 'Gimenez');

        $post = new \PlatziPHP\Post($author, 'Un titulo', 'un cuerpo');

        $this->assertEquals(
            'by Marc',
            $post->getAuthor()
        );
    }
}