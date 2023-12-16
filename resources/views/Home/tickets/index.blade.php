@extends('home.layouts.home')
@section('title','لیست تیکت ها')
@section('subject')
تعداد تیکت ها(20)
@endsection
@section('content')
<div >
    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ردیف</th>
            <th scope="col">موضوع</th>
            <th scope="col">واحد</th>
            <th scope="col">اولویت</th>
            <th scope="col">وضعیت</th>
            <th scope="col">عملیات</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>خظای فنی</td>
            <td>فنی</td>
            <td>بالا</td>
            <td>بی پاسخ</td>
            <td>
                <a href="#" class="btn btn-primary">نمایش</a>
                <a href="#" class="btn btn-danger">حذف</a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>خظای فنی</td>
            <td>فنی</td>
            <td>بالا</td>
            <td>بی پاسخ</td>
            <td>
                <a href="#" class="btn btn-primary">نمایش</a>
                <a href="#" class="btn btn-danger">حذف</a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>خظای فنی</td>
            <td>فنی</td>
            <td>بالا</td>
            <td>بی پاسخ</td>
            <td>
                <a href="#" class="btn btn-primary">نمایش</a>
                <a href="#" class="btn btn-danger">حذف</a>
            </td>
          </tr>

        </tbody>
      </table>
</div>

@endsection


