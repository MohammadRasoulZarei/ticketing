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
            <div class="card-header">

                <div class="form-row pt-5">
                    <div class="form-group col-md-4">
                        <select target='#priority-input'
                            class="custom-select select-filter  form-control-lg col-md-12 col-sm-12">
                            <option value="">اولویت</option>
                            <option @selected(request()->has('priority') and request()->priority=='top') value="top">بالا</option>
                            <option @selected(request()->has('priority') and request()->priority=='mid') value="mid">متوسط</option>
                            <option @selected(request()->has('priority') and request()->priority=='low') value="low">پایین</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select target='#status-input'
                            class="custom-select select-filter form-control-lg col-md-12 col-sm-12">
                            <option value="">وضعیت</option>
                            <option @selected(request()->has('status') and request()->status=='unanswered') value="unanswered">بی جواب</option>
                            <option @selected(request()->has('status') and request()->status=='answered') value="answered">جواب داده شده</option>
                            <option @selected(request()->has('status') and request()->status=='checking') value="checking">منتظر پاسخ</option>
                            <option @selected(request()->has('status') and request()->status=='closed') value="closed">بسته</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select " target='#order-input' class="custom-select select-filter form-control-lg col-md-12 col-sm-12">
                                <option value="">ترتیب</option>
                                <option @selected(request()->has('order') and request()->order=='newest') value="newest">جدیدترین</option>
                                <option @selected(request()->has('order') and request()->order=='oldest')  value="oldest">قدیمی ترین</option>
                            </select>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <form action=""  class="pt-2">
                        <input type="hidden" id='priority-input' name="priority" disabled>
                        <input type="hidden" id="status-input" name="status" disabled>
                        <input type="hidden" id="order-input" name="order" disabled>
                        <div style="display: flex">

                             @foreach ($userDepartments as $department)

                            <div class="form-check form-check-inline col-md-3 ">
                                <input @checked(request()->has('departments') and in_array($department->id,request('departments'))) class="form-check-input check-input-{{$department->id}}" name="departments[]" type="checkbox"
                                    id="inlineCheckbox{{ $department->id }}" value="{{ $department->id }}">
                                <label class="form-check-label" for="inlineCheckbox{{ $department->id }}">
                                    {{ $department->name }}</label>
                            </div>
                            @endforeach

                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">فیلتر</button>
                    </div>

                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ردیف</th>
                                <th scope="col">تاریخ شروع</th>
                                <th scope="col"> فرستنده</th>
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
                              <td>{{$ticket->user->name}}</td>
                              <td>{{$ticket->subject}}</td>
                              <td>{{$ticket->department->name}}</td>
                              <td>{{$ticket->priority_value}}</td>
                              <td>{{$ticket->status_value}}</td>
                              <td>
                                  <a href="{{route('admin.tickets.show',$ticket->id)}}" class="btn btn-primary">نمایش</a>
                                  <a href="#" class="btn btn-danger">حذف</a>
                              </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection
    @section('script')
        <script>
            $('.select-filter').on('change', function() {
                let target=$(this).attr('target');
                if (this.value) {
                  $(target).attr({'disabled':false,'value':this.value});
                  //console.log( $(target).attr('id'));
                }else{
                    $(target).attr({'disabled':true});
                }

            });
        </script>
    @endsection
