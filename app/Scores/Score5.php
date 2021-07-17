<?php


namespace App\Scores;


use Closure;

final class Score5 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if (
            $this->age > 26
            && $this->gender == self::FEMALE
            && $this->monthlyIncome < 28000
            && $this->maritalStatus == self::SINGLE
            && $this->amountOfChildren > 2
        ) {
            $score += 3;
        }

        return $next($score);
    }

}
