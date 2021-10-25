@extends('layouts.frontend')
@section('content')

    <form>
        <div class="register-top-grid">
            <h3>PERSONAL INFORMATION</h3>
            <div>
                <span>First Name<label>*</label></span>
                <input type="text" class="form-control">
            </div>
            <div>
                <span>Last Name<label>*</label></span>
                <input type="text" class="form-control">
            </div>
            <div>
                <span>Email Address<label>*</label></span>
                <input type="text" class="form-control">
            </div>
            <div class="clear"> </div>
            <a class="news-letter" href="#">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for
                    Newsletter</label>
            </a>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
        <div class="register-bottom-grid">
            <h3>LOGIN INFORMATION</h3>
            <div>
                <span>Password<label>*</label></span>
                <input type="password" class="form-control">
            </div>
            <div>
                <span>Confirm Password<label>*</label></span>
                <input type="password" class="form-control">
            </div>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
        <input type="submit" value="submit">
    </form>
@endsection
