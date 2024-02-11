<?php

namespace Tests\Unit\FizzBuzz\Application;

use PHPUnit\Framework\MockObject\MockObject;
use Src\FizzBuzz\Application\UseCase\FizzBuzzUseCase;
use Src\FizzBuzz\Domain\Service\BuildFizzBuzzString;
use Src\FizzBuzz\Domain\Service\GetFizzBuzzCode;
use Tests\TestCase;

class FizzBuzzUseCaseTest extends TestCase
{
    private FizzBuzzUseCase $sut;
    private MockObject $getFizzBuzzCode;
    private MockObject $buildFizzBuzzString;

    public function setUp():void
    {
        parent::setUp();

        $this->getFizzBuzzCode = $this->createMock(GetFizzBuzzCode::class);
        $this->buildFizzBuzzString = $this->createMock(BuildFizzBuzzString::class);

        $this->sut = new FizzBuzzUseCase(
            $this->getFizzBuzzCode,
            $this->buildFizzBuzzString
        );
    }
    public function test_execute_correctly(): void
    {
        $this->getFizzBuzzCode
            ->expects($this->exactly(20)) // 20 expected calls
            ->method('get')
            ->willReturnCallback(function ($isFizz, $isBuzz) {
                if ($isFizz && $isBuzz) {
                    return 'FizzBuzz';
                } elseif ($isBuzz) {
                    return 'Fizz';
                } elseif ($isFizz) {
                    return 'Buzz';
                } else {
                    return null;
                }
            });


        $this->buildFizzBuzzString
            ->expects($this->exactly(20))
            ->method('build')
            ->willReturnOnConsecutiveCalls(
                '1',
                '2',
                '3 --> Fizz',
                '4',
                '5 --> Buzz',
                '6 --> Fizz',
                '7',
                '8',
                '9 --> Fizz',
                '10 --> Buzz',
                '11',
                '12 --> Fizz',
                '13',
                '14',
                '15 --> FizzBuzz',
                '16',
                '17',
                '18 --> Fizz',
                '19',
                '20 --> Buzz',
            );

        $this->sut->execute();
    }
}
