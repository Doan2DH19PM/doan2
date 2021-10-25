@extends('layouts.frontend')
@section('content')
    <div class="col-md-6">
        <div class="login-page">
            <h4 class="title">Tạo Tài Khoản Người Dùng</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <div class="button1">
                    @if (Route::has('login'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('register') }}">
                        Đăng Ký
                    </a>
                    @endif
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="login-title">
            <h4 class="title">Registered Customers</h4>
            <div id="loginbox" class="loginbox">
                <form action="{{ route('login') }}" method="post" name="login" id="login-form">
                    @csrf
                    <fieldset class="input">
                        <p id="login-form-username">
                            <label for="email">Email</label>
                            <input id="email" type="text" name="email"
                                class="inputbox {{ $errors->has('email') || $errors->has('username') ? ' is-invalid' : '' }}"
                                size="18" autocomplete="off">
                            @if ($errors->has('email') || $errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ empty($errors->first('email')) ? $errors->first('username') : $errors->first('email') }}
                                    </strong>
                                </span>
                            @endif
                        </p>
                        <p id="login-form-password">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password"
                                class="inputbox  @error('password') is-invalid @enderror" size="18" autocomplete="off">
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </p>
                        <div class="remember">
                            @if (Route::has('login'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('register') }}">
                                    Quyên Mật Khẩu
                                </a>
                            @endif
                            <input type="submit" name="Submit" class="button" value="Login">
                            <div class="clear"></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>

@endsection
