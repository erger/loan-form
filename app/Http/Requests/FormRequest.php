<?php


namespace App\Http\Requests;


use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest as Request;

/**
 * Class FormRequest
 *
 * @package Http\Requests
 */
class FormRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'surname' => 'required|string',
            'firstName' => 'required|string',
            'patronymic' => 'nullable|string',
            'gender' => 'required|int|min:0|max:1',
            'dateOfBirth' => 'required|date|date_format:Y-m-d|before:-14 years|after:-65',
            'amountOfChildren' => 'required|int|min:0|max:30',
            'maritalStatus' => 'required|int|min:0|max:1',
            'monthlyIncome' => 'required|int|min:0',
            'typeOfEmployment' => 'required|int|min:0|max:3',
            'realEstate' => 'required|bool',
            'loans' => 'required|bool',
            'loansDebts' => 'required|bool',
            'monthlyLoanRepayment' => 'required_if:loans,1|nullable|int|min:0',
        ];
    }

    public function getAge(): int
    {
        return Carbon::parse($this->get('dateOfBirth'))->age;
    }

}
