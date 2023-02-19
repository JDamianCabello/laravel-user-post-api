<?php

namespace Src\Rest_api\Post\Infrastructure\Persistence;

use Src\Rest_api\Shared\Infrastructure\Persistance\Eloquent\EloquentBaseModel;

class Post extends EloquentBaseModel
{
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}