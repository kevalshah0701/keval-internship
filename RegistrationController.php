<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'usrnm'   => 'required',
                'email' => 'required|email',
                'psw'   => 'required'

            ]
        );

        echo "<pre>";
        print_r($request->all());



       //reload(form);
        //return back();
    }
}
