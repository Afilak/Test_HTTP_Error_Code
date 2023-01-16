<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getMethod()
    {
        return view('You succed !');
    }

    public function postMethod(Request $request)
    {
        $data = $request->all();
        if(is_numeric($data['parameter'])){
            return response()->json(['message' => 'This is a POST request with valid data'], 200);
        }
        else{
            return response()->json(['error' => 'Invalid data'], 400);
        }
    }
}
