<!DOCTYPE html>
<html>

<head>
    <title>Login|Sign-up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="reset_password">
    <authentication-card>
        <x-slot name="logo">
            {{-- <authentication-card-logo /> --}}
        </x-slot>
        <div class="reset_logo">
            <a href="{{url('/')}}">Realesto</a>
        </div>
        <validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div>
                <label>Email</label>
                <input id="email" type="email" name="email" :value="old('email', $request->email)"
                    required autofocus />
            </div>

            <div>
                <label>Password</label>
                <input id="password" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div>
                <label>Confirm Password</label>
                <input id="password_confirmation" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div>
                <button>
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </authentication-card>
</body>

</html>
