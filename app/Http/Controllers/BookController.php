<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\BookService;

class BookController extends Controller
{
    protected $book;
    public function __construct(){
        $this->book = new BookService();
    }

    public function getBook() {
        // $book  = new BookService();
        return $this->book->getBook();
    }

    public function postBook() {
        return '123';
    }
}
