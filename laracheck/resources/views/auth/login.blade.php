<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <title>Admin - Login</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/images') }}/favicon.ico">
    <link href="{{ asset('backend/css') }}/style.css" rel="stylesheet">
</head>

<body class="vh-100"
    style="background-image: url({{ asset('backend/images/backfoto.jpeg') }});
background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  opacity: 0.9;
  ">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="{{ asset('backend/images') }}/logo.png"
                                                alt="" width="100px"></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input id="email" type="email" name="email" class="form-control"
                                                placeholder="hello@example.com " required autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input id="password" type="password" name="password" class="form-control"
                                                value="Password" required autofocus>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>

                                        <!-- Remember Me -->
                                        {{-- <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif

                                            <x-button class="ml-3">
                                                {{ __('Log in') }}
                                            </x-button>
                                        </div> --}}
                                    </form>
                                    <div class="row d-flex justify-content-between mt-4 mb-2">
                                        <div class="mb-1">
                                            <a href="page-forgot-password.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="new-account mt-1">
                                        <p>Don't have an account?
                                            <a class="text-primary" href="{{ route('register') }}">Sign
                                                up</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('backend/vendor') }}/global/global.min.js"></script>
    <script src="{{ asset('backend/js') }}/custom.min.js"></script>
    <script src="{{ asset('backend/js') }}/dlabnav-init.js"></script>
    <script src="{{ asset('backend/js') }}/styleSwitcher.js"></script>
</body>

</html>
