@extends('admin.layouts.admin')
@section('title', 'لیست تیکت ها')
@section('subject')
    تعداد تیکت ها(20)
@endsection
@section('style')
    <style>
        .form-check .form-check-input {
            float: none;
            margin-left: 6px
        }
    </style>
@endsection
@section('content')
    <div>
        <div class="card">

            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ردیف</th>
                            <th scope="col">تاریخ شروع</th>
                            <th scope="col">واحد</th>
                            <th scope="col">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments  as $key=> $department )
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{zaman($department->created_at)}}</td>
                            <td>{{$department->name}} </td>
                            <td>
                                <a href="{{route('admin.departments.delete',$department->id)}}" class="btn btn-danger">حذف</a>


                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
