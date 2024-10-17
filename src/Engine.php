<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function gameEngine($gameType)
{
    for ($i = 0; $i < 3; $i++) {
        switch ($gameType) {
            case 'EvenOdd':
                $answers = playEvenOdd();
                break;
            case 'Calc':
                $answers = playCalc();
                break;
            case 'Gcd':
                $answers = playGcd();
                break;
            case 'Progression':
                $answers = playProgression();
                break;
            case 'Prime':
                $answers = playPrime();
                break;
        }

        if ($answers[0] == $answers[1]) {
            line('Correct!');
        } else {
            $finalmessage = "\"{$answers[0]}\" is wrong answer ;(. Correct answer was \"{$answers[1]}\". \nLet's try again, %s!";
            return $finalmessage;
        }
    }
    $finalmessage = "Congratulations, %s!";

    return $finalmessage;
}

function playEvenOdd()
{
    $randNum = rand(1, 100);
    $userAnswer = strtolower(prompt("Question: {$randNum} \nYour answer"));

    $rightAnswer = $randNum % 2 == 0 ? 'yes' : 'no';

    $answers = [$userAnswer, $rightAnswer];
    return $answers;
}
function playCalc()
{
    $a = rand(0, 100);
    $b = rand(0, 100);
    $operation = [' + ', ' - ', ' * '];

    $operand = $operation[rand(0, count($operation) - 1)];
    $userAnswer = prompt("Question: {$a} {$operand} {$b} \nYour answer");

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
    $answers = [$userAnswer, $rightAnswer];
    return $answers;
}
function playGcd()
{
    $a = rand(1, 100);
    $b = rand(1, 100);
    $userAnswer = prompt("Question: {$a} {$b} \nYour answer");
    $rightAnswer = gmp_gcd($a, $b);

    $answers = [];
    return $answers = [$userAnswer, $rightAnswer];
}
function playProgression()
{
    unset($progression);
    $progressionLength = rand(5, 10);
    $progression[0] = rand(0, 100);
    $step = rand(1, 5);

    for ($j = 1; $j < $progressionLength; $j++) {
        $progression[$j] = $progression[$j - 1] + $step;
    }
    $hidedPosition = rand(1, $progressionLength);
    $rightAnswer = $progression[$hidedPosition - 1];
    $progression[$hidedPosition - 1] = '..';
    $stringProgression = implode(' ', $progression);
    $userAnswer = prompt("Question: {$stringProgression} \nYour answer");
    $answers = [$userAnswer, $rightAnswer];
    return $answers;
}
function playPrime()
{
    $num = rand(1, 150);
    $rightAnswer = '';
    if (gmp_prob_prime($num) !== 0) {
        $rightAnswer = 'yes';
    } else {
        $rightAnswer = 'no';
    }
    $userAnswer = prompt("Question: {$num} \nYour answer");
    $answers = [$userAnswer, $rightAnswer];
    return $answers;
}
