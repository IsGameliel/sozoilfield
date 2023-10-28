@extends('layouts.main')

<style>
    .top{
        margin-top: 17rem;
        margin-bottom: 12rem;
    }
    .header{
        background: black !important;
    }
    .top .card{
        width: 900px;
        height: 500px;
        background-color: ghostwhite;
        margin: 0 auto;
        box-shadow: 4px 6px #80808042!important;
    }
    .top .card .card-head{
        margin-top: 2rem;
        text-align: center;
    }
    .top .card .card-body img{
        width: 28% !important;
        margin-left: 37rem;
        margin-top: -2rem;
    }
</style>

@section('content')

<main class="top">
    <div class="card">
        <div class="card-head">
            <h3>CERTIFICATE STATUS</h3>
        </div>
        <div class="card-body">
            @if($track)
                <div class="container">
                    <h2>{{$track->cert_title}}</h2>
                    <p>Name: {{ $track->user_name}}</p>
                    <p>Date: {{ $track->cert_date}}</p>
                    <h5>Provider: {{ $track->cert_provider}}</h5>
                    <img src="{{ asset('assets/img/verify.png') }}" alt="">
                </div>
            @endif
        </div>
    </div>
</main>

@endsection
