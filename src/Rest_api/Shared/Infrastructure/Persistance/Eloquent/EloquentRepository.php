<?php

namespace Src\Rest_api\Shared\Infrastructure\Persistance\Eloquent;

class EloquentRepository
{
    protected EloquentBaseModel $model;

    public function __construct(EloquentBaseModel $model)
    {
        $this->model = $model;
    }
}