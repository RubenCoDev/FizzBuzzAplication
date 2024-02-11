<?php

namespace Tests\Unit\FizzBuzz\Domain;

use PHPUnit\Framework\MockObject\MockObject;
use Src\FizzBuzz\Domain\Service\BuildFizzBuzzString;
use Src\FizzBuzz\Domain\Service\GetFizzBuzzCode;
use Tests\TestCase;

class BuildFizzBuzzStringServiceTest extends TestCase
{
    private BuildFizzBuzzString $sut;

    public function setUp():void
    {
        parent::setUp();

        $this->sut = new BuildFizzBuzzString();
    }
    public function test_when_only_have_reference_value(): void
    {
        $result = $this->sut->build(1, null);

        $this->assertEquals('1<br>', $result);
    }
    public function test_when_reference_value_and_fizz_buzz_code(): void
    {
        $result = $this->sut->build(3, 'Fizz');

        $this->assertEquals('3 --> Fizz<br>', $result);
    }
}
