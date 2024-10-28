<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

const QUESTIONS_AMOUNT = 3;

function runEngine(string $preamble, array $questions, array $correctAnswers): bool
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($preamble);

    for ($i = 0; $i < QUESTIONS_AMOUNT; $i++) {
        $userAnswer = strtolower(prompt("Question: {$questions[$i]} \nYour answer"));

        if ($userAnswer == $correctAnswers[$i]) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'. \nLet's try again, %s!", $userAnswer, $correctAnswers[$i], $name);
            return false;
        }
    }

    line("Congratulations, {$name}!");
    return true;
}
