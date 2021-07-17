<?php


namespace App\Scores;


use Closure;

final class Score10 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if (
            $this->age > 18
            && $this->age < 35
            && $this->amountOfChildren > 1
        ) {
            $score += 2;
        }

        return $next($score);
    }

}
