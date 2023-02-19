<?php

namespace Src\Rest_api\User\Infrastructure\Persistence\Eloquent;

use Src\Rest_api\Shared\Infrastructure\Persistance\Eloquent\EloquentRepository;
use Src\Rest_api\Shared\Infrastructure\Persistance\Eloquent\EloquentBaseModel;
use Src\Rest_api\User\Domain\Contracts\UserRepositoryContract;

final class UserRepository extends EloquentRepository implements UserRepositoryContract
{

    protected EloquentBaseModel $model;

    public function __construct(){
        $this->model = new User();
    }

    public function listAll(): array{
        return $this->model->all()->toArray();
    }

    public function listAllWithPost(): array{
        return $this->model->with('posts:id,user_id,body,title')
            ->withAvg('posts','rating')
            ->orderByDesc('posts_avg_rating')
            ->get()->toArray();
    }
}