<?php


namespace App\Scores;


use Closure;

final class Score1 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if ($this->age < 18) {
            $score += 5;
        }

        return $next($score);
    }

}
