<?php

namespace Src\FizzBuzz\Application\UseCase;


use Src\FizzBuzz\Domain\Service\BuildFizzBuzzString;
use Src\FizzBuzz\Domain\Service\GetFizzBuzzCode;

class FizzBuzzUseCase
{

    private const INITIAL_REFERENCE_VALUE = 1;
    private const INCREASING_REFERENCE_VALUE = 1;
    private const END_REFERENCE_VALUE = 20;
    public function __construct(
        private GetFizzBuzzCode $getFizzBuzzCode,
        private BuildFizzBuzzString $buildFizzBuzzString,
    )
    {

    }

    public function execute():void
    {
        $value = self::INITIAL_REFERENCE_VALUE;

        while ($value <= self::END_REFERENCE_VALUE) {
            $fizzBuzzCode = $this->getFizzBuzzCode->get(
                $this->isFizzValue($value),
                $this->isBuzzValue($value)
            );

            $string = $this->buildFizzBuzzString->build($value,$fizzBuzzCode);

            echo($string);

            $value += self::INCREASING_REFERENCE_VALUE;
        }
    }

    private function isFizzValue(int $value): bool
    {
        return $value % 3 === 0;
    }
    private function isBuzzValue(int $value): bool
    {
        return $value % 5 === 0;
    }
}
