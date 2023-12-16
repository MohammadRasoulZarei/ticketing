@extends('home.layouts.home')

@section('content')
{{auth()->user()->name}}
@endsection


