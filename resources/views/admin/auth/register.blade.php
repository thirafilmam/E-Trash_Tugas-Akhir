<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar</title>
    <link href="{{ asset('resources/style-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('resources/style-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-success">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Admin Baru</h1>
                            </div>
                            <form action="{{ route('admin.register.simpan') }}" method="POST" class="user">
                                @csrf
                                <div class="form-group">
                                    <input name="nama" type="text"
                                        class="form-control form-control-user @error('nama')is-invalid @enderror"
                                        id="exampleInputName" placeholder="Nama">
                                    @error('nama')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email"
                                        class="form-control form-control-user @error('email')is-invalid @enderror"
                                        id="exampleInputEmail" placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password"
                                            class="form-control form-control-user @error('password')is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="password_confirmation" type="password"
                                            class="form-control form-control-user @error('password_confirmation')is-invalid @enderror"
                                            id="exampleRepeatPassword" placeholder="Ulangi Password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-user btn-block">Daftar</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('admin.login') }}">Sudah Punya Akun Admin? Login
                                    Yuk!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
