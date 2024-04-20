<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddFeeTypeController extends Controller
{
    public function AddFeeTypeView()
    {
        $array = [
            'name' => 'Alice',
            'age' => 25,
            'city' => 'New York',
        ];

        $newElement = [
            'id' => 1,
            'id2' => 1,
        ];

        array_unshift($array, $newElement);

        dd($array);

        return view('Backend.BasicInfo.FeesSetting.AddFeeType');
    }
}
