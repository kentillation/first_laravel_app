<!DOCTYPE html>
<html lang="en">

<head>
    <title>Keonibeng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo asset('storage/css/style.css') ?>" />
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap/js/bootstrap.min.js') ?>" />
    <script src="<?php echo asset('storage/main.js') ?>"></script>
</head>

<body>
    <main>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="container logo-container">
                        <img src="<?php echo asset('storage/images/logo.png') ?>" alt="Keonibeng Logo"/>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mb-5">
                    <div class="container login-container border rounded">
                        <h2 class="text-center mt-4 mb-3">SIGN IN</h2>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-ni">
                                @if(Session::has('error'))
                                    <div class="alert alert-danger text-center" role="alert" id="alertbox">
                                        {{ Session::get('error') }}
                                        <button class="btn-close" onclick="closeFn()"></button>
                                    </div>
                                @endif
                                <div class="form-floating">
                                    <input type="username" name="username" id="username" class="form-control mt-3"
                                        placeholder="Username" required />
                                    <label for="username">Username</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control mt-3 mb-3"
                                        placeholder="Password" required />
                                    <label for="password">Password</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox">
                                    <label for="password">Show Password</label>
                                </div>
                                <button class="btn-submit mb-2" type="submit">SUBMIT</button>
                            </div>
                        </form>
                        <p class="text-center mb-4">Don't have an account? <span><a href="{{ route('signup') }}">Sign-up
                                    here</a></span>.</p>
                        <div class="split mb-4">
                            <a href="#" class="ms-5">Forgot password?</a>
                            <a href="#" class="me-5">Help?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>