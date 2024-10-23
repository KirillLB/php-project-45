<?php

namespace BrainGames\Calc;

use BrainGames\GameEngine;

function playCalculator()
{
    $preamble = "What is the result of the expression?";

    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $a = rand(0, 100);
        $b = rand(0, 100);
        $operation = ['+', '-', '*'];
        $operand = $operation[rand(0, count($operation) - 1)];

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
    GameEngine\runEngine($preamble, $questions, $correctAnswers);
}
