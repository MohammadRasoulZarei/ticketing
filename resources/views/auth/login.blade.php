@extends('auth.layout')
@section('style')
    <style>
        .icheck {
            padding-right: 20px
        }

        .icheck input {
            width: 17px;
            height: 17px;
        }
        .error-style{
        color: rgb(255, 21, 0)
    }

    </style>
@endsection
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>ورود به سایت</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>

            <form action="{{url('login')}}" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="ایمیل">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @error('email')
                    <span class="error-style">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="password" class="form-control" placeholder="رمز عبور">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('password')
                    <span class="error-style">{{$message}}</span>
                @enderror
                </div>
                <div class="row p-5">
                    <div class="col-xs-12">
                        <div class="checkbox icheck">
                            <label>
                                <input name="remember" type="checkbox"> مرا به خاطر بسپار
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{-- <div class="social-auth-links text-center">
        <p>- یا -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> ورود با فیسبوک</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> ورود با گوگل</a>
      </div> --}}
            <!-- /.social-auth-links -->

            <a href="#">رمز عبورم را فراموش کرده ام.</a><br>
            <a href="{{ url('register') }}" class="text-center">ثبت نام</a>

        </div>
        <!-- /.login-box-body -->
    </div>
@endsection
