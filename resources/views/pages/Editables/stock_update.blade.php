@extends('includes/sidenav')

@section('page-content')
            <div class="container border rounded p-5 mt-5" id="table">
                <div class="container">
                    <div class="mb-5">
                        <a href="{{ route('dashboard') }}" class="back-arrow" title="BACK">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    
                    <form method="post" action="{{ route('stock-update', ['id' => $tbl_stocks['id']]) }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label for="name">Name</label>
                                <input type='text' name='name' value="{{ $tbl_stocks['name'] }}" id="name" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="description">Description</label>
                                <input type='text' name='description' value="{{ $tbl_stocks['description'] }}" id="description" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="price">Price</label>
                                <input type='number' name='price' value="{{ $tbl_stocks['price'] }}" id="price" class="form-control mb-3" required />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="availability">Availability</label>
                                <input type='text' name='availability' value="{{ $tbl_stocks['availability'] }}" id="availability" class="form-control mb-3" required />
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