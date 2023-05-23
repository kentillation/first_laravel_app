@extends('includes/sidenav')

@section('page-content')
        <div id="loader"></div>
        <div id="forLoader" style="display:none;">
            <div class="container mt-5 mb-5">
                @if(Session::has('success'))
                    <div class="alert alert-success text-center" role="alert" id="alertbox">
                        {{ Session::get('success') }}
                        <button class="btn-close" onclick="closeFn()"></button>
                    </div>
                @endif
                <div class="container border rounded p-5 reports">
                    <h1 class="heading1 text-center mb-5"><strong>LIST OF USERS</strong></h1>
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
                                        <th>ADDRESS</th>
                                        <th>CONTACT</th>
                                        <th>EMAIL</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbl_users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->contact }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('user-edit', ['id' => $user->id] ) }}">
                                                    <button class="btn-view btn-sm" title="MODIFY">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('user-remove', ['id' => $user->id] ) }}">
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
                    <div class="split">
                        <div>
                            <p>TOTAL RECORD(S):
                                <span id="total_records"></span>
                            </p>
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
        </div>
        <div class="modal fade" id="addModal">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h5 class="modal-title">New User</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
                        <div class="container">
                            <form method="POST" action="{{ route('save-user') }}">
                                @csrf
                                <div class="form-ni">
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
					</div> <!-- End of modal body-->
				</div> <!-- End of modal content-->
			</div>
		</div> <!-- End of Add Project Modal-->
        <script>
            /*
            $(document).ready(function() {
                fetch_users_data();
                function fetch_users_data(query = '') 
                {
                    $.ajax({
                        url: "{{ route('live-search') }}",
                        method: 'GET',
                        data: {query:query},
                        dataType: 'json',
                        success: function(data)
                        {
                            $('tbody').html(data.table_data);
                            $('#total_records').text(data.total_data);
                        }
                    })
                }
                $(document).on('keyup', '#search', function() 
                {
                    var query = $(this).val();
                    fetch_users_data(query);
                });
            });
            */
        </script>
@endsection
