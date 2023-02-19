<?php

namespace Src\Rest_api\User\Domain\Contracts;

interface UserRepositoryContract
{
    public function listAll(): array;
    public function listAllWithPost(): array;
}