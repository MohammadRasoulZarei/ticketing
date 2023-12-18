@extends('home.layouts.home')
@section('title', 'ایجا تیکت ')

@section('content')
    @include('home.sections.errors')
    <form action="{{route('panel.tickets.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">موضوع</label>
                <input type="text" name="subject" value="{{old('subject')}}" class="form-control" id="inputEmail4" placeholder="موضوع">
            </div>
            <div class="form-group col-md-6">
                <div class="custom-file">
                    <label class="custom-file-label"  for="customFileLang"> فایل ضمیمه</label>
                    <input type="file" name="attachment" class=" custom-file-input form-control" id="customFileLang">
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <select name="department_id" class="custom-select  form-control-lg col-md-12 col-sm-12">
                    <option value="">واحد مدنظر را انتخاب کنید</option>
                    @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <select name="priority" class="custom-select  form-control-lg col-md-12 col-sm-12">
                    <option value="">اولویت را انتخاب کنید</option>
                    <option value="top">بالا</option>
                    <option value="mid">متوسط</option>
                    <option value="low">پایین</option>
                </select>
            </div>

        </div>

        <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">متن پیام</label>
            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>

        <div class="clearfix"></div>




        <div class="form-group col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ایجاد</button>
        </div>
    </form>

@endsection
