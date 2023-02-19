<?php

namespace Src\Rest_api\Post\Infrastructure\Persistence;

use Src\Rest_api\Shared\Infrastructure\Persistance\Eloquent\EloquentBaseModel;

class User extends EloquentBaseModel
{
    protected $table = 'users';
    /*
     * Get the posts for the user.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}