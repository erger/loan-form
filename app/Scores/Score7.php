<?php


namespace App\Scores;


use Closure;

final class Score7 extends Score
{
    public function handle(int $score, Closure $next)
    {
        if (
            $this->loansDebts
            && $this->compareRepaymentsAndIncome()

        ) {
            $score += 3;
        }

        return $next($score);
    }

    private function compareRepaymentsAndIncome(): bool
    {
        return $this->monthlyLoanRepayment > ($this->monthlyIncome * 0.5);
    }

}
