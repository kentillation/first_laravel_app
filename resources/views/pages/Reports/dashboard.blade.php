@extends('includes/sidenav')

@section('page-content')
        <div class="container mt-5 mb-5">
            @if(Session::has('success'))
                <div class="alert alert-success text-center" role="alert" id="alertbox">
                    {{ Session::get('success') }}
                    <button class="btn-close" onclick="closeFn()"></button>
                </div>
            @endif
            @if(Session::has('remove'))
                <div class="alert alert-info text-center" role="alert" id="alertbox">
                    {{ Session::get('remove') }}
                    <button class="btn-close" onclick="closeFn()"></button>
                </div>
            @endif
            <div class="container border rounded p-5 reports">
                <h1 class="heading1 text-center mb-5"><strong>DASHBOARD</strong></h1>
                    <div class="search">
                        <div class="btn-dl me-2">
                            <button class="btn-add-user" type="button" title="ADD USER" data-bs-toggle="modal" data-bs-target="#addModal">
                                <i class="bi bi-plus-lg">&nbsp;</i>
                                ADD
                            </button>
                            <a href="{{ route('print-users_list') }}" title="DOWNLOAD AS PDF" target="_blank">
                                <button class="btn-download">
                                    <i class="bi bi-box-arrow-down">&nbsp;</i>
                                    PDF
                                </button>
                            </a>
                            
                            <button class="btn-download" title="DOWNLOAD AS SPREADSHEET" onclick="saveAsExcel('table', 'LIST OF USERS.xls')">
                                <i class="bi bi-box-arrow-down">&nbsp;</i>
                                XLS
                            </button>
                        </div>
                        <div class="input-group mb-3">
                            
                            <span class="input-group-text">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search name...">
                        </div>
                    </div>
                <div class="container mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover text-center" id="table">
                            <thead class="text-bg-secondary">
                                <tr>
                                    <th>NAME</th>
                                    <th>DESCRIPTION</th>
                                    <th>PRICE</th>
                                    <th>AVAILABILITY</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tbl_stocks as $stock)
                                <tr>
                                    <td>{{ $stock->name }}</td>
                                    <td>{{ $stock->description }}</td>
                                    <td>{{ $stock->price }}</td>
                                    <td>{{ $stock->availability }}</td>
                                    <td>
                                        <a href="{{ route('stock-edit', ['id' => $stock->id] ) }}">
                                            <button class="btn-view btn-sm" title="MODIFY">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('stock-remove', ['id' => $stock->id] ) }}">
                                            <button class="btn-restricted btn-sm" title="DELETE">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection