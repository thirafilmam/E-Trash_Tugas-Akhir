<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="{{ asset('resources/style-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('resources/style-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-success">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang Admin</h1>
                                    </div>
                                    <form action="{{ route('admin.login.aksi') }}" method="POST" class="user">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input name="remember" type="checkbox" class="custom-control-input"
                                                    id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block btn-user">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('admin.register') }}">Buat Akun Admin Baru!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
