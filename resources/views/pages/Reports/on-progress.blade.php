@extends('includes/sidenav')

@section('page-content')
        <div class="mt-5 mb-5">
            <div class="container border rounded p-5 reports">
                <h1 class="heading1 text-center mb-5"><strong>ON-PROGRESS REQUEST</strong></h1>
                <div class="search">
                    <div class="btn-dl me-2">
                        <button class="btn-download">
                            <i class="bi bi-box-arrow-down">&nbsp;</i>
                            PDF</button>
                        <button class="btn-download">
                            <i class="bi bi-box-arrow-down">&nbsp;</i>
                            XLS</button>
                        <button class="btn-download">
                            <i class="bi bi-box-arrow-down">&nbsp;</i>
                            CSV</button>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Requester name...">
                    </div>
                </div>
                <div class="container mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="text-bg-secondary">
                                <tr>
                                    <th>REQUESTER</th>
                                    <th>ADDRESS</th>
                                    <th>PHONE NO.</th>
                                    <th>ITEMS QUANTITY</th>
                                    <th>DELIVERY DATE</th>
                                    <th>REQUESTED SHOPPER</th>
                                    <th>MODE OF PAYMENT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Shizuko</td>
                                    <td>Escalante City</td>
                                    <td>09217843675</td>
                                    <td>7</td>
                                    <td>April 17, 2023 - 10:00 AM</td>
                                    <td>Kurapika Curta</td>
                                    <td>GCash</td>
                                    <td>
                                        <a href="view-onprogress.html">
                                            <button class="btn-view" title="VIEW">
                                                <i class="bi bi-eye p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nubonaga</td>
                                    <td>Bago City</td>
                                    <td>09128734654</td>
                                    <td>4</td>
                                    <td>April 19, 2023 - 09:00 AM</td>
                                    <td>Leorio</td>
                                    <td>Cash On Delivery</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="VIEW">
                                                <i class="bi bi-eye p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Machi</td>
                                    <td>Cadiz City</td>
                                    <td>09019283746</td>
                                    <td>10</td>
                                    <td>April 21, 2023 - 05:00 PM</td>
                                    <td>Kurapika Curta</td>
                                    <td>GCash</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="VIEW">
                                                <i class="bi bi-eye p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ovugin</td>
                                    <td>Bacolod City</td>
                                    <td>09987654321</td>
                                    <td>9</td>
                                    <td>April 23, 2023 - 03:00 PM</td>
                                    <td>Gon Freecs</td>
                                    <td>GCash</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="VIEW">
                                                <i class="bi bi-eye p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chrollo</td>
                                    <td>Sagay City</td>
                                    <td>09123456789</td>
                                    <td>5</td>
                                    <td>April 25, 2023 - 01:00 PM</td>
                                    <td>Leorio</td>
                                    <td>Cash On Delivery</td>
                                    <td>
                                        <a href="#">
                                            <button class="btn-view" title="VIEW">
                                                <i class="bi bi-eye p-1"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="split">
                    <div>
                        <p>TOTAL RECORD(S): 5</p>
                    </div>
                    <div>
                        <span>Previous &nbsp;</span>
                        <button class="btn-nav" title="Previous">
                            <i class="bi bi-chevron-left p-1"></i>
                        </button>
                        <a href="#">
                            <button class="btn-nav" title="Next">
                                <i class="bi bi-chevron-right p-1"></i>
                            </button>
                        </a>
                        <span>&nbsp; Next</span>
                    </div>
                </div>
                <div class="split mt-2">
                    <div></div>
                    <p>Page: 1</p>
                </div>
            </div>
        </div>
@endsection