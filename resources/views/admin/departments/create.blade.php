@extends('admin.layouts.admin')
@section('title', 'ایجا واحد ')

@section('content')
@include('home.sections.errors')
    <form action="{{route('admin.departments.store')}}" method="POST">
        <div class="form-row">
            @csrf
            <div class="form-group col-md-4">
                <label for="inputEmail4">نام بخش را وارد کنید</label>
                <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="بخش">
            </div>

        </div>
        <div class="clearfix"></div>

        <div class="form-group col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ایجاد</button>
        </div>
    </form>

@endsection
