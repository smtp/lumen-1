@extends('layouts.default')
@section('content')
    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="/auth">
            <span class="login100-form-title">
                Sign In
            </span>

        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
            <input class="input100" type="text" name="user" placeholder="Username">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
        </div>

        <div class="text-right p-t-13 p-b-23">
                <span class="txt1">
                    Forgot
                </span>

            <a href="#" class="txt2">
                Username / Password?
            </a>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Sign in
            </button>
        </div>

        <div class="flex-col-c p-t-170 p-b-40">
                <span class="txt1 p-b-9">
                    Don’t have an account?
                </span>

            <a href="{{ route('pages.sign-up') }}" class="txt3">
                Sign up now
            </a>
        </div>
    </form>
@stop
