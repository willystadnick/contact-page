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

        $path = $request->file('attach')->store('contacts');

        $return['path'] = $path;

        return view('welcome', $return);
    }
}
