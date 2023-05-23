@extends('includes/sidenav')

@section('page-content')
<div class="mt-5 mb-5">
            <div class="container border rounded p-5 reports">
                <h1 class="heading1 text-center mb-5"><strong>STATISTICAL ANALYSIS</strong></h1>
                <div class="search">
                    <div></div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-calendar"></i>
                        </span>
                        <select class="form-select">
                            <option selected>-select filter-</option>
                            <option>Week</option>
                            <option>Month</option>
                            <option>Year</option>
                        </select>
                    </div>
                </div>
                <div class="statistics p-3">
                    <div class="row stat-month">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-1">
                                    <p>Jan</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>Feb</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>Mar</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>Apr</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>May</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>June</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>July</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>Aug</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>Sept</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>Oct</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>Nov</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>Dec</p>
                                </div>
                            </div> <!-- end of row-->
                        </div>
                        <div class="col-lg-12">
                            <div class="row stat">
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income1"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses1"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income2"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses2"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income3"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses3"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income4"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses4"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income5"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses5"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance5"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income6"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses6"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance6"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income7"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses7"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance7"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income8"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses8"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance8"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income9"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses9"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance9"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income10"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses10"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance10"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income11"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses11"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance11"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="box-income12"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-expenses12"></div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box-balance12"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end of row-->
                        </div>
                    </div>


                </div> <!-- end of statistics -->
                <div class="container mt-5">
                    <div class="marker">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="marker1"></div>
                                <p>Income</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="marker2"></div>
                                <p>Balance</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="marker3"></div>
                                <p>Expenses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection