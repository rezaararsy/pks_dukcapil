<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="assets/css/login.css"> --}}
  <title>@yield('title')</title>
</head>
        <body style="margin-top: 180px;">
            <div class="container">
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="assets/images/b803f8a7d6b11cf1e7ce5918a603ce4c.jpg" alt="login" class="login-card-img">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                              <div class="brand-wrapper">
                                <img src="assets/images/logo.png" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Register your account</p>
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="sr-only">Nama</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="username" class="sr-only">username</label>
                                    <input type="username" name="username" id="uesrname" class="form-control @error('username') is-invalid @enderror" placeholder="username">
                                    @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" class="sr-only">Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password">
                                    @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                  <input name="register" id="register" class="btn btn-block login-btn mb-4" type="submit" value="Register">
                                </form>
                                <p class="login-card-footer-text">have an account? <a href="{{ route('login') }}" class="text-reset">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
