@extends('auth.layout')

@section('style')
<style>
    input[type=checkbox]{
        height: 20px;
        width: 20px;
        margin-left: 20px;
    }
    .icheck {
        padding-right: 20px
    }
    .error-style{
        color: rgb(255, 21, 0)
    }

</style>
@endsection




@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>ثبت نام در سایت</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">ثبت نام کاربر جدید</p>

        <form action="{{url('register')}}" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="name" placeholder="نام و نام خانوادگی">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @error('name')
                    <span class="error-style">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="ایمیل">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('email')
                    <span class="error-style">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="رمز عبور">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                    <span class="error-style">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password_confirmation" class="form-control" placeholder="تکرار رمز عبور">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                @error('password_confirmation')
                    <span class="error-style">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <select  name="role" >
                    <option value="user">کاربر عادی</option>
                    <option value="admin"> ادمین</option>

                </select>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @error('role')
                <span class="error-style">{{$message}}</span>
            @enderror
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">ثبت نام</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        {{-- <div class="social-auth-links text-center">
            <p>- یا -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>
                ثبت نام با فیسبوک</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>
                ثبت نام با گوگل</a>
        </div> --}}

        <a href="{{url('login')}}" class="text-center">من قبلا ثبت نام کرده ام</a>
    </div>
    <!-- /.form-box -->
</div>
@endsection
