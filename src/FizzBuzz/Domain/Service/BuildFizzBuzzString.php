<?php

namespace Src\FizzBuzz\Domain\Service;

class BuildFizzBuzzString
{
    public function build(int $referenceValue,?string $fizzBuzzCode): string
    {
        $string = $referenceValue;

        if ($fizzBuzzCode !== null) {
            $string .= ' --> ' . $fizzBuzzCode;
        }

        $string .= '<br>';

        return $string;
    }
}
