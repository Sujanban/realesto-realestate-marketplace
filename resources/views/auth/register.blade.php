<!DOCTYPE html>
<html>

<head>
    <title>Login|Sign-up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <x-slot name="logo">
    </x-slot>
    <div class="signup">
        <div class="signup_image">
            <div>
                <h1>Already a Member? <strong>No Worries</strong></h1>
                <a href="{{ url('/login') }}" class="secondary-btn">Login Here</a>
            </div>
        </div>
        <div class="signup_form">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1><a style="font-size: 3rem; color: black" href="{{ url('/') }}" >Realesto</a></h1>
                <h2>Dont Have an Account? Register Here</h2>
                <x-jet-validation-errors style="color: #f96816" />

                <div>
                    <label for="name">Name</label>
                    <input id="name" type="text" class="text-input" placeholder="Enter Your Name" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div>
                    <label for="email">Email</label>
                    <input id="email" class="text-input" type="email" placeholder="Enter Email" name="email"
                        :value="old('email')" required />
                </div>

                <div>
                    <label for="password">Password</label>
                    <input id="password" class="text-input" type="password" placeholder="Enter Password"
                        name="password" required autocomplete="new-password" />
                </div>

                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" class="text-input" placeholder="Confirm Password" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>



                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif


                <div class="flex items-center justify-end mt-4">
                    <div class="btn_wrapper">
                        <a href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>

                    <div class="btn_wrapper">
                        <button class="btn">
                            {{ __('Register') }}
                            <button>
                            </button>
                    </div>


                    {{-- <div class="btn_wrapper">
                        <a href="#" type="submit" class="btn ">Sign Up</a>
                    </div>

                    <div class="or">
                        <hr class="bar" />
                        <span>OR</span>
                        <hr class="bar" />
                    </div>
                    <div class="btn_wrapper">
                        <a href="{{ url('/login') }}" class="secondary-btn">Sign In</a>
                    </div> --}}

                    <footer class="main-footer">
                        <p>Copyright &copy; 2022, Realesto All Rights Reserved</p>
                        <div>
                            <a href="{{ url('/terms') }}">Terms of use</a> | <a href="{{ url('/policy') }}">Privacy
                                Policy</a>
                        </div>
                    </footer>
            </form>

        </div>

    </div>
</body>

</html>
