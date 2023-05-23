@extends('includes/sidenav')

@section('page-content')
        <div class="mt-5">
            <div class="container border rounded p-5 reports">
                <h1 class="text-center mb-5"><strong>FINANCIAL SUMMARY</strong></h1>
                <div class="search">
                    <div class="me-2">
                        <button class="btn-view">
                            <i class="bi bi-box-arrow-down"></i>
                            &nbsp;PDF</button>
                        <button class="btn-view">
                            <i class="bi bi-box-arrow-down"></i>
                            &nbsp;XLS</button>
                        <button class="btn-view">
                            <i class="bi bi-box-arrow-down"></i>
                            &nbsp;CSV</button>
                    </div>
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
                <div class="container mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="text-bg-secondary">
                                <tr>
                                    <th>MONTH</th>
                                    <th>CAPITAL</th>
                                    <th>EXPENSES</th>
                                    <th>BALANCE</th>
                                    <th>INCOME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>JANUARY</td>
                                    <td>₱500,000</td>
                                    <td>₱410,300</td>
                                    <td>₱89,700</td>
                                    <td>₱850,100</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>FEBRUARY</td>
                                    <td>₱500,000</td>
                                    <td>₱420,500</td>
                                    <td>₱79,500</td>
                                    <td>₱820,500</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>MARCH</td>
                                    <td>₱500,000</td>
                                    <td>₱418,050</td>
                                    <td>₱81,950</td>
                                    <td>₱856,654</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>APRIL</td>
                                    <td>₱500,000</td>
                                    <td>₱435,651</td>
                                    <td>₱64,349</td>
                                    <td>₱910,752</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>MAY</td>
                                    <td>₱500,000</td>
                                    <td>₱456,899</td>
                                    <td>₱43,101</td>
                                    <td>₱955,132</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>JUNE</td>
                                    <td>₱500,000</td>
                                    <td>₱410,300</td>
                                    <td>₱89,700</td>
                                    <td>₱986,356</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>JULY</td>
                                    <td>₱500,000</td>
                                    <td>₱420,500</td>
                                    <td>₱79,500</td>
                                    <td>₱103,500,336</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AUGUST</td>
                                    <td>₱500,000</td>
                                    <td>₱418,050</td>
                                    <td>₱81,950</td>
                                    <td>₱113,650,129</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SEPTEMBER</td>
                                    <td>₱500,000</td>
                                    <td>₱435,651</td>
                                    <td>₱64,349</td>
                                    <td>₱128,552,358</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>OCTOBER</td>
                                    <td>₱500,000</td>
                                    <td>₱456,899</td>
                                    <td>₱43,101</td>
                                    <td>₱133,589,323</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>NOVEMBER</td>
                                    <td>₱500,000</td>
                                    <td>₱435,651</td>
                                    <td>₱64,349</td>
                                    <td>₱143,000,897</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DECEMBER</td>
                                    <td>₱500,000</td>
                                    <td>₱456,899</td>
                                    <td>₱43,101</td>
                                    <td>₱158,123,654</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="PRINT">
                                                <i class="bi bi-printer p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection