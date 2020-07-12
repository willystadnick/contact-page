<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contacts extends Controller
{
    public function save(Request $request)
    {
        $return = [
            'alert' => 'danger',
            'message' => 'app.save.501',
        ];

        $request->flash();

        return view('welcome', $return);
    }
}
