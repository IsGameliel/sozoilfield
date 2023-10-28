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
        background-color: red;
        margin: 0 auto;
        box-shadow: 4px 6px #80808042!important;
        color: white
    }
    .top .card .card-head{
        margin-top: 2rem;
        text-align: center;
    }

    .top .card .card_body h1{
        text-align: center;
        margin-top: 10rem;
    }
</style>

@section('content')

<main class="top">
    <div class="card">
        <div class="card-head">
            <h3>CERTIFICATE STATUS</h3>
        </div>
        <div class="card_body">
            <h1>Invalid ID Received</h1>
        </div>
    </div>
</main>

@endsection
