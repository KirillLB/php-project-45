<?php

namespace BrainGames\Calc;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function calc()
{
    $userName = Cli\helloUser();
    line("What is the result of the expression?");

    for ($i = 0; $i < 3; $i++) {
        $a = rand(0, 100);
        $b = rand(0, 100);
        $operation = ['+', '-', '*'];

        $operand = $operation[rand(0, count($operation) - 1)];
        $userAnswer = prompt("Question: {$a} {$operand} {$b} \nYour answer");

        switch ($operand) {
            case '+':
                $rightAnswer = $a + $b;
                break;
            case '-':
                $rightAnswer = $a - $b;
                break;
            case '*':
                $rightAnswer = $a * $b;
                break;
        }

        if (!GameEngine\gameEngine($userName, [$userAnswer, $rightAnswer])) {
            return;
        }
    }
    GameEngine\gameEngine($userName, [], true);
}
