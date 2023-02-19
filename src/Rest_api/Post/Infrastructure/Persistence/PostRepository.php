<?php

namespace Src\Rest_api\Post\Infrastructure\Persistence;

use Illuminate\Support\Facades\DB;
use Src\Rest_api\Post\Domain\Contracts\PostRepositoryContract;
use Src\Rest_api\Post\Domain\ValueObject\PostId;
use Src\Rest_api\Shared\Infrastructure\Persistance\Eloquent\EloquentBaseModel;
use Src\Rest_api\Shared\Infrastructure\Persistance\Eloquent\EloquentRepository;

final class PostRepository extends EloquentRepository implements PostRepositoryContract
{
    protected EloquentBaseModel $model;

    public function __construct(){
        $this->model = new Post();
    }

    public function findById(PostId $postId): ?array
    {
        $post = $this->model::with('user:id,name')->find($postId->value());
        return ($post) ? $post->toArray() : null;
    }

    public function listByTopRating(): ?array
    {
        return $this->model::with('user:id,name')
            ->groupBy('user_id')
            ->select('id', 'user_id', 'title', 'body',  DB::raw('MAX(rating) as rating'))->get()->toArray();
    }
}