<?php

namespace Src\Rest_api\User\Domain\ValueObject;

final class UserName
{
    private $value;

    public function __construct(string $value){
        $this->value = $value;
    }

    public function value(){
        return $this->value;
    }

    public function firstName(){
        return strtok($this->value, " ");
    }

    public function secondName(){
        return explode(' ',trim($this->value))[1];
    }
}