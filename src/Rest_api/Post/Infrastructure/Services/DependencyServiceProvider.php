<?php

namespace Src\Rest_api\Post\Infrastructure\Services;

use Src\Rest_api\Post\Application\ListTop\PostListByTopRatingUseCase;
use Src\Rest_api\Shared\Infrastructure\Services\SharedDependencyServiceProvider;
use Src\Rest_api\Post\Application\Find\PostFindByIdUseCase;
use Src\Rest_api\Post\Domain\Contracts\PostRepositoryContract;
use Src\Rest_api\Post\Infrastructure\Persistence\PostRepository;

class DependencyServiceProvider extends SharedDependencyServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(PostFindByIdUseCase::class)
            ->needs(PostRepositoryContract::class)
            ->give(PostRepository::class);

        $this->app->when(PostListByTopRatingUseCase::class)
            ->needs(PostRepositoryContract::class)
            ->give(PostRepository::class);
    }
}