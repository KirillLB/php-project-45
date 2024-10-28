<?php

namespace BrainGames\Calc;

use BrainGames\GameEngine;

const PREAMBLE = "What is the result of the expression?";

function playCalculator(): void
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $a = rand(0, 100);
        $b = rand(0, 100);
        $operation = ['+', '-', '*'];
        $operand = $operation[array_rand($operation)];

        switch ($operand) {
            case '+':
                $correctAnswers[] = $a + $b;
                break;
            case '-':
                $correctAnswers[] = $a - $b;
                break;
            case '*':
                $correctAnswers[] = $a * $b;
                break;
        }

        $questions[] = "{$a} {$operand} {$b}";
    }
    GameEngine\runEngine(PREAMBLE, $questions, $correctAnswers);
}
