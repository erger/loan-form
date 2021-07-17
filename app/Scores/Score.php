<?php


namespace App\Scores;


use App\Http\Requests\FormRequest;
use Carbon\Carbon;
use Closure;

abstract class Score
{
    protected const MALE = 1;
    protected const FEMALE = 0;

    protected const SINGLE = 0;
    protected const MARRIED = 1;

    protected const UNEMPLOYED = 0;
    protected const CONTRACT = 1;
    protected const SELF_EMPLOYED = 2;
    protected const ENTREPRENEUR = 3;

    protected int $gender;
    protected int $age;
    protected int $amountOfChildren;
    protected int $maritalStatus;
    protected int $monthlyIncome;
    protected int $typeOfEmployment;
    protected bool $realEstate;
    protected bool $loans;
    protected bool $loansDebts;
    protected ?int $monthlyLoanRepayment;

    public function __construct(FormRequest $request)
    {
        $validated = $request->validated();

        $this->gender = $validated['gender'];
        $this->age = Carbon::parse($validated['dateOfBirth'])->age;
        $this->amountOfChildren = $validated['amountOfChildren'];
        $this->maritalStatus = $validated['maritalStatus'];
        $this->monthlyIncome = $validated['monthlyIncome'];
        $this->typeOfEmployment = $validated['typeOfEmployment'];
        $this->realEstate = $validated['realEstate'];
        $this->loans = $validated['loans'];
        $this->loansDebts = $validated['loansDebts'];
        $this->monthlyLoanRepayment = $validated['monthlyLoanRepayment'];
    }

    abstract public function handle(int $score, Closure $next);

}
