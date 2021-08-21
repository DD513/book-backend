<?php 

namespace App\Http\Services;

use App\Models\book;

class BookService {
  public function getBook() {
    $books = book::orderBy('created_at')->get();
    return $books;
  }
}