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
                <form action="" class="pt-5">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <select class="custom-select  form-control-lg col-md-12 col-sm-12">
                                <option selected>اولویت</option>
                                <option value="1">بالا</option>
                                <option value="2">متوسط</option>
                                <option value="3">پایین</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="custom-select  form-control-lg col-md-12 col-sm-12">
                                <option selected>وضعیت</option>
                                <option value="1">بی جواب</option>
                                <option value="2">جواب داده شده</option>
                                <option value="3">منتظر پاسخ</option>
                                <option value="3">بسته</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="custom-select  form-control-lg col-md-12 col-sm-12">
                                <option selected>ترتیب</option>
                                <option value="1">جدیدترین</option>
                                <option value="2">قدیمی ترین</option>
                            </select>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div style="display: flex">

                        <div class="form-check form-check-inline col-md-3 ">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">واحد مهندسی</label>
                        </div>
                        <div class="form-check form-check-inline col-md-3 ">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">واحد مهندسی</label>
                        </div>
                        <div class="form-check form-check-inline col-md-3 ">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">واحد مهندسی</label>
                        </div>
                        <div class="form-check form-check-inline col-md-3 ">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option3">
                            <label class="form-check-label" for="inlineCheckbox4">واحد مهندسی</label>
                        </div>
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
                            <td>22/09/1349 12:18</td>
                            <td>خظای فنی</td>
                            <td>فنی</td>
                            <td>بالا</td>
                            <td>بی پاسخ</td>
                            <td>
                                <a href="#" class="btn btn-primary">نمایش</a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>22/09/1349 12:18</td>
                            <td>خظای فنی</td>
                            <td>فنی</td>
                            <td>بالا</td>
                            <td>بی پاسخ</td>
                            <td>
                                <a href="#" class="btn btn-primary">نمایش</a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>22/09/1349 12:18</td>
                            <td>خظای فنی</td>
                            <td>فنی</td>
                            <td>بالا</td>
                            <td>بی پاسخ</td>
                            <td>
                                <a href="#" class="btn btn-primary">نمایش</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
