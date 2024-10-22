<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

const QUESTIONS_AMOUNT = 3;

function runEngine(string $userName = "", string $text = "", string $question = "", array $userAnswers = [], bool $final = false)
{
    if ($text) {
        line($text);
    }

    if ($question) {
        return strtolower(prompt($question));
    }

    if (!empty($userAnswers)) {
        if ($userAnswers[0] == $userAnswers[1]) {
            line('Correct!');
            return true;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'. \nLet's try again, %s!", $userAnswers[0], $userAnswers[1], $userName);
            return false;
        }
    }
}
