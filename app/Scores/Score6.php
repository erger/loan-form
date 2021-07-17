<?php


namespace App\Scores;


use Closure;

final class Score6 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if (
            $this->age > 65
            && $this->loans
            && $this->typeOfEmployment == self::UNEMPLOYED
        ) {
            $score += 3;
        }

        return $next($score);
    }

}
