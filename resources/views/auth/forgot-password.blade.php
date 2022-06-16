<!DOCTYPE html>
<html>

<head>
    <title>Login|Sign-up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="forgot_password">
    <authentication-card>
        <x-slot name="logo">
        </x-slot>
        <div class="forgot_logo">
            <a href="{{url('/')}}">Realesto</a>
        </div>
        <div class="forgot_password_wraper">
            <div>
                <p>Forgot your password? No problem. Just let us know your email address and we will email you a
                    password reset link that will allow you to choose a new one.
                </p>

                @if (session('status'))
                    <div class="session">
                        {{ session('status') }}
                    </div>
                @endif

                <validation-errors class="mb-4" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div>
                        <label for="email">Email</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus />
                    </div>

                    <div>
                        <button>
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </authentication-card>
</body>

</html>
