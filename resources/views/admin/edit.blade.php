@extends('layouts.admin')

@section('content')

<div class="container">
    <form method="POST" class="mt-3" action="{{route('admin.project.update',$project->id)}}">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label class="form-label" for="title">Inserisci il titolo</label>
            <input class="form-control" type="text" value="{{$project->title}}" name="title" id="title">

        </div>





        <div class="mb-3">

            <label class="form-label" for="relase_date">Inserisci la data</label>
            <input class="form-control" type="datetime" value="{{$project->relase_date}}" name="relase_date" id="relase_date">

        </div>

        <div class="mb-3">

            <label class="form-label" for="description">Inserisci la descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$project->description}}</textarea>

        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Modifica</button>
        </div>
    </form>
</div>

@endsection