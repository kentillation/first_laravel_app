@extends('includes/sidenav')

@section('page-content')
            <div class="container p-5" id="table">
                <h1 class="text-center mb-4"><strong>Profile</strong></h1>
                <div class="pp">
                    <img src="<?php echo asset('storage/images/logo1.png') ?>" alt="Profile Picture" width="170" id="default_pp" />
                    <div id="image-preview"></div>
                    <form id="upload-form" enctype="multipart/form-data">
                        <label for="image-upload" class="btn-profile mt-4" onclick="upload_pp()" id="upload-pp">
                            <i class="bi bi-arrow-left-right"></i>
                            &nbsp; Change Image
                        </label>
                        <input type="file" id="image-upload" name="image-upload" accept="image/*">
                    </form>
                </div>

                <div class="container">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="name">Name</label>
                                <input type="text" value="Kent Anthony Engbio" id="name" class="form-control mb-3" required />
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="name">Phone Number</label>
                                <input type="number" value="09453145499" id="number" class="form-control mb-3" required />
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="address">Address</label>
                                <input type="text" value="Sagay City" id="address" class="form-control mb-3" required />
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="email">Email</label>
                                <input type="email" value="kentanthony2022@outlook.com" id="email" class="form-control mb-3"
                                    required />
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="username">Username</label>
                                <input type="text" value="yours_kaett" id="username" class="form-control mb-3" required />
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="password">Password</label>
                                <input type="password" value="********" id="password" class="form-control mb-1"
                                    readonly />
                                <a href="change-pass.html">Change password
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container mt-2">
                    <button class="btn-profile mt-3" data-bs-target="#updateModal" data-bs-toggle="modal">
                        <i class="bi bi-arrow-clockwise"></i>
                        &nbsp;Update</button>
                    <button class="btn-deactivate mt-3" data-bs-target="#deactivateModal" data-bs-toggle="modal">
                        <i class="bi bi-person-x"></i>
                        &nbsp;Deactivate Account</button>
                </div>
            </div>
@endsection