<?php

namespace Src\Rest_api\Shared\Infrastructure\Services;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

abstract class SharedRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace;

    public function boot()
    {
        parent::boot();
    }

    public function map(){
        $this->mapRoutes();
    }

    public abstract function mapRoutes();
}