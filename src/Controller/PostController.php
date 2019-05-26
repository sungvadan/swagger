<?php

declare(strict_types=1);

namespace App\Controller;

use OpenApi\Annotations as OA;

class PostController
{
    /**
     * @OA\Get(
     *     path="/post/{id}",
     *     @OA\Parameter(
     *      in="path",
     *      name="id",
     *      description="id of article",
     *      @OA\Schema(
     *          type="integer"
     *      ),
     *      required=true
     *     ),
     *     @OA\Response(
     *      response="200",
     *      description="get an article by id",
     *      @OA\JsonContent(
     *          type="string",
     *          description="title of the article"
     *      )
     *     )
     * )
     */
    public function index()
    {

    }

}