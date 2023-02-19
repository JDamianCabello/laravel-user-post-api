<?php

namespace  Src\Rest_api\User\Infrastructure\Controllers;

use Src\Rest_api\User\Application\List\UserListAllWithPostUseCase;

final class UserListAllWithPostController
{
    private $userListAllWithPostUseCase;

    public function __construct(UserListAllWithPostUseCase $userListAllWithPostUseCase){
        $this->userListAllWithPostUseCase = $userListAllWithPostUseCase;
    }

    public function __invoke(): array{
        return $this->userListAllWithPostUseCase->__invoke();
    }
}
