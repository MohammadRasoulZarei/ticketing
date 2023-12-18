@extends('home.layouts.home')
@section('title', 'لیست تیکت ها')
@section('subject')
    تعداد تیکت ها(20)
@endsection
@section('style')
    <style>
        hr {
            border-top: 1px solid #303030;
        }
        .messageP{
            background-color: #f8f8f8
        }
    </style>
@endsection
@section('content')
    <div>
        <div class="card col-12">
            <div class="card-header">
                <div class="row">
                    <div class="view-ticket-info-box-1st col-md-6">
                        <h5 class="mb-2">{{$ticket->subject}}</h5>
                        <p class="mb-1"><b> اولویت:{{$ticket->priority_value}}</b><span class="px-2"></span></p>
                        <p class="mb-2">بخش:{{$ticket->department->name}}</p>
                    </div>
                    <div class="view-ticket-info-box-2nd col-md-6">
                        <p class="mb-2"><span class="bold">وضعیت تیکت:</span>&nbsp;<span style="color:#888888">
                                {{$ticket->status_value}}</span></p>
                        <p class="mb-2 reg_date"><span class="bold">زمان ایجاد</span>{{zaman($ticket->created_at)}}</p>
                        <p class="mb-2 last_update"><span class="bold">آخرین پاسخ ادمین: </span>{{$pastTime}}  </p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{-- messages part --}}
                @foreach ($messages as $message )
                @if ($message->user_id==auth()->id())
                <div class="card col-md-7 bg-light-blue mb-3">
                    <div class="card-header">{{$message->user->role_value}} - {{$message->user->name}}</div>
                    <div class="card-body">


                        <p class="card-text">
                           {{$message->message}}
                        </p>
                        <h6 class="card-subtitle mb-2 text-white text-left">{{zaman($message->created_at)}}</h6>

                    </div>
                </div>
                <div class="clearfix"></div>
                @else
                <div class="row mb-3">
                    <div class="col-md-5"></div>
                    <div class="card col-md-7 bg-light">
                        <div class="card-header"> {{$message->user->role_value}} - {{$message->user->name}}</div>
                        <div class="card-body">


                            <p class="card-text">
                                {{$message->message}}
                            </p>
                            <h6 class="card-subtitle mb-2 text-left">{{zaman($message->created_at)}}</h6>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                @endif



                @endforeach

                 {{-- end messages part --}}
            </div>
            <div class="col-12 messageP">
                <hr>
            </div>
            <div class="messageP">
                @include('home.sections.errors')
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1"> پیام:</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="custom-file ">
                            <label class="custom-file-label" for="customFileLang"> :فایل ضمیمه</label>
                            <input type="file" name="attachment" class="custom-file-input form-control" id="customFileLang" lang="es">
                        </div>
                    </div>
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection
