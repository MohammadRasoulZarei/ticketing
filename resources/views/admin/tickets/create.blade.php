@extends('admin.layouts.admin')
@section('title', 'ایجا تیکت ')

@section('content')
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">موضوع</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <div class="custom-file ">
                    <label class="custom-file-label" for="customFileLang"> فایل ضمیمه</label>
                    <input type="file" class="custom-file-input form-control" id="customFileLang" lang="es">
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <select class="custom-select  form-control-lg col-md-12 col-sm-12">
                    <option selected>واحد مدنظر را انتخاب کنید</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
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
