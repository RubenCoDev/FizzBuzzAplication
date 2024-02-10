<?php

namespace Src\FizzBuzz\Domain\ValueObject;

class FizzBuzzCode
{
    public const CODE_FIZZ = 'Fizz';
    public const CODE_BUZZ = 'Buzz';

    public const LIST = [
        self::CODE_FIZZ,
        self::CODE_BUZZ,
    ];
}
