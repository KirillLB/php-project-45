<?php

namespace BrainGames\EvenOdd;

use function cli\line;
use function cli\prompt;

use BrainGames\Cli;

function evenOdd()
{
    $userName = Cli\helloUser();
    line("%s, answer 'yes' if the number is even, otherwise answer 'no'.", $userName);

    for ($i = 0; $i < 3; $i++) {
        $randNum = rand(1, 100);
        $userAnswer = strtolower(prompt("Question: " . $randNum . "\nYour answer"));

        $isEven = $randNum % 2 == 0 ? 'yes' : 'no';

        if ($userAnswer == $isEven) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $isEven);
            return;
        }
    }

    line("Congratulations, %s!", $userName);
}
