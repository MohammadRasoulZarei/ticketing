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
                        <h5 class="mb-2">پلن بصرفه</h5>
                        <p class="mb-1"><b>تیکت 3707121</b><span class="px-2">|</span><a href="#"
                                class="service-link"></a></p>
                        <p class="mb-2">بخش فروش</p>
                    </div>
                    <div class="view-ticket-info-box-2nd col-md-6">
                        <p class="mb-2"><span class="bold">وضعیت تیکت</span>&nbsp;<span style="color:#888888">تکمیل
                                شده</span></p>
                        <p class="mb-2 reg_date"><span class="bold">زمان ایجاد</span>۱۴۰۲/۰۹/۰۳</p>
                        <p class="mb-2 last_update"><span class="bold">آخرین بروزرسانی</span>21 روز قبل</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{-- messages part --}}
                <div class="row mb-3">
                    <div class="col-md-5"></div>
                    <div class="card col-md-7 bg-light">
                        <div class="card-header">ادمین - رسول</div>
                        <div class="card-body">


                            <p class="card-text">
                                متن تست تست تست تست تست تست تست تست تست
                                متن تست تست تست تست تست تست تست تست تست
                                متن تست تست تست تست تست تست تست تست تست
                                .
                            </p>
                            <h6 class="card-subtitle mb-2 text-left">22/2/131 12:18</h6>

                        </div>
                    </div>
                </div>

                <div class="card col-md-7 bg-primary">
                    <div class="card-header">کاربر - محمد</div>
                    <div class="card-body">


                        <p class="card-text">
                            متن تست تست تست تست تست تست تست تست تست
                            متن تست تست تست تست تست تست تست تست تست
                            متن تست تست تست تست تست تست تست تست تست
                            .
                        </p>
                        <h6 class="card-subtitle mb-2 text-white text-left">22/2/131 12:18</h6>

                    </div>
                </div>
            </div>
            <div class="col-12 messageP">
                <hr>
            </div>
            <div class="messageP">
                <form action="#">
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1"> پیام:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="custom-file ">
                            <label class="custom-file-label" for="customFileLang"> :فایل ضمیمه</label>
                            <input type="file" class="custom-file-input form-control" id="customFileLang" lang="es">
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
