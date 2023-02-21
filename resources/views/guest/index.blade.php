@extends('layouts.app')

@section('content')

<div class="container">

    @foreach ($projects as $project)
    <div class="card mt-3 mb-3">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$project['title']}}</h5>
            <p class="card-text">{{$project['description']}}</p>
            <p class="card-text">{{$project['relase_date']}}</p>
            <a href="{{route('guest.show',$project->id)}}" class="btn btn-primary">Show</a>
        </div>
    </div>
    @endforeach
    {{$projects->links()}}
</div>

@endsection