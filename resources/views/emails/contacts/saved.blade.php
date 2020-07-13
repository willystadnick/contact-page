<h1>{{ __('contacts.email.title') }}</h1>
<p>{{ __('contacts.email.description') }}</p>
<p>{{ __('contacts.form.name') }}: <b>{{ $contact->name }}</b></p>
<p>{{ __('contacts.form.email') }}: <b>{{ $contact->email }}</b></p>
<p>{{ __('contacts.form.phone') }}: <b>{{ $contact->phone }}</b></p>
<p>{{ __('contacts.form.message') }}:</p>
<p><b>{{ $contact->message }}</b></p>
<p>{{ __('contacts.email.ip') }}: <b>{{ $contact->ip }}</b></p>
<p>{{ __('contacts.email.date') }}: <b>{{ $contact->created_at }}</b></p>
<p>{{ __('contacts.email.attached') }}</p>
<p>{{ __('contacts.email.bye') }}</p>
