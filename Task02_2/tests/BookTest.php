<?php

namespace Tests\BookTest;

use App\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function testSetName()
    {
        $book = new Book();
        $book->setName("U lukamoriy");

        $this->assertEquals("U lukamoriy", $book->getName());
    }

    public function testSetAuthors()
    {
        $book = new Book();
        $book->setAuthors(array("I. Turgenev"));

        $this->assertEquals(array("I. Turgenev"), $book->getAuthors());
    }

    public function testSetPublisher()
    {
        $book = new Book();
        $book->setPublisher("BBC");

        $this->assertEquals("BBC", $book->getPublisher());
    }

    public function testSetYear()
    {
        $book = new Book();
        $book->setYear(2000);

        $this->assertEquals(2000, $book->getYear());
    }
}
