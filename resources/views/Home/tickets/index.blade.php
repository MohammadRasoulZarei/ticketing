@extends('home.layouts.home')
@section('title','لیست تیکت ها')
@section('subject')
تعداد تیکت ها({{$tickets->total()}})
@endsection
@section('content')
<div >
    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ردیف</th>
            <th scope="col">تاریخ ایجاد</th>
            <th scope="col">موضوع</th>
            <th scope="col">واحد</th>
            <th scope="col">اولویت</th>
            <th scope="col">وضعیت</th>
            <th scope="col">عملیات</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $key=> $ticket)
            <tr>
              <th scope="row">{{$tickets->firstItem()+$key}}</th>
              <td>{{zaman($ticket->created_at)}}</td>
              <td>{{$ticket->subject}}</td>
              <td>{{$ticket->department->name}}</td>
              <td>{{$ticket->priority_value}}</td>
              <td>{{$ticket->status_value}}</td>
              <td>
                  <a href="{{route('panel.tickets.show',$ticket->id)}}" class="btn btn-primary">نمایش</a>
                  <a href="#" class="btn btn-danger">حذف</a>
              </td>
            </tr>
            @endforeach


        </tbody>
      </table>
</div>

@endsection


