<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSaved;
use App\Http\Requests\Contacts as ContactsRequest;
use App\Contact;

class Contacts extends Controller
{
    public function save(ContactsRequest $request)
    {
        try {
            $path = $request->file('attach')->store('contacts');

            $contact = new Contact;

            $contact->fill($request->all());

            $contact->attach = $path;
            $contact->ip = $request->ip();

            $contact->save();

            Mail::to(env('ADMIN_MAIL'))
                ->send(new ContactSaved($contact));

            $return = [
                'alert' => 'success',
                'message' => 'contacts.save.200',
            ];
        } catch (\Exception $e) {
            $return = [
                'alert' => 'danger',
                'message' => 'contacts.save.500',
            ];

            if (env('APP_DEBUG')) {
                $return['debug'] = $e->getMessage();
                // dd($e);
            }

            $request->flash();
        }

        return view('contacts', $return);
    }
}
