@extends('template/app')

@section('content')
    <h1 style="margin-top: 50px; margin-bottom: 50px; font-size: 50px">Dashboard</h1>

    @foreach($tasks as $task)
        <ul>
            <li>{{$task}}</li>
        </ul>
    @endforeach
@endsection

@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-primary" href="/dashboard">Dashboard </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/project">Project <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/customer">Customer <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
@endsection

