@extends('layouts.app')

@section('header')
    <navigation :has-logged-in="{{ Auth::check() ? 'true' : 'false' }}"></navigation>
@endsection
@section('content')
    <resume></resume>
@endsection
