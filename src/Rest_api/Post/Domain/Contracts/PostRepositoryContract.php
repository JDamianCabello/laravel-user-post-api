<?php

namespace Src\Rest_api\Post\Domain\Contracts;

use Src\Rest_api\Post\Domain\ValueObject\PostId;

interface PostRepositoryContract
{
    public function findById(PostId $postId): ?array;
    public function listByTopRating(): ?array;
}