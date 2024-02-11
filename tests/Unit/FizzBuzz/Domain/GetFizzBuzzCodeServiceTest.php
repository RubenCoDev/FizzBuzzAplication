<?php

namespace Tests\Unit\FizzBuzz\Domain;

use PHPUnit\Framework\MockObject\MockObject;
use Src\FizzBuzz\Domain\Service\BuildFizzBuzzString;
use Src\FizzBuzz\Domain\Service\GetFizzBuzzCode;
use Src\FizzBuzz\Domain\ValueObject\FizzBuzzCode;
use Tests\TestCase;

class GetFizzBuzzCodeServiceTest extends TestCase
{
    private GetFizzBuzzCode $sut;

    public function setUp():void
    {
        parent::setUp();

        $this->sut = new GetFizzBuzzCode();
    }

    /**
     * @dataProvider dataProvider
     */
    public function test_executes_correctly($isFizz, $isBuzz, $expectedResult): void
    {
        $result = $this->sut->get($isFizz, $isBuzz);

        $this->assertEquals($expectedResult, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [false, false, null],
            [true, false, FizzBuzzCode::CODE_FIZZ],
            [false, true, FizzBuzzCode::CODE_BUZZ],
            [true, true, FizzBuzzCode::CODE_FIZZ . FizzBuzzCode::CODE_BUZZ],
        ];
    }
}
