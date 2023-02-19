<?php

namespace Src\Rest_api\User\Application\List;

use Src\Rest_api\User\Domain\Contracts\UserRepositoryContract;

final class UserListAllWithPostUseCase
{
    private UserRepositoryContract $repository;

    public function __construct(UserRepositoryContract $repository){
        $this->repository = $repository;
    }

    public function __invoke(): array{
        return $this->repository->listAllWithPost();
    }
}