<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/02/2016
 * Time: 16:05
 */
namespace PlatziPHP;

class Post
{
    private $author;

    private $title;

    private $body;

    public function __construct(Author $author, $title, $body)
    {
        $this->author = $author;
        $this->title = $title;
        $this->body = $body;
    }
    public function getBody()
    {
        return $this->body;
    }
    public function getAuthor()
    {
        return 'by ' . $this->author->getFirstName();
    }
}