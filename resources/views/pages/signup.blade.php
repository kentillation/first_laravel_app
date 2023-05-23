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
                <div class="col-md-6 col-sm-12">
                    <div class="container logo-container">
                        <img src="<?php echo asset('storage/images/logo.png') ?>" alt="Keonibeng Logo"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="container login-container border rounded">
                        <h2 class="text-center mt-4 mb-3">SIGN UP</h2>
                        <form method="POST" action="{{ route('save-user') }}">
                            @csrf
                            <div class="form-ni">
                                @if(Session::has('success'))
                                    <div class="alert alert-success text-center" role="alert" id="alertbox">
                                        {{ Session::get('success') }}
                                        <button class="btn-close" onclick="closeFn()"></button>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" id="name" name="name" class="form-control mt-2" placeholder="Name" required/>
                                            <label for="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" id="fb_name" name="fb_name" class="form-control mt-2" placeholder="Facebook Name" required/>
                                            <label for="fb_name">Facebook Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" id="age" name="age" class="form-control mt-2" placeholder="Age" required/>
                                            <label for="age">Age</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" id="address" name="address" class="form-control mt-2" placeholder="Address" required/>
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" id="contact" name="contact" class="form-control mt-2" placeholder="Contact Number" required/>
                                            <label for="name">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" id="email" name="email" class="form-control mt-2" placeholder="Email" required/>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" id="username" name="username" class="form-control mt-2" placeholder="Username" required/>
                                            <label for="username">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" id="password" name="password" class="form-control mt-2 mb-3" placeholder="Password" required/>
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember_checkbox" required>
                                    <label>Remember me to this device.</label>
                                </div>
                                <button type="submit" class="btn-submit mb-2">SUBMIT</button>
                            </div>
                        </form>
                        <p class="text-center mb-4">Have already an account? <span><a href="{{ route('index') }}">Sign-in here</a></span>.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>