<?php

namespace  Src\Rest_api\User\Infrastructure\Controllers;

use Src\Rest_api\User\Application\List\UserListAllUseCase;

final class UserListAllController
{
    private $userListAllUseCase;

    public function __construct(UserListAllUseCase $listAllUseCase){
        $this->userListAllUseCase = $listAllUseCase;
    }

    public function __invoke(): array{
        return $this->userListAllUseCase->__invoke();
    }
}
