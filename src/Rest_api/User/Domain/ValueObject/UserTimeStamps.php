<?php

namespace Src\Rest_api\User\Domain\ValueObject;

final class UserTimeStamps
{
    private $value;

    public function __construct(array $value){
        $this->value = $value;
    }

    public function value():string{
        return $this->value;
    }

    public function createdAt():string{
        return $this->value['created_at'];
    }

    public function updatedAt():string{
        return $this->value['updated_at'];
    }
}