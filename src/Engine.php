<?php 

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function gameEngine($gameType)
{
    for ($i = 0; $i < 3; $i++) {
        if ($gameType == 'EvenOdd') {
            $randNum = rand(1, 100);
            $userAnswer = strtolower(prompt("Question: " . $randNum . "\nYour answer"));
    
            $rightAnswer = $randNum % 2 == 0 ? 'yes' : 'no';
        }
        else {
            $a = rand(0, 100);
            $b = rand(0, 100);
            $operation = [' + ', ' - ', ' * '];

            $operand = $operation[rand(0, count($operation) - 1)];
            $userAnswer = prompt("Question: " . $a . $operand . $b . "\nYour answer");

            switch ($operand) {
                case ' + ':
                    $rightAnswer = $a + $b;
                    break;
                case ' - ':
                    $rightAnswer = $a - $b;
                    break;
                case ' * ':
                    $rightAnswer = $a * $b;
                    break;
            }
        }
           
        if ($userAnswer == $rightAnswer) {
            line('Correct!');
        } else {
            $finalmessage = line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $rightAnswer) . " Let's try again, %s!";
            return $finalmessage;
        }
    }
    $finalmessage = "Congratulations, %s!";

    return $finalmessage;
}


