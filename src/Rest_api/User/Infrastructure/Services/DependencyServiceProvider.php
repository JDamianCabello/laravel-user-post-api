<?php

namespace Src\Rest_api\User\Infrastructure\Services;




use Src\Rest_api\Shared\Infrastructure\Services\SharedDependencyServiceProvider;
use Src\Rest_api\User\Application\List\UserListAllUseCase;
use Src\Rest_api\User\Application\List\UserListAllWithPostUseCase;
use Src\Rest_api\User\Domain\Contracts\UserRepositoryContract;
use Src\Rest_api\User\Infrastructure\Persistence\Eloquent\UserRepository;

final class DependencyServiceProvider extends SharedDependencyServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(UserListAllUseCase::class)
            ->needs(UserRepositoryContract::class)
            ->give(UserRepository::class);

        $this->app->when(UserListAllWithPostUseCase::class)
            ->needs(UserRepositoryContract::class)
            ->give(UserRepository::class);
    }
}