<?php 

namespace App\Http\Services;

use App\Models\book;

class BookService {

  public function getBook() {
    $books = book::orderBy('created_at')->get();
    return $books;
  }

  public function createBook($request) {
    $request->all();
    
    $result = book::create(
      ['ISBN' =>$request->ISBN,
      'name' => $request->name,
      'author' => $request->author,
      'cover' => $request->cover,
      'abstract' => $request->abstract]
    );

    return $result;
  }

  public function editBook($request ,$id ){
    $rowNum = book::where('id','=',$id)->update(
      ['ISBN' =>$request->ISBN,
      'name' => $request->name,
      'author' => $request->author,
      'cover' => $request->cover,
      'abstract' => $request->abstract]
    );
    
    return $rowNum;
  }

  public function deleteBook($request ,$id ) {
    $rowNum = book::where('id','=',$id)->delete();
    return $rowNum;
  }

  public function findThisBook($request) {
    $find = book::where('name','=',$request->name)->get();
    return $find;
  }

  public function getAssignBook($id) {
    $books = book::where('id','=',$id)->first();
    return $books;
  }
}