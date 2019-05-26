<?php

declare(strict_types=1);

use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="This is a test with swagger API", version="0.1")
 * @OA\Server(
 *     url="http://localhost:8000",
 *      description="root of api"
 * )
 * @OA\Server(
 *     url="http://another-endpoint:8000",
 *      description="root of api"
 * )
 */