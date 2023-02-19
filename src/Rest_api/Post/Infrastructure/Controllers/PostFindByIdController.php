<?php

namespace Src\Rest_api\Post\Infrastructure\Controllers;

use Src\Rest_api\Post\Application\Find\PostFindByIdUseCase;

final class PostFindByIdController
{
    private PostFindByIdUseCase $useCase;

    public function __construct(PostFindByIdUseCase $postGetByIdUseCase){
        $this->useCase = $postGetByIdUseCase;
    }

    public function __invoke(int $id): array{
        return $this->useCase->__invoke($id);
    }
}