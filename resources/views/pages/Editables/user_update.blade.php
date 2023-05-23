@extends('includes/sidenav')

@section('page-content')
            <div class="container border rounded p-5 mt-5" id="table">
                <div class="container">
                    <div class="mb-5">
                        <a href="{{ route('users_list') }}" class="back-arrow" title="BACK">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    
                    <form method="post" action="{{ route('user-update', ['id' => $tbl_users['id']]) }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label for="name">Name</label>
                                <input type='text' name='name' value="{{ $tbl_users['name'] }}" id="name" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="fb_name">Facebook Name</label>
                                <input type='text' name='fb_name' value="{{ $tbl_users['fb_name'] }}" id="fb_name" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="age">Age</label>
                                <input type='number' name='age' value="{{ $tbl_users['age'] }}" id="age" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="address">Address</label>
                                <input type='text' name='address' value="{{ $tbl_users['address'] }}" id="address" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="contact">Contact</label>
                                <input type='text' name='contact' value="{{ $tbl_users['contact'] }}"  id="contact" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="email">Email</label>
                                <input type='email' name='email' value="{{ $tbl_users['email'] }}" id="email" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="email_verified_at">Email Verified At</label>
                                <input type='text' name='email_verified_at' value="{{ $tbl_users['email_verified_at'] }}" id="email_verified_at" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="username">Username</label>
                                <input type='text' name='username' value="{{ $tbl_users['username'] }}" id="username" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="password">Password</label>
                                <input type='password' name='password' value="{{ $tbl_users['password'] }}" id="password" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="remember_token">Remember Token</label>
                                <input type='text' name='remember_token' value="{{ $tbl_users['remember_token'] }}" id="remember_token" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="created_at">Created At</label>
                                <input type='text' name='created_at' value="{{ $tbl_users['created_at'] }}" id="created_at" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="updated_at">Updated At</label>
                                <input type='text' name='updated_at' value="{{ $tbl_users['updated_at'] }}" id="updated_at" class="form-control mb-3" required />
                            </div>
                        </div>
                        <div class="container mt-2">
                            <button class="btn-profile mt-3" type="submit">
                                <i class="bi bi-arrow-clockwise"></i>
                                &nbsp;Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
@endsection