<?php


namespace App\Scores;


use Closure;

final class Score3 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if (
            $this->age > 30
            && $this->gender == self::MALE
            && $this->monthlyIncome < 30000
            && $this->maritalStatus == self::SINGLE
            && $this->amountOfChildren > 0
        ) {
            $score += 3;
        }

        return $next($score);
    }

}
