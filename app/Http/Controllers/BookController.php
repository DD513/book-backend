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

    /**
     * 查看所有的書
     *
     * @return \Illuminate\Http\Response
     */
    public function getBook() {
        return $this->book->getBook();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBook(Request $request)
    {      
        $createbook = $this->book->createBook($request);
        return !$createbook ? '新增失敗' : '新增成功';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editBook(Request $request , $id)
    {
        $editbook= $this->book->editBook($request , $id);
        return  !$editbook ? '沒有這本書' : '修改成功';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteBook(Request $request , $id)
    {
        $deletebook = $this->book->deleteBook($request , $id);
        return !$deletebook ? '沒有這本書' : '刪除成功';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function findThisBook(Request $request)
    {
        $findbook = $this->book->findThisBook($request);
        return !$findbook ? '沒有這本書' : $findbook;
    }
}
