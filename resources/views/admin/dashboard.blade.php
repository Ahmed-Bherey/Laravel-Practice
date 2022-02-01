@extends('layouts.admin')
@section('title') Dashboard @endsection
@section('content')
    <h1>{{__('admin.dashboard')}}</h1>
    {{-- {{ LaravelLocalization::getCurrentLocale() }} --}}
@endsection