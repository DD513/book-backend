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
    /**
 *
 * @SWG\Post(path="/api/v1.0/blog/article/",
 *   tags={"Tailor"},
 *   summary="建立文章",
 *   description="請求時需要附上JWT驗證",
 *   operationId="getMyData",
 *   produces={"application/json"},
 *     @SWG\Parameter(
 *          name="body",
 *          in="body",
 *          required=true,
 *          @SWG\Schema(
 *              @SWG\Property(
 *                  property="title",
 *                  type="string",
 *                  maximum=64
 *              ),
 *              @SWG\Property(
 *                  property="subtitle",
 *                  type="string"
 *              ),
 *              @SWG\Property(
 *                  property="content",
 *                  type="string"
 *              )
 *          )
 *     ),
 *   @SWG\Response(response="201", description="資源成功建立"),
 *   @SWG\Response(response="400", description="請求格式錯誤"),
 *   @SWG\Response(response="404", description="資源不存在 ( Not Found)"),
 *   @SWG\Response(response="401", description="拒絕存取 ( Unauthenticated)")
 * )
 */
    public function postBook() {
        return '123';
    }
}
