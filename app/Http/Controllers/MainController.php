<?php


namespace App\Http\Controllers;


use App\Http\Requests\FormRequest;
use App\Scores\Score10;
use App\Scores\Score2;
use App\Scores\Score3;
use App\Scores\Score4;
use App\Scores\Score5;
use App\Scores\Score6;
use App\Scores\Score7;
use App\Scores\Score8;
use App\Scores\Score9;
use Illuminate\Routing\Pipeline;
use App\Scores\Score1;

class MainController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function checkForm(FormRequest $request)
    {
        $score = app(Pipeline::class)
            ->send(0)
            ->through([
                Score1::class,
                Score2::class,
                Score3::class,
                Score4::class,
                Score5::class,
                Score6::class,
                Score7::class,
                Score8::class,
                Score9::class,
                Score10::class,
            ])
            ->thenReturn();

        if ($score >= 5) {
            echo 'Отказ в выдаче кредита';
        } else {
            echo 'Одобрение в выдаче кредита';
        }
    }
}
