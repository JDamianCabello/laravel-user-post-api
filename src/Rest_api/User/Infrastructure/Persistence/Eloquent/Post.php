<?php

namespace Src\Rest_api\User\Infrastructure\Persistence\Eloquent;

use Illuminate\Database\Eloquent\Model;

final class Post extends Model
{
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}