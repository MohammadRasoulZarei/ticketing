@extends('admin.layouts.admin')
@section('title', 'ایجا تیکت ')

@section('content')
    <form>

        <div class="clearfix"></div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <img src="{{url(env('ATTACHMENT_PATH').$file->attachment)}}" alt="">
            </div>
            <div class="form-group col-md-6">
                <select class="custom-select  form-control-lg col-md-12 col-sm-12">
                    <option selected>اولویت را انتخاب کنید</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

        </div>

        <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">متن پیام</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>

        <div class="clearfix"></div>




        <div class="form-group col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ایجاد</button>
        </div>
    </form>

@endsection
