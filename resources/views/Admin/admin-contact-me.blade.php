@extends('layouts.app')

@section('header')
    <navigation :has-logged-in="{{ Auth::check() ? 'true' : 'false' }}" :is-admin="true"></navigation>
@endsection
@section('content')
    <admin-contact-me></admin-contact-me>
@endsection
