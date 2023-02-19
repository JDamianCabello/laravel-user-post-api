<?php

namespace Src\Rest_api\Shared\Domain\Exceptions;

abstract class CustomException extends \Exception{
    public function toException(){
        $tempClass = new \ReflectionClass(get_class($this));
        $class = explode('\\', $tempClass->getName());

        return [
            'code' => $this->getCode(),
            'error' => true,
            'class' => end($class),
            'message' => $this->getMessage()
        ];
    }
}
