@extends('layouts.app-headless')
@section('extra-style')
    <style>
        body, html {
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #041D51;
        }

        * {
            box-sizing: border-box;
        }
    </style>
@endsection
@section('content')
    <div id="app">
        <home-page></home-page>
    </div>
@endsection
