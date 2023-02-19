<?php

namespace Src\Rest_api\Post\Application\ListTop;

use Src\Rest_api\Post\Domain\Contracts\PostRepositoryContract;
use Src\Rest_api\Post\Domain\Exceptions\PostNotFoundException;

class PostListByTopRatingUseCase
{
    private PostRepositoryContract $repository;

    public function __construct(PostRepositoryContract $repository){
        $this->repository = $repository;
    }


    public function __invoke(): array{

        return $this->repository->listByTopRating();
    }

}