@extends('admin.layouts.admin')
@section('title', '  واحدهای من')

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
                <form action="{{route('admin.departments.set')}}" class="pt-5">


                    <div style="display: flex ">
                        @foreach ($departments  as $department )

                        <div class="form-check form-check-inline col-md-3 ">
                            <input class="form-check-input" name="departments[]" @checked(in_array($department->id,$userDepIDs)) type="checkbox" id="inlineCheckbox{{$department->id}}" value="{{$department->id}}">
                            <label class="form-check-label" for="inlineCheckbox{{$department->id}}"> {{$department->name}}</label>
                        </div>
                        @endforeach

                    </div>

                    <div class="clearfix"></div>




                    <div class="form-group col-md-12 text-center mt-3">
                        <button type="submit" class="btn btn-primary">انتخاب</button>
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
