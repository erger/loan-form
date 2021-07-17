<?php


namespace App\Scores;


use Closure;

final class Score4 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if (
            $this->age > 26
            && $this->gender == self::FEMALE
            && $this->monthlyIncome < 22000
            && $this->maritalStatus == self::SINGLE
            && $this->amountOfChildren == 0
        ) {
            $score += 2;
        }

        return $next($score);
    }

}
