@extends('layouts.app-headless')

@section('content')
   <div id="app">
        <app :has-logged-in="{{ Auth::check() ? 'true' : 'false' }}" />
   </div>
@endsection