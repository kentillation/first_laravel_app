<!DOCTYPE html>
<html lang="en">
<head>
    <title>Keonibeng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo asset('storage/css/style.css') ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap/js/bootstrap.min.js') ?>" />
    <link rel="icon" href="<?php echo asset('storage/images/logo1.png') ?>" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="<?php echo asset('storage/main.js') ?>"></script>
    <script src="<?php echo asset('storage/saveAsExcel.js') ?>"></script>
</head>
<body onload="loaderFunction()">
    <main>
        <header>
            <!--<nav class="navbar navbar-expand-md fixed-top">
                <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav align-items-center justify-content-center">
                        <li class="mt-2">
                            <a href="{{ route('dashboard') }}" class="nav-link" title="Home"><i class="bi bi-house"></i></a>
                        </li>
                        <li class="mt-2">
                            <a href="{{ route('account') }}" class="nav-link" title="Account"><i class="bi bi-person-circle"></i></a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="nav-link position-relative" title="Notifications">
                                <i class="bi bi-bell"></i>
                                <span class="position-absolute top-2 start-50 translate-middle badge rounded-pill bg-danger">
                                    2
                                </span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="nav-link" title="Call Now!"><i class="bi bi-telephone"></i></a>
                        </li>
                        <li class="mt-2">
                            <a href="help.html" class="nav-link" title="Help?"><i class="bi bi-question-circle"></i></a>
                        </li>
                        <li class="mt-2">
                            <a href="../Other/about.html" class="nav-link" title="About"><i class="bi bi-info-circle"></i></a>
                        </li>
                        <li class="mt-2">
                            <a href="../index.html" class="nav-link" title="Logout"><i class="bi bi-box-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>-->
        </header>
        <button class="sidenave-btn-toggle" title="SHOW MENU" onclick="sidenavBtn()">
            <i class="bi bi-list"></i>
        </button>
        <div class="sidenav" id="sidenav">
            <div class="sidenav-content">
                <div class="logo">
                    <img src="<?php echo asset('storage/images/Logo_Transpa.png') ?>" width="80px" />
                </div>
                <hr>
                <h5 class="mb-3">Reports</h5>
                <ul>
                    <li>
                        <a href="{{ route('dashboard') }}" class="btn-sidenav" title="Dashboard">
                            <i class="bi bi-pie-chart"></i>
                            <span>
                                &nbsp; Dashboard
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pending') }}" class="btn-sidenav" title="Pending">
                            <i class="bi bi-clock-history"></i>
                            <span>
                                &nbsp; Pending
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('onprogress') }}" class="btn-sidenav" title="On-progress">
                            <i class="bi bi-bar-chart-steps"></i>
                            <span>
                                &nbsp; On-progress
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('delivered') }}" class="btn-sidenav" title="Delivered">
                            <i class="bi bi-cart-check"></i>
                            <span>
                                &nbsp; Delivered
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cancelled') }}" class="btn-sidenav" title="Cancelled">
                            <i class="bi bi-exclamation-diamond"></i>
                            <span>
                                &nbsp; Cancelled
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('statistics') }}" class="btn-sidenav" title="Statistics">
                            <i class="bi bi-bar-chart-line"></i>
                            <span>
                                &nbsp; Statistics
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('financialSummary') }}" class="btn-sidenav" title="Financial Summary">
                            <i class="bi bi-receipt-cutoff"></i>
                            <span>
                                &nbsp; Financial Summary
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users_list') }}" class="btn-sidenav" title="List of Users">
                            <i class="bi bi-people"></i>
                            <span>
                                &nbsp; List of Users
                            </span>
                        </a>
                    </li>
                </ul>
                <hr>
                <h5 class="mb-3">Settings</h5>
                <ul>
                    <li>
                        <a href="{{ route('account') }}" class="btn-sidenav" title="Account">
                            <i class="bi bi-person-circle"></i>
                            <span>
                                &nbsp; Account
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="btn-sidenav" title="About">
                            <i class="bi bi-info-circle"></i>
                            <span>
                                &nbsp; About
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn-sidenav" title="Backup Database" data-bs-toggle="modal"
                            data-bs-target="#backupModal">
                            <i class="bi bi-cloud-download"></i>
                            <span>
                                &nbsp; Backup Database
                            </span>
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <h6>ID:</h6>
                    </div>
                    <div class="col-sm-10 col-xs-12">
                        <h6>12345</h6>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-3 col-xs-12">
                        <h6>User:</h6>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <h6>Kent Anthony</h6>
                    </div>
                </div>
                <div class=" mt-4">
                    <form action="{{ route('logout') }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-signout" type="submit" title="SIGN OUT">
                            <i class="bi bi-box-arrow-left"></i>
                            <span>
                                &nbsp; SIGN OUT
                            </span>
                        </button>
                    </form>
                </div>
            </div>
            <button class="btn-sidenav-hide" onclick="sidenavHide()" title="HIDE">
                <i class="bi bi-chevron-double-left"></i>
            </button>
        </div> <!-- end of sidenav -->
        @yield('page-content')
    </main>
</body>
</html>