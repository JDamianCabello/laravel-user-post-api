<?php

namespace Src\Rest_api\Post\Domain\ValueObject;

use Src\Rest_api\Shared\Domain\Exceptions\InvalidParamTypeException;

final class PostId
{
    private $value;

    public function __construct(int $value){
        $this->value = $value;
    }

    public function value():int{
        return $this->value;
    }
}