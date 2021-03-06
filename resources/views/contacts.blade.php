<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ env('APP_NAME') }}</h1>
                        @if (isset($alert))
                        <div class="alert alert-{{ $alert }}" role="alert">
                            {{ __($message) }}
                            @if (isset($debug))
                            <p><small>{{ $debug }}</small></p>
                            @endif
                        </div>
                        @endif
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group @error('name') text-danger @enderror">
                                <label for="field-name">{{ __('contacts.form.name') }}</label>
                                <input type="text" class="form-control" id="field-name" name="name" value="{{ old('name') }}" required>
                                @error('name') <small>{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group @error('email') text-danger @enderror">
                                <label for="field-email">{{ __('contacts.form.email') }}</label>
                                <input type="email" class="form-control" id="field-email" name="email" value="{{ old('email') }}" required>
                                @error('email') <small>{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group @error('phone') text-danger @enderror">
                                <label for="field-phone">{{ __('contacts.form.phone') }}</label>
                                <input type="text" class="form-control" id="field-phone" name="phone" value="{{ old('phone') }}" required>
                                @error('phone') <small>{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group @error('message') text-danger @enderror">
                                <label for="field-message">{{ __('contacts.form.message') }}</label>
                                <textarea class="form-control" id="field-message" name="message" required>{{ old('message') }}</textarea>
                                @error('message') <small>{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group @error('attach') text-danger @enderror">
                                <label for="field-attach">{{ __('contacts.form.attach') }}</label>
                                <input type="file" class="form-control-file" id="field-attach" name="attach" required>
                                @error('attach') <small>{{ $message }}</small> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('contacts.form.submit') }}</button>
                            <input class="btn btn-secondary" type="reset" value="Reset">
                            <a class="btn btn-danger" href="/" role="button">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
