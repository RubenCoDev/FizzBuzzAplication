<?php

namespace Apps\FizzBuzz\Controller;

use Illuminate\Routing\Controller;
use Src\FizzBuzz\Application\UseCase\FizzBuzzUseCase;

class FizzBuzzController extends Controller
{
    public function __invoke(
        FizzBuzzUseCase $fizzBuzzUseCase
    ): void
    {
        $fizzBuzzUseCase->execute();
    }
}
