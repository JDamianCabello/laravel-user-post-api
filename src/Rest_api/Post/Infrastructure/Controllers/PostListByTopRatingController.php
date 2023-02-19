<?php

namespace Src\Rest_api\Post\Infrastructure\Controllers;

use Src\Rest_api\Post\Application\ListTop\PostListByTopRatingUseCase;

class PostListByTopRatingController
{
    private PostListByTopRatingUseCase $useCase;

    public function __construct(PostListByTopRatingUseCase $postListByTopRatingUseCase){
        $this->useCase = $postListByTopRatingUseCase;
    }

    public function __invoke(): array{
        return $this->useCase->__invoke();
    }
}