@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$project['title']}}</h5>
            <p class="card-text">{{$project['description']}}</p>
            <p class="card-text">{{$project['relase_date']}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

</div>

@endsection