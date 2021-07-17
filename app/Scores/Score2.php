<?php


namespace App\Scores;


use Closure;

final class Score2 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if (
            $this->age > 30
            && $this->gender == self::MALE
            && $this->monthlyIncome < 25000
            && $this->maritalStatus == self::SINGLE
            && $this->amountOfChildren == 0
        ) {
            $score += 2;
        }

        return $next($score);
    }

}
