<?php

// 取得全部書籍
/**
* @OA\Get(
*      path="/api/book",
*      operationId="getbook",
*      tags={"book Tag"},
*      summary="取得全部書籍 Summary",
*      description="取得全部書籍 Description",
*      @OA\Response(
*          response=200,
*          description="請求成功"
*       )
* )
* Returns list of articles
*/

// 新增書籍
/**
* @OA\Post(
*      path="/api/book",
*      operationId="createbook",
*      tags={"book Tag"},
*      summary="新增書籍",
*      description="新增書籍",
*      @OA\Parameter(
*          name="ISBN",
*          description="最多十三碼",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="integer"
*          )
*      ),
*      @OA\Parameter(
*          name="name",
*          description="書名",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Parameter(
*          name="author",
*          description="作者",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Parameter(
*          name="cover",
*          description="封面",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="path"
*          )
*      ),
*      @OA\Parameter(
*          name="abstract",
*          description="描述",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Response(
*          response=201,
*          description="資源成功建立"
*       ),
*      @OA\Response(
*          response=400,
*          description="請求格式錯誤"
*       )
* )
* Create a article
*/

//修改書籍
/**
* @OA\Patch(
*      path="/api/book/{id}",
*      operationId="patchbook",
*      tags={"book Tag"},
*      summary="修改書籍資訊",
*      description="修改書籍資訊",
*      @OA\Parameter(
*          name="id",
*          description="Book id",
*          required=true,
*          in="path",
*          @OA\Schema(
*              type="integer"
*          )
*      ),
*      @OA\Parameter(
*          name="ISBN",
*          description="最多十三碼",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Parameter(
*          name="name",
*          description="書名",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Parameter(
*          name="author",
*          description="作者",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Parameter(
*          name="cover",
*          description="封面",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="path"
*          )
*      ),
*      @OA\Parameter(
*          name="abstract",
*          description="描述",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Response(
*          response=201,
*          description="資源成功建立"
*       ),
*      @OA\Response(
*          response=400,
*          description="請求格式錯誤"
*       )
* )
* Update article content
*/

//刪除
/**
* @OA\Delete(
*      path="/api/book/{id}",
*      operationId="DeleteBook",
*      tags={"book Tag"},
*      summary="刪除文章",
*      description="刪除文章",
*      @OA\Parameter(
*          name="id",
*          description="Book id",
*          required=true,
*          in="path",
*          @OA\Schema(
*              type="integer"
*          )
*      ),
*      @OA\Response(
*          response=201,
*          description="請求成功"
*       ),
*      @OA\Response(
*          response=404,
*          description="資源不存在"
*       )
* )
* Delete article content
*/

// 查詢單一書籍
/**
* @OA\Post(
*      path="/api/thisbook",
*      operationId="findbook",
*      tags={"book Tag"},
*      summary="查詢單一書籍",
*      description="查詢單一書籍",
*      @OA\Parameter(
*          name="name",
*          description="書名",
*          required=true,
*          in="query",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Response(
*          response=201,
*          description="資源成功建立"
*       ),
*      @OA\Response(
*          response=400,
*          description="請求格式錯誤"
*       )
* )
* Create a article
*/