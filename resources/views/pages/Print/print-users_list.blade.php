<!DOCTYPE html>
<html lang="en">
<head>
    <title>Keonibeng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo asset('storage/css/style.css') ?>" />
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap/js/bootstrap.min.js') ?>" />
    <link rel="stylesheet" href="<?php echo asset('storage/images/logo1.png') ?>" />

    <!-- Latest compiled and minified CSS4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <main>
        <br />
        <img src="<?php echo asset('storage/images/submark.png') ?>" class="print-logo-left">
        <img src="<?php echo asset('storage/images/logo1.png') ?>" class="print-logo-right">
        
        <!-- Main -->
        <div>
            <!-- List of Users -->
            <div class="container">
                <center>
                    <br /><br />
                    <h6>Republic of the Philippines</h6>
                    <h6>Province of Negros Occidental</h6>
                    <h6>City of Sagay</h6>
                    <h6>Barangay Paraiso | 6123</h6>
                    <br />
                    <h3>OFFICE OF THE KEONIBENG</h3>
                    <br /><br />
                    <h3><strong>List of USERS</strong></h3>
                </center>
                <br />
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>NAME</th>
                                <th>FB NAME</th>
                                <th>AGE</th>
                                <th>ADDRESS</th>
                                <th>CONTACT</th>
                                <th>EMAIL</th>
                                <th>USERNAME</th>
                                <th>CREATED_AT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tbl_users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->fb_name }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->contact }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End of List of Users -->
            </div> <!-- End of Main -->
        </div>
    </main>
</body>
</html>
<script type="text/javascript">
//for Print
    function PrintPage() {
        window.print();
        }
        window.addEventListener('DOMContentLoaded', (event) => {
        PrintPage()
        setTimeout(function(){ window.close() },750)
    });
</script>