<?php

namespace Src\Rest_api\Post\Infrastructure\Services;

use Illuminate\Support\Facades\Route;
use Src\Rest_api\Shared\Infrastructure\Services\SharedRouteServiceProvider;

final class RouteServiceProvider extends SharedRouteServiceProvider
{
    protected $namespace = 'Src\Rest_api\Post\Infrastructure\Controllers';

    public function mapRoutes(){
        Route::prefix('api-hexagonal/post')
            ->namespace($this->namespace)
            ->group(base_path('src/Rest_api/Post/Infrastructure/Routes/Api.php'));
    }
}