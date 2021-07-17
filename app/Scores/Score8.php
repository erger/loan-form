<?php


namespace App\Scores;


use Closure;

final class Score8 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if (
            $this->age > 18
            && $this->monthlyIncome < 15000
        ) {
            $score += 2;
        }

        return $next($score);
    }

}
