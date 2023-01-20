@extends('layout')

@section('content')
    @include('components.header')
    <div class="col-12">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('images/logo.png') }}" alt="" style="width: 70px;height: auto">
            <h1 class="display-5 fw-bold">Fur.am</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Հայաստան - Ռուսաստան ամենամեժ բեռնափոխադրումների օնլայն հարթակ</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('register') }}"><button type="button" class="btn btn-primary btn-lg px-4 gap-3"><i class="fa-solid fa-truck me-1"></i> Վարրորդ</button></a>
                    <a href="{{ route('register',['type' => 1]) }}"><button type="button" class="btn btn-outline-secondary btn-lg px-4"><i class="fa-solid fa-building me-1"></i> Կազմակերպություն</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
