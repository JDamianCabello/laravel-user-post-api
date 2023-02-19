<?php

namespace Src\Rest_api\User\Infrastructure\Persistence\Eloquent;

use Src\Rest_api\Shared\Infrastructure\Persistance\Eloquent\EloquentBaseModel;

final class User extends EloquentBaseModel
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