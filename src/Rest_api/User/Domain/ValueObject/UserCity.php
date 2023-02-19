<?php

namespace Src\Rest_api\User\Domain\ValueObject;

final class UserCity
{
    private $value;

    public function __construct(string $value){
        $this->value = $value;
    }

    public function value():string{
        return $this->value;
    }
}