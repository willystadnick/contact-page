<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Contacts as ContactsRequest;

class Contacts extends Controller
{
    public function save(ContactsRequest $request)
    {
        $return = [
            'alert' => 'danger',
            'message' => 'app.save.501',
        ];

        $request->flash();

        return view('welcome', $return);
    }
}
