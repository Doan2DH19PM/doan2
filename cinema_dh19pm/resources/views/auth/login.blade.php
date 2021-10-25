<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('public/login') }}/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url('public/login/images/bg.jpg') ;">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Đăng Nhập</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Bạn đã có tài khoản?</h3>

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('login') }}  " class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                    class="form-control{{ $errors->has('email') || $errors->has('username') ? ' is-invalid' : '' }}"
                                    id="email" name="email" value="{{ old('email') }}"
                                    placeholder="Email hoặc Tên đăng nhập" required />
                                @if ($errors->has('email') || $errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ empty($errors->first('email')) ? $errors->first('username') : $errors->first('email') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" Placeholder="Password" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-md-left">
                                    @if (Route::has('login'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('register') }}">
                                            Đăng ký
                                        </a>
                                    @endif
                                </div>
                                <div class="w-50 text-md-right">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('password.request') }}">
                                            Quên Mât Khẩu
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
