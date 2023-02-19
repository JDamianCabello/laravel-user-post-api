<?php

namespace Src\Rest_api\User\Infrastructure\Services;

use Illuminate\Support\Facades\Route;
use Src\Rest_api\Shared\Infrastructure\Services\SharedRouteServiceProvider;

final class RouteServiceProvider extends SharedRouteServiceProvider
{
    protected $namespace = 'Src\Rest_api\User\Infrastructure\Controllers';

    public function mapRoutes(){
        Route::prefix('api-hexagonal/users')
            ->namespace($this->namespace)
            ->group(base_path('src/Rest_api/User/Infrastructure/Routes/Api.php'));
    }
}