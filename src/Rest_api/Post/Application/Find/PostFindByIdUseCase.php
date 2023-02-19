<?php

namespace Src\Rest_api\Post\Application\Find;

use Src\Rest_api\Post\Domain\Contracts\PostRepositoryContract;
use Src\Rest_api\Post\Domain\Exceptions\PostNotFoundException;
use Src\Rest_api\Post\Domain\ValueObject\PostId;

class PostFindByIdUseCase
{
    private PostRepositoryContract $repository;

    public function __construct(PostRepositoryContract $repository){
        $this->repository = $repository;
    }

    /**
     * @throws PostNotFoundException
     */
    public function __invoke(int $postId): array{
        $response = $this->repository->findById(new PostId($postId));

        if(!$response){
            throw new PostNotFoundException("Post not found", 404);
        }

        return  $response;
    }

}