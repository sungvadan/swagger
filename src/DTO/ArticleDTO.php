<?php
declare(strict_types=1);

namespace App\DTO;

use OpenApi\Annotations as OA;

/**
 * @OA\RequestBody(
 *     request="createArticle",
 *     required=true,
 *     @OA\JsonContent(
 *          required={"title","content"},
 *          @OA\Property(type="string", property="title"),
 *          @OA\Property(type="string", property="content"),
 *     )
 * )
 *
 * @OA\SecurityScheme(bearerFormat="JWT", type="apiKey", securityScheme="bearer")
 */
class ArticleDTO
{

}