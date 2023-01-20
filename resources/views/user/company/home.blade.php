@extends('layout')

@section('content')
    @include('components.panel')
    <div class="col-12">
        <div class="container">
            {{ Auth::user()->name }}
            {{ Auth::user()->type }}
        </div>
    </div>
@endsection
