<?php

namespace Src\FizzBuzz\Domain\Service;

use Src\FizzBuzz\Domain\ValueObject\FizzBuzzCode;

class GetFizzBuzzCode
{
    public function get(bool $isFizz, bool $isBuzz): ?string
    {
        return match (true) {
            ($isFizz && $isBuzz) => FizzBuzzCode::CODE_FIZZ . FizzBuzzCode::CODE_BUZZ,
            $isFizz => FizzBuzzCode::CODE_FIZZ,
            $isBuzz => FizzBuzzCode::CODE_BUZZ,
            default => null,
        };
    }
}
