<?php


namespace App\Scores;


use Closure;

final class Score6 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if (
            //В ТЗ указано, что возраст должен быть от 14 до 65 лет
            $this->age > 65
            && $this->loansDebts
            && $this->typeOfEmployment == self::UNEMPLOYED
        ) {
            $score += 3;
        }

        return $next($score);
    }

}
