@extends('layouts.app')
@section('extra-style')
    <style>
        body {
            background-color: #FFF;
        }
    </style>
@endsection
@section('header')
    <navigation :has-logged-in="{{ Auth::check() ? 'true' : 'false' }}"></navigation>
@endsection
@section('content')
    <resume></resume>
@endsection
