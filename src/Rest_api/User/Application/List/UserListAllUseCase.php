<?php

namespace Src\Rest_api\User\Application\List;

use Src\Rest_api\User\Domain\Contracts\UserRepositoryContract;
use Src\Rest_api\User\Domain\Exceptions\UserException;

final class UserListAllUseCase
{
    private UserRepositoryContract $repository;

    public function __construct(UserRepositoryContract $repository){
        $this->repository = $repository;
    }

    public function __invoke(): array{
        //throw new UserException('Esta es una excepción personalizada', 400);
        return $this->repository->listAll();
    }
}