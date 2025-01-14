<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calculate($number1, $calculate, $number2)
    {
        if ($calculate == "addition") {
            $result = $number1 + $number2;
        } elseif ($calculate == "subtraction") {
            $result = $number1 - $number2;
        } elseif ($calculate == "multiplication") {
            $result = $number1 * $number2;
        } elseif ($calculate == "division") {
            $result = $number1 / $number2;
        } else {
            echo "再度入力してください";
        }

        return view("message.calculate", [
            "result" => $result
        ]);
    }
}
